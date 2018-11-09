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

Route::get('/', function () {
    return view('dashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'	=>  'sistema'],function(){

	Route::resource('/direccions','addresses');
	Route::resource('/citas','quotes');
	Route::resource('/facturas','invoices');
	Route::resource('/expedientes','records');
	Route::resource('/consultorios','doctorsoffices');
	Route::resource('/medicos','doctors');
	Route::resource('/correos','emails');
	Route::resource('/evoluciones','evolutions');
	Route::resource('/pacientes','patients');
	Route::resource('/consultas','queries');
	Route::resource('/recepcionistas','receptionists');
	Route::resource('/especialidades','specialties');
	Route::resource('/telefonos','phones');
	Route::resource('/usuarios','users');
});