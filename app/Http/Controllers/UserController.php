<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function ditStaffs()
    {
        $staffs = DB::connection('dit')->table('staffs')->where('department', 'computer')->get();

        return view('staff.viewStaff', ['staffs' => $staffs]);
    }

//    public function __construct()
//    {
//
//        $this->middleware('guest')->except('logout');
//
//    }

    public function logout()
    {
        auth()->logout();

        return redirect('/admin');
    }

    public function adminLogin(Request $request)
    {
        $inputs = $request->validate([
            'loginemail' => 'required',
            'loginpassword' => 'required'
        ]);

        if(auth()->attempt(['email' => $inputs['loginemail'], 'password' => $inputs['loginpassword']]))
        {
            $request->session()->regenerate();
        }

        return redirect('/admin');

    }
}
