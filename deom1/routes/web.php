<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

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
 
Route::get('/home', function () {
    return view('home');
});


Route::get('/au', function () {
    return view('aboutus');
});
Route::get('/if', function () {
    return view('if');
});
Route::get("for",function (){
    return view('for');
});
Route::get("/form",function(){
    return view('form');
});
Route::get('boot',function(){
    return view('bootstrapexample');
});


Route::get("mc",[MyController::class,'show']);
Route::get('cm/{name}',[MyController::class,"showname"]);
Route::get('c',[MyController::class,"largest"]);
// Route::post("login",[MyController::class,'data']);
Route::post('login',[MyController::class,"getdata"]);