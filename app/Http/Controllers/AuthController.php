<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ts_user;

class AuthController extends Controller
{
    function performRegister(Request $request){
        $request->validate([
            'FullName' => 'required', 
            'Email' => 'required | email',
            'Register_Password' => 'required|between:8,255',
            'Password_Confirm' => 'required|same:Register_Password'
        ]);


    $ts_users = new ts_user();
    $ts_users->full_name = $request->input('FullName');
    $ts_users->email = $request->input('Email');
    $ts_users->pword = $request->input('Register_Password');
    $ts_users->date_modified = date("Y-m-d");
    $ts_users->date_created = date("Y-m-d");
    $ts_users->save();
    
    return redirect()->intended('home');
}

    function performLogin(Request $request){
        $request->validate([
            'Email' => 'required | email',
            'Password' => 'required'
        ]);

    $user = ts_user::where('email',$request->input('Email'))
                    ->where('pword',$request->input('Password'))
                    ->first();

if       ($user->is_active == 0){
    return response('Your Account is inactive!');
} else if($user->is_banned == 1){
    return response('Your Account is Banned!');
} else{
    return redirect()->intended('home');
        }
    }
}