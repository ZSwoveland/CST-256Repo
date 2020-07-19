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
})->middleware('auth');
Route::post('/ProfileHelper','ProfileHelper@Index')->middleware('auth');
Route::get('/Administration', function(){
    return view('Administration');
})->middleware('auth');
Route::post('/Administration','AdminHelper@Index')->middleware('auth');
Route::post('/DoLogin','LoginHelper@Index')->middleware('auth');
//Route::post('/user/Home', array('uses'=>'LoginHelper@ReceiveDataForm'));

Route::get('/EPortfolio','PortfolioHelper@sudoPortfolio')->middleware('auth');
Route::post('/doEPortfolio',"PortfolioHelper@CreatePortfolio")->middleware('auth');

Route::get('/AddPost', function(){
    return view('AddPost');
})->middleware('auth');
Route::post('/doAddPost','PostHelper@addPost')->middleware('auth');
Route::get('/EditPost', function(){
    return view('EditPost');
})->middleware('auth');
Route::post('/doEditPost','PostHelper@EditPost')->middleware('auth');
Route::get('/DeletePost', function(){
    return view('DeletePost');
})->middleware('auth');
Route::post('/doDeletePost','PostHelper@DeletePost')->middleware('auth');

Route::post('/doEditGroup','GroupHelper@EditGroup')->middleware('auth');
Route::get('/EditGroup', function(){
    return view('EditGroup');
})->middleware('auth');

Route::post('/doAddGroup','GroupHelper@AddGroup')->middleware('auth');
Route::get('/AddGroup', function(){
    return view('AddGroup');
})->middleware('auth');

Route::post('/doDeleteGroup','GroupHelper@DeleteGroup')->middleware('auth');
Route::get('/DeleteGroup', function(){
    return view('DeleteGroup');
})->middleware('auth');
Route::get('/ViewGroup', function(){
    return view('ViewGroup');
})->middleware('auth');

Route::post('/Search', 'SearchJob@searchJob')->middleware('auth');
Route::get('/SearchJob', function(){
    return view('Search');
})->middleware('auth');