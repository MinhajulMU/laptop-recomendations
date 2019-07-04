<?php

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



Route::get('/tes',function(){
    return view('admin.dashboard');
}); 
Route::get('/masuk',function(){
    return view('admin.login');
}); 
Route::group(['middleware' => 'auth'], function(){
    Route::get('/', function () {
        return view('admin.dashboard');
    });
    Route::get('/alaptop', function () {
        return view('admin.laptop.index');
    });
    
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
