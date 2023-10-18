<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(){

    $this->middleware('guest')->except('logout');
    
    }

    public function logout(){
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
