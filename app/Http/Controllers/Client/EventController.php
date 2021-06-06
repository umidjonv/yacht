<?php


namespace App\Http\Controllers\Client;

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
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Integer;
use Illuminate\Support\Str;
use Validator;

class EventController extends Controller
{

    public function view($id){
        $event = Event::where('Id',$id)->with('images')->first();

        $images = $event->images()->get();

        if($images!=null)
        {
            return view('client.mobile.event.view')->with(['model'=>$event, 'images'=>$images]);
        }

        return view('client.mobile.event.view')->with(['model'=>$event]);


    }

}
