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


Route::view('/html', 'Video/html',[
    'title' => 'html'
]);
Route::view('/java', 'Video/java',[
    'title' => 'java'
]);
Route::view('/javascript', 'Video/javascript',[
    'title' => 'javascript'
]);
Route::view('/mysql', 'Video/mysql',[
    'title' => 'mysql'
]);
Route::view('/php', 'Video/php',[
    'title' => 'php'
]);
Route::view('/python', 'Video/python',[
    'title' => 'python'
]);

//java modules
Route::view('/javaeasy', 'modules/java/javaeasy',[
    'title' => 'javaeasy'
]);
Route::view('/javamedium', 'modules/java/javamedium',[
    'title' => 'javamedium'
]);
Route::view('/javahard', 'modules/java/javahard',[
    'title' => 'javahard'
]);
//html modules
Route::view('/htmleasy', 'modules/html/htmleasy',[
    'title' => 'htmleasy'
]);
Route::view('/htmlmedium', 'modules/html/htmlmedium',[
    'title' => 'htmlmedium'
]);
Route::view('/htmlhard', 'modules/html/htmlhard',[
    'title' => 'htmlhard'
]);
//js modules
Route::view('/jseasy', 'modules/javascript/jseasy',[
    'title' => 'jseasy'
]);
Route::view('/jsmedium', 'modules/javascript/jsmedium',[
    'title' => 'jsmedium'
]);
Route::view('/jshard', 'modules/javascript/jshard',[
    'title' => 'jshard'
]);
//mysql modules
Route::view('/sqleasy', 'modules/mysql/sqleasy',[
    'title' => 'sqleasy'
]);
Route::view('/sqlmedium', 'modules/mysql/sqlmedium',[
    'title' => 'sqlmedium'
]);
Route::view('/sqlhard', 'modules/mysql/sqlhard',[
    'title' => 'sqlhard'
]);
//php modules
Route::view('/phpeasy', 'modules/php/phpeasy',[
    'title' => 'phpeasy'
]);
Route::view('/phpmedium', 'modules/php/phpmedium',[
    'title' => 'phpmedium'
]);
Route::view('/phphard', 'modules/php/phphard',[
    'title' => 'phphard'
]);

//python modules
Route::view('/pyeasy', 'modules/python/pyeasy',[
    'title' => 'pyeasy'
]);
Route::view('/pymedium', 'modules/python/pymedium',[
    'title' => 'pymedium'
]);
Route::view('/pyhard', 'modules/python/pyhard',[
    'title' => 'pyhard'
]);

Route::post('perform-register', [AuthController::class, 'performRegister']);
Route::post('perform-login', [AuthController::class, 'performLogin']);

