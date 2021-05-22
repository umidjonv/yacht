<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\EventRequest;
use App\Models\Event;
use App\Http\Controllers\Controller;
use App\Models\EventImage;
use Illuminate\Support\Str;

class EventController extends Controller
{
    public function index() {
        return view('admin.event.index', [
            'events' => Event::with('images')->get()
        ]);
    }

    public function create() {
        $event = Event::get();
        return view('admin.event.create', [
            'event' => $event
        ]);
    }

    public function store(EventRequest $request) {
        $event = new Event();
        $event->Title = $request->Title;
        $event->ShortDescription = $request->ShortDescription;
        $event->Description = $request->Description;
        $event->EventDate = $request->EventDate;
        $event->save();

        foreach ((array) $request->file('images') as $image) {
            $name = 'IMG'.date('Y-m-d H-i-s', rand(0, 999)).'.'.Str::lower($image->getClientOriginalExtension());
            $image->storeAs('events', $name);

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

    public function update(EventRequest $request, Event $event){
        $event->Title = $request->Title;
        $event->ShortDescription = $request->ShortDescription;
        $event->Description = $request->Description;
        $event->EventDate = $request->EventDate;
        $event->save();

        EventImage::where('EventId', $event)->delete();

        foreach ((array) $request->file('images') as $image) {
            $name = 'IMG'.date('Y-m-d H-i-s', rand(0, 999)).'.'.Str::lower($image->getClientOriginalExtension());
            $image->storeAs('events', $name);

            EventImage::create([
                'Name' => $name,
                'EventId' => $event->Id
            ]);
        }
        return redirect()->route('admin.event');
    }

}
