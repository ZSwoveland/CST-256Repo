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

Route::get('/EPortfolio','PortfolioHelper@sudoPortfolio');
Route::post('/doEPortfolio',"PortfolioHelper@CreatePortfolio");

Route::get('/AddPost', function(){
    return view('AddPost');
});
Route::post('/doAddPost','PostHelper@addPost');
Route::get('/EditPost', function(){
    return view('EditPost');
});
Route::post('/doEditPost','PostHelper@EditPost');
Route::get('/DeletePost', function(){
    return view('DeletePost');
});
Route::post('/doDeletePost','PostHelper@DeletePost');

Route::post('/doEditGroup','GroupHelper@EditGroup');
Route::get('/EditGroup', function(){
    return view('EditGroup');
});

Route::post('/doAddGroup','GroupHelper@AddGroup');
Route::get('/AddGroup', function(){
    return view('AddGroup');
});

Route::post('/doDeleteGroup','GroupHelper@DeleteGroup');
Route::get('/DeleteGroup', function(){
    return view('DeleteGroup');
});
Route::get('/ViewGroup', function(){
    return view('ViewGroup');
});

Route::post('/Search', 'SearchJob@searchJob');
Route::get('/SearchJob', function(){
    return view('Search');
});