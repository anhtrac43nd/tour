<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix'=>'admin'],function(){
		Route::get('index','PagesController@getIndex');
		Route::group(['prefix'=>'employees'],function(){
			Route::get('add','EmployeesController@getAdd');
			Route::post('add','EmployeesController@postAdd');
			Route::get('list','EmployeesController@getList');
			Route::get('edit/{id}','EmployeesController@getEdit');
			Route::post('edit/{id}','EmployeesController@postEdit');
			Route::get('delete/{id}','EmployeesController@getDelete');
		});
		Route::group(['prefix'=>'services'],function(){
			Route::get('add','ServicesController@getAdd');
			Route::post('add','ServicesController@postAdd');
			Route::get('list','ServicesController@getList');
			Route::get('edit/{id}','ServicesController@getEdit');
			Route::post('edit/{id}','ServicesController@postEdit');
			Route::get('delete/{id}','ServicesController@getDelete');
		});
		Route::group(['prefix'=>'vehicles'],function(){
			Route::get('add','VehiclesController@getAdd');
			Route::post('add','VehiclesController@postAdd');
			Route::get('list','VehiclesController@getList');
			Route::get('edit/{id}','VehiclesController@getEdit');
			Route::post('edit/{id}','VehiclesController@postEdit');
			Route::get('delete/{id}','VehiclesController@getDelete');
		});
	
});