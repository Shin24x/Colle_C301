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
Route::view('/', 'Authentication/login',[
    'title' => 'Login'
]);
Route::view('/register', 'Authentication/register',[
    'title' => 'Signup'
]);

Route::post('perform-register', [AuthController::class, 'perfomRegister']);


