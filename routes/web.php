<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::view('dashboard', 'dashboard',[
    'title' => 'Main Dashboard'
]); 
Route::view('/', 'Authentication/loginregister',[
    'title' => 'Login'
]);
Route::view('/home', 'Dashboard/home',[
    'title' => 'Dashboard'
]);
Route::view('/video', 'Video/video',[
    'title' => 'Videos'
]);

Route::post('perform-register', [AuthController::class, 'performRegister']);
Route::post('perform-login', [AuthController::class, 'performLogin']);

