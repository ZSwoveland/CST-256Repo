<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/Login', function(){
    return view('Login');
});

Route::get('/Register', function(){
    return view('Register');
});
Route::get('/MemberProfile', function(){
    return view('MemberProfile');
});
Route::post('/ProfileHelper','ProfileHelper@Index');
Route::get('/Administration', function(){
    return view('Administration');
});
Route::post('/Administration','AdminHelper@Index');
Route::post('/DoLogin','LoginHelper@Index');
//Route::post('/user/Home', array('uses'=>'LoginHelper@ReceiveDataForm'));