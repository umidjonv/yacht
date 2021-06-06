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

class BannerController extends BaseController
{
    use Notifiable;

    public function index(){
        $data = Banner::orderBy('Order')->with('event')->get();



        return view('admin.banner.index')->with('model', $data);
    }




}
