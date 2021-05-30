<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\YachtRequest;
use App\Models\Activity;
use App\Models\Banner;
use App\Models\Event;
use App\Models\Schedule;
use App\Models\Vendor;
use App\Models\Yacht;

use App\Models\YachtImage;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use phpDocumentor\Reflection\Types\Integer;
use Illuminate\Support\Str;
use Validator;

class BannerController extends BaseController
{
    use Notifiable;

    public function index(){
        $data = Banner::orderBy('Order')->with('event')->get();



        return view('admin.banner.index')->with('model', $data);
    }

    public function create()
    {

    }


    public function edit(){
        $banners = Banner::with('event')->get();


        return view('admin.banner.add')->with(['model'=> $banners]);
    }

    public function save(Request $request){

        $preloadImages = array();
        $preloadImages = $request->preloaded;

        //return dd($request->all());

        if($preloadImages!=null) {
            $banners = Banner::all();
            foreach ($banners as $banner) {
                if (!in_array($banner->Id, $preloadImages)) {
                    $banner->delete();
                }
            }
        }else{
            Banner::truncate();
        }



        $index = 0;

        foreach ((array) $request->file('images') as $image) {
            $f_name = $this->get_image_name($image->getClientOriginalExtension());

            $image->storeAs('public/banners', $f_name);

            $banner = new Banner();
            $banner->Image = $f_name;
            $banner->Order = 1;

            $banner->save();


        }


        return redirect('admin/banner');
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

    private function get_image_name($ext)
    {
        return 'IMG_'.date('Y-m-d H-i-s', time()).'.'.rand(0,999).'.'.Str::lower($ext);
    }

    private function delete_images($images)
    {
        foreach ($images as $image)
        {
            YachtImage::where('Id', $image)->delete();
        }

    }

    public function update(Request $request)
    {
        $banners = Banner::all();

        foreach ($banners as $banner)
        {
            //return dd($request->input('banner'.$banner->Id.'_Id'));

            if($banner->Id == $request->input('banner'.$banner->Id.'_Id'))
            {

                $banner->Order = $request->input('banner'.$banner->Id.'_Order');
                $banner->save();
            }
        }

        return redirect()->route('admin.banner');
    }

    public function events($id)
    {
        $banner = Banner::find($id);

        $events = Event::orderBy('Id', 'desc')->with('images')->get();

        return view('admin.banner.events')->with(['model'=>$events, 'banner'=>$banner]);
    }

    public function detach_event($id)
    {
        $banner = Banner::find($id);

        $banner->EventId = null;
        $banner->save();

        return redirect()->route('admin.banner');
    }

    public function attach_event(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'bannerId'=>'required|integer',
            'eventId'=>'required|integer',
        ]);



        if($validator->fails())
        {
            throw new \Exception("validation failed");
        }

        $banner = Banner::find($request->bannerId);

        $event = Event::find($request->eventId);

        //return dd($bannerId. " " . $eventId);

        if($event!=null)
        {
            $banner->EventId = $event->Id;
            $banner->save();

            return response()->json('success');
        }

        return response()->json('not found');

    }


}
