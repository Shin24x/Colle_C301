<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\buddy_user;

class AuthController extends Controller
{
    function perfomRegister(Request $request){
        $request->validate([
            'reg_full_name' => 'required', 
            'reg_email' => 'required | email | max: 40 | min: 6',
            'password' => 'required | max:40 | min: 8, | confirmed',
            'password_confirmation' => 'required'
        ]);

        $data = [
            'full_name' => $request->input('reg_full_name'),
            'email' => $request->input('reg_email'),
            'pword' => $request->input('password'),
            'date_created' => $request->date('Y-m-d'),
            'date_modified' => $request->date('Y-m-d')
        ];

        buddy_user::create($data);
        return response("Success!");
    }
}
