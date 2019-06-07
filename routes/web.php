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
Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'Admin\AdminController@index' ]);

});

Route::get('/', function () {
    return view('welcome');
});



//Route::get('admin','AdminController@index');


// Route::get('/register', ['as' => 'register', 'uses' => 'Admin\AdminController@test' ]);

// Route::get('/login', ['as' => 'login', 'uses' => 'App\Http\Controllers\Auth\LoginController@showLoginForm '])



