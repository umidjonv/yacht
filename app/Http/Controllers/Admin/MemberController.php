<?php


namespace App\Http\Controllers\Admin;



use App\Http\Controllers\Controller;
use App\Models\Member;

class MemberController extends Controller
{

    public function index(){
        $members = Member::with('user')->get();

        return view('admin.member.index')->with(['model'=> $members]);
    }

    public function view($id){
        $member = Member::find($id)->with('user')->get();

        return view('admin.member.view')->with(['model'=> $member]);
    }

}
