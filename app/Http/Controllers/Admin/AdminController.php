<?php


namespace App\Http\Controllers\Admin;



use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function index(){
        return view('admin.dashboard.index');
    }

    public function mobile_index(){
        return view('admin.mobile.index');
    }

    public function profile()
    {
        if(!Auth::check())
        {
            return redirect('/login');
        }

        return view('admin.profile');

    }


//
//    public function show($id){
//        $data = Post::findOrFail($id);
//        return view('posts.show')->with('data', $data);
//    }

}
