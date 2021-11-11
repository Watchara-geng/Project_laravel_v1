<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\PaperController;
use App\Http\Controllers\ScopuscallController;
use App\Http\Controllers\ScopusController;
use App\Http\Controllers\ResearchProjectController;
use App\Http\Controllers\ResearchGroupController;
use App\Http\Controllers\CalltciController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('scopus', function () {
    return view('callscopus');
});
Route::get('test', function () {
    return view('teacherdash');
});
Route::get('/tci', [CalltciController::class, 'run']);

//Route::get('scopuscall',"ScopusController@callapi");
//Route::resource('researchers', [App\Http\Controllers\TeacherController::class, 'callapi']);

Route::resource('/researcher', TeacherController::class,["name"=>"researchers"]);
Route::resource('paper', PaperController::class,["name"=>"papers"]);
Route::resource('callscopus3', ScopuscallController::class);
//Route::resource('scopus', ScopusController::class,["name"=>"papers"]);

Route::get('/researchproject',[ResearchProjectController::class,'researchproj']);
Route::get('/researchgroup',[ResearchGroupController::class,'researchgroup']);
//auth route for both
/*Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});

// for teacherstudent
Route::group(['middleware' => ['auth', 'role:student']], function() {
    Route::get('/dashboard/myprofile', 'App\Http\Controllers\DashboardController@myprofile')->name('dashboard.myprofile');
});

// for teacher
Route::group(['middleware' => ['auth', 'role:teacher']], function() {
    Route::get('/dashboard/postcreate', 'App\Http\Controllers\DashboardController@postcreate')->name('dashboard.postcreate');
});*/

//Route::resource('paper/create', 'PaperController@create');
/*
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/custom-signin', [AuthController::class, 'createSignin'])->name('signin.custom');


Route::get('/register', [AuthController::class, 'signup'])->name('register');
Route::post('/create-user', [AuthController::class, 'customSignup'])->name('user.registration');


Route::get('/dashboard', [AuthController::class, 'dashboardView'])->name('dashboard');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');*/
require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
