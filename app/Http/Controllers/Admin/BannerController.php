<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\YachtRequest;
use App\Models\Activity;
use App\Models\Banner;
use App\Models\Schedule;
use App\Models\Vendor;
use App\Models\Yacht;

use App\Models\YachtImage;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Validation\Validator;
use phpDocumentor\Reflection\Types\Integer;
use Illuminate\Support\Str;

class BannerController extends Controller
{
    use Notifiable;

    public function index(){
        $data = Banner::all();

        return view('admin.banner.index')->with('model', $data);
    }

    public function create()
    {

    }


    public function edit(){
        $banners = Banner::with('event')->get();


        return view('admin.banner.edit')->with(['model'=> $banners]);
    }

    public function store(Request $request){
//        $validator = \Validator::make($request->all(), [
//            "*.name"    => "required",
//
//        ]);
//
//        if($validator->fails())
//        {
//            return redirect('admin/banner/edit')
//                ->withInput()
//                ->withErrors($validator);
//        }

        dd($request->all());

//        foreach ($request->all() as $model)
//        {
//            foreach ((array) $request->file($index.'images') as $image) {
//                $f_name = $this->get_image_name($image->getClientOriginalExtension());
//
//                $image->storeAs('public/yachts', $f_name);
//
//                $banner = new Banner();
//                $banner->Image = $f_name;
//                $banner->Order = $request->input($index.'Order');
//
//        }
//        }


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

    public function update(YachtRequest $request, $id){

        //return dd($request->all());
        $validated = $request->validated();

        $yacht = Yacht::find($request->Id);
        $yacht->VendorId = $request->VendorId;
        $yacht->Name = $request->Name;
        $yacht->Area = $request->Area;
        $yacht->Address = $request->Address;
        $yacht->Capacity = $request->Capacity;

        $yacht->save();


        $oldImages = YachtImage::where('YachtId', $yacht->Id)->select('Id')->get();

        $deleteImages = $this->image_differences($oldImages, $request->preloaded);


        //return dd($deleteImages);

        $this->delete_images($deleteImages);



        foreach ((array) $request->file('images') as $image) {
            $f_name = $this->get_image_name($image->getClientOriginalExtension());
            $image->storeAs('public/yachts', $f_name);

            YachtImage::create([
                'Name' => $f_name,
                'YachtId' => $yacht->Id
            ]);
        }

        if($yacht!=null && $yacht->Id>0)
        {
            $activity = Activity::where('YachtId', $yacht->Id)->first();

            if($activity == null)
                $activity = new Activity();

            $activity->StartTime = $request->input('activity.StartTime');
            $activity->EndTime = $request->input('activity.EndTime');
            $activity->Regularity = $request->input('activity.Regularity');

            $activity->save();

            if($request->IsSchedule) {

                Validator::make($request->all(), [
                    'schedule.StartDate' => 'date_format:d.m.Y',
                    'schedule.EndDate' => 'date_format:d.m.Y|required_with:StartDate',
                    'schedule.IsActive' => 'boolean',
                ]);

                $schedule = new  Schedule();
                $schedule->IsActive = $request->schedule->IsActive;
                $schedule->StartDate = $request->schedule->StartDate;
                $schedule->EndDate = $request->schedule->EndDate;

                $schedule->save();
            }else{
                Schedule::where('YachtId', $yacht->Id)->delete();
            }

            return redirect()->route('admin.yacht');

        }

        return redirect()->route('admin.yacht.add');
    }
//
//    public function show($id){
//        $data = Post::findOrFail($id);
//        return view('posts.show')->with('data', $data);
//    }

}
