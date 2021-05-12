<?php


namespace App\Http\Controllers\Admin;



use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    public function index(){
        return view('admin.dashboard.index');
    }

    public function mobile_index(){
        return view('admin.mobile.index');
    }


//
//    public function show($id){
//        $data = Post::findOrFail($id);
//        return view('posts.show')->with('data', $data);
//    }

}
