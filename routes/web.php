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
Route::group(['middleware' => 'web'], function() {
	//Route::get('admin','LoginController@index');

	// Route::get('main',function() {
	// 	return view('main');
	// });

	// Route:: view('main','main');
	Route::get('main','MainController@index');

	Route::view('userview','user');

	Route::post('usercontroller','users@submit');

	Route::post('/form-submit',[
		'uses' => 'MainController@testSubmit',
		'as'    => 'f.submit',
	]);
});


Route::group(['prefix' => 'admin','namespace'=>'admin'], function () {

	   Route::get('login',[ 'as' => 'login', 'uses' => 'AuthController@index']);
	   
	   Route::post('post-login','AuthController@postLogin');

       Route::get('dashboard',[ 'as' => 'dashboard', 'uses' => 'DashboardController@index'])->middleware('auth');

       Route::get('user-profile',[ 'as' => 'user-profile', 'uses' => 'UserController@userProfile'])->middleware('auth');

       Route::get('create-user',[ 'as' => 'create-user', 'uses' => 'UserController@index'])->middleware('auth');

       Route::post('create-user-insert',[ 'as' => 'create-user-insert', 'uses' => 'UserController@createUserInsert'])->middleware('auth');

       Route::get('create-role',[ 'as' => 'create-role', 'uses' => 'UserController@createRole'])->middleware('auth');

       Route::post('create-role-insert',[ 'as' => 'create-role-insert', 'uses' => 'UserController@createRoleInsert'])->middleware('auth');

       Route::get('logout','AuthController@logout');
    });

//Route::get('admin/create-user','DashboardController@index')->name('create-user');
