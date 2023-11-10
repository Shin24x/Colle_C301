<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\buddy_user;

class AuthController extends Controller
{
    function performRegister(Request $request){
        $request->validate([
            'reg_full_name' => 'required', 
            'reg_email' => 'required | email',
            'password' => 'required | max:40 | min: 8, | confirmed',
            'password_confirmation' => 'required'
        ]);
    
    $buddy_users = new buddy_user();
    $buddy_users->full_name = $request->input('reg_full_name');
    $buddy_users->email = $request->input('reg_email');
    $buddy_users->pword = $request->input('password');
    $buddy_users->date_modified = date("Y-m-d");
    $buddy_users->date_created = date("Y-m-d");
    $buddy_users->save();
    
    return response ("Success!!");
}

function performLogin(Request $request){
$request->validate([
    'log_email' => 'required | email',
    'log_password' => 'required | confirmed',
]);

$user = buddy_user::where('email',$request->input('log_email'))
                    ->where('pword',$request->input('log_password'))
                    ->first();

if($user->is_active == 0){
    return response('Your Account is inactive!');
} else if($user->is_banned == 1){
    return response('Your Account is Banned!');
} else{
    return response ("Success!!");
        }
    }
}