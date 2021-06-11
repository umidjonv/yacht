<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin.dashboard.index');
    }

    public function mobile_index()
    {
        return view('admin.mobile.index');
    }

    public function profile()
    {
        if (!Auth::check()) {
            return redirect('/login');
        }
        return view('admin.profile');
    }

    /**
     * @param UserRequest $request
     * @param User $user
     * @return RedirectResponse
     */
    public function update(UserRequest $request, User $user): RedirectResponse
    {
        $update_data = [
            "contact" => $request->contact,
            'email' => $request->email,
        ];
        if ($file = $request->file('photo')) {
            Storage::delete("users/{$user->photo}");
            $f_name = "IMG_" . date("Y-m-d_H-i-s") . "." . strtolower($file->getClientOriginalExtension());
            $file->storeAs("public/users", $f_name);
            $update_data['photo'] = $f_name;
        }
        if (!is_null($request->password) && password_verify($request->old_password, $user->password)) {
            $update_data["password"] = bcrypt($request->password);
        }

        User::where('id', $user->id)->update($update_data);

        return back()->with('message', __("profile.updated_successfully"));
    }


//
//    public function show($id){
//        $data = Post::findOrFail($id);
//        return view('posts.show')->with('data', $data);
//    }

}
