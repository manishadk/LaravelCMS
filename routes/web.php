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

Route::auth();

Route::get('admincontrol/login', ['as'=>'test', 'uses'=>'Auth\LoginController@showLoginForm']);
Route::post('admincontrol/login', ['as'=>'login', 'uses'=>'Auth\LoginController@login']);
// Route::get('admincontrol/logout', ['uses'=>'Auth\LoginController@logout']);


Route::group(['prefix' => 'admin/', 'as' =>'admin.', 'middleware' => 'auth'], function(){

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'Admin\DashboardController@index' ]);

});

Route::get('/', function () {
    // return view('welcome');
    return redirect('admincontrol/login');
});




