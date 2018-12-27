<?php

Auth::routes();

// Usuarios sin autenticacion

Route::get('/', 'Auth\LoginController@showLoginForm')->name('acceder');

Route::get('sistema',function(){
	return redirect('/');
});

// Usuarios autenticados

Route::get('/registrar',function(){
    return view('auth/register2');
})->name('registrar')->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');

Route::group([ 'middleware' => ['auth'], 'prefix' => 'sistema'],function(){

	Route::resource('/direcciones','addresses');
	Route::resource('/citas','quotes');
	Route::resource('/facturas','invoices');
	Route::resource('/expedientes','records');
	Route::resource('/consultorios','doctorsoffices');
	Route::resource('/evoluciones','evolutions');
	Route::resource('/consultas','queries');
	Route::resource('/especialidades','specialties');
	Route::resource('/pacientes','patients');
	Route::resource('/recepcionistas','receptionists');
	Route::resource('/medicos','doctors');
	Route::resource('/usuarios','users');
});