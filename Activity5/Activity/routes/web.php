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
    return view('index');
});

Route::get('/login2', function ()
{
    return view('login2');
});

Route::resource('/usersrest',"UsersRestController");
Route::get('/loggingservice','TestLoggingController@index');


Route::post('/doLogin3','Login3Controller@Index');
Route::get('/login', function () { return view('login3'); }); 

Route::post('/whoami','WhatsMyNameController@index');
Route::get('/askme', function () { return view('whoami'); }); 