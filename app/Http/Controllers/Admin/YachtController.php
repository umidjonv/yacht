<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\YachtRequest;
use App\Models\Activity;
use App\Models\Schedule;
use App\Models\Vendor;
use App\Models\Yacht;

use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Validation\Validator;
use phpDocumentor\Reflection\Types\Integer;

class YachtController extends Controller
{
    use Notifiable;

    public function index(){
        $data = Yacht::all();


        return view('admin.yacht.index')->with('data', $data);
    }

    public function by_vendor($vendorId){


        $data = Yacht::where('VendorId', $vendorId)->with('vendor')->get();

        //return dd($data);


        return view('admin.yacht.index')->with('data', $data);
    }

    public function add(){
        $vendors = Vendor::all();
        $model = new Yacht();
        $activity = new Activity();

        return view('admin.yacht.add')->with(['vendors'=> $vendors, 'model'=>$model, 'activity'=>$activity]);
    }

    public function change($id){
        $vendors = Vendor::all();
            $model = Yacht::find($id);

        if($model != null)
        {
            $activity = Activity::where('YachtId', $model->Id)->first();
        }else{
            $activity = new Activity();
        }


        return view('admin.yacht.add')->with(['vendors'=> $vendors, 'model'=>$model, 'activity'=>$activity]);
    }

    public function store(YachtRequest $request){

        $validated = $request->validated();

        $yacht = new Yacht();
        $yacht->VendorId = $request->VendorId;
        $yacht->Name = $request->Name;
        $yacht->Area = $request->Area;
        $yacht->Address = $request->Address;
        $yacht->Capacity = $request->Capacity;

        $yacht->save();


        if($yacht->Id>0)
        {
            $activity = new Activity();
            $activity->StartTime = $request->input('activity.StartTime');
            $activity->EndTime = $request->input('activity.EndTime');
            $activity->Regularity = $request->input('activity.Regularity');
            $activity->YachtId = $yacht->Id;
            $activity->save();

            if($request->IsSchedule) {

                Validator::make($request->all(), [
                    'schedule.StartDate' => 'date_format:d.m.Y',
                    'schedule.EndDate' => 'date_format:d.m.Y|required_with:StartDate',
                    'schedule.IsActive' => 'boolean',
                ]);

                $schedule = new  Schedule();
                $schedule->IsActive = input('schedule.IsActive');
                $schedule->StartDate = input('schedule.StartDate');
                $schedule->EndDate = input('schedule.EndDate');
                $schedule->YachtId = $yacht->Id;

                $schedule->save();
            }

        }

        return redirect('admin/yacht');
    }

    public function update(YachtRequest $request){

        $validated = $request->validated();

        $yacht = Yacht::find($request->Id);
        $yacht->VendorId = $request->VendorId;
        $yacht->Name = $request->Name;
        $yacht->Area = $request->Area;
        $yacht->Address = $request->Address;
        $yacht->Capacity = $request->Capacity;

        $yacht->save();

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
