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

	// Pacintes
	Route::resource('/pacientes','patients');
	Route::resource('/expedientes','records');
	Route::resource('/evoluciones','evolutions');
	Route::get('/{id}/evoluciones/','evolutions@nueva')->name('evoluciones.nueva');
	Route::resource('/citas','quotes');

	// recepcionistas
	Route::resource('/recepcionistas','receptionists');
	Route::resource('/facturas','invoices');
	Route::resource('/calendario','calendaries');

	// Medicos
	Route::resource('/medicos','doctors');
	Route::resource('/especialidades','specialties');
	Route::resource('/consultorios','doctorsoffices');
	Route::resource('/consultas','queries');

	// Usuarios
	Route::resource('/usuarios','users');
	Route::get('/crearD', 'users@createDoctor')->name('usuarios.createDoctor');
	Route::get('/crearR', 'users@createReceptionist')->name('usuarios.createReceptionist');

});