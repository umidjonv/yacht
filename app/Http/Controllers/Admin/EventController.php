<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\EventRequest;
use App\Models\Event;
use App\Http\Controllers\Controller;
use App\Models\EventImage;
use App\Models\YachtImage;
use Illuminate\Support\Str;

class EventController extends Controller
{
    public function index() {

        $event = Event::with('images')->get();
        return view('admin.event.index', [
            'events' => $event
        ]);
    }

    public function create() {
        $event = Event::get();
        return view('admin.event.create', [
            'event' => $event
        ]);
    }

    public function store(EventRequest $request) {
        $validated = $request->validated();



        $event = new Event();
        $event->Title = $request->Title;
        $event->ShortDescription = $request->ShortDescription;
        $event->Description = $request->Description;
        $event->EventDate = date('Y-m-d H:i:s', strtotime($request->EventDate));
        $event->save();

        foreach ((array) $request->file('images') as $image) {
            $name = $this->get_image_name($image->getClientOriginalExtension());
            $image->storeAs('public/events', $name);

            EventImage::create([
                'Name' => $name,
                'EventId' => $event->Id
            ]);
        }
        return redirect()->route('admin.event');
    }

    public function edit(Event $event) {
        return view('admin.event.edit',[
            'event' => $event
        ]);
    }

    public function update(EventRequest $request){

        $validated = $request->validated();

        //return dd($request->all());

        $event = Event::find($request->Id);
        $event->Title = $request->Title;
        $event->ShortDescription = $request->ShortDescription;
        $event->Description = $request->Description;
        $event->EventDate = date('Y-m-d H:i:s', strtotime($request->EventDate));

        $event->save();

        $oldImages = EventImage::where('EventId', $event->Id)->select('Id')->get();

        $deleteImages = $this->image_differences($oldImages, $request->preloaded);


        foreach ((array) $request->file('images') as $image) {
            $name = $this->get_image_name($image->getClientOriginalExtension());
            $image->storeAs('public/events', $name);
            $this->delete_images($deleteImages);

            EventImage::create([
                'Name' => $name,
                'EventId' => $event->Id
            ]);
        }
        return redirect()->route('admin.event');
    }

    private function get_image_name($ext)
    {
        return 'IMG_'.date('Y-m-d H-i-s', time()).'.'.rand(0,999).'.'.Str::lower($ext);
    }

    private function delete_images($images)
    {
        foreach ($images as $image)
        {
            EventImage::where('Id', $image)->delete();
        }

    }

    private function image_differences($fromModel, $fromView)
    {
        $deleteimage = array();

        foreach ($fromModel as $image)
        {
            if($fromView == null||!in_array($image->Id,  $fromView))
            {
                $deleteimage[] = $image->Id;
            }
        }

        return $deleteimage;

    }

}
