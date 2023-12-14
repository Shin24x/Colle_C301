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
Route::get('/html-easy-quiz', [AuthController::class, 'showHtmlEasyQuiz'])->name('html.easy.quiz');

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
Route::view('/library', 'library/library',[
    'title' => 'library'
]);
Route::view('/flashcards', 'flashcards/flashcards',[
    'title' => 'flashcards'
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

//quizzes
Route::view('/quizhtmleasy', 'quizzes/html/qhtmleasy',[
    'title' => 'quizhtmleasy'
]);
Route::view('/quizhtmlmedium', 'quizzes/html/qhtmlmedium',[
    'title' => 'quizhtmlmedium'
]);
Route::view('/quizhtmlmhard', 'quizzes/html/qhtmlhard',[
    'title' => 'quizhtmlmhard'
]);

Route::view('/quizjavaeasy', 'quizzes/html/qjavaeasy',[
    'title' => 'quizjavaeasy'
]);
Route::view('/quizjavamedium', 'quizzes/html/qjavamedium',[
    'title' => 'quizjavamedium'
]);
Route::view('/quizjavahard', 'quizzes/html/qjavahard',[
    'title' => 'quizjavahard'
]);

Route::view('/quizjseasy', 'quizzes/html/qjseasy',[
    'title' => 'quizjseasy'
]);
Route::view('/quizjsmedium', 'quizzes/html/qjsmedium',[
    'title' => 'quizjsmedium'
]);
Route::view('/quizjshard', 'quizzes/html/qjshard',[
    'title' => 'quizjshard'
]);

Route::view('/quizmysqleasy', 'quizzes/html/qsqleasy',[
    'title' => 'quizmysqleasy'
]);
Route::view('/quizmysqlmedium', 'quizzes/html/qsqlmedium',[
    'title' => 'quizmysqlmedium'
]);
Route::view('/quizmysqlhard', 'quizzes/html/qsqlhard',[
    'title' => 'quizmysqlhard'
]);

Route::view('/quizphpeasy', 'quizzes/html/qphpeasy',[
    'title' => 'quizphpeasy'
]);
Route::view('/quizphpmedium', 'quizzes/html/qphpmedium',[
    'title' => 'quizphpmedium'
]);
Route::view('/quizphphard', 'quizzes/html/qphphard',[
    'title' => 'quizphphard'
]);

Route::view('/quizpythoneasy', 'quizzes/html/qpyeasy',[
    'title' => 'quizpythoneasy'
]);
Route::view('/quizpythonmedium', 'quizzes/html/qpymedium',[
    'title' => 'quizpythonmedium'
]);
Route::view('/quizpythonhard', 'quizzes/html/qpyhard',[
    'title' => 'quizpythonhard'
]);

//flashcards
Route::view('/flashhtml', 'flashcards/flashhtml',[
    'title' => 'flashhtml'
]);

Route::view('/flashjava', 'flashcards/flashjava',[
    'title' => 'flashjava'
]);

Route::view('/flashjs', 'flashcards/flashjs',[
    'title' => 'flashjs'
]);

Route::view('/flashphp', 'flashcards/flashphp',[
    'title' => 'flashphp'
]);

Route::view('/flashpy', 'flashcards/flashpy',[
    'title' => 'flashpy'
]);

Route::view('/flashsql', 'flashcards/flashsql',[
    'title' => 'flashsql'
]);

Route::post('perform-register', [AuthController::class, 'performRegister']);
Route::post('perform-login', [AuthController::class, 'performLogin']);

