<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class MainController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function save(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:Admins',
            'password' => 'required|min:8|max:20',
        ]);

        $admin = new Admin;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $save = $admin->save();

        if ($save) {
            return back()->with('success', 'you are registered ');
        } else {
            return back()->with('fail', 'Something wrong');
        }
    }

    public function check(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:20',
        ]);

        $userInfo = Admin::where('email', '=', $request->email)->first();


        if (!$userInfo) {
            return back()->with('fail', 'we do not recognize you');
        } else {

            if (Hash::check($request->password, $userInfo->password)) {

                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('admin/dashboard');
            } else {
                return back()->with('fail', 'incorrect password');
            }
        }
    }

    public function logout()
    {


        if (session()->has('LoggedUser')) {

            session()->pull('LoggedUser');
            return redirect(route('auth.login'));
        }
    }

    public function dashboard()
    {
        $data = ['LoggedUserInfo' => Admin::where('id', '=', session('LoggedUser'))->first()];
        return view('admin.dashboard', $data);
    }

    public function administrators() {
        $administrators = DB::select('select * from admins');

        return view('admin.administrators',['administrators'=>$administrators]);
    }


}
