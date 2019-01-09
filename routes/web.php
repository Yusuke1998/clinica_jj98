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

Route::get('/clinica', 'HomeController@index')->name('clinica');

Route::group([ 'middleware' => ['auth'], 'prefix' => 'sistema'],function(){

	Route::resource('/configuraciones','ConfigController');

	// Pacintes
	Route::resource('/pacientes','patients');
	Route::get('/pacientes/{paciente}/delete','patients@delete')->name('pacientes.delete');

	Route::resource('/expedientes','records');
	Route::get('/expedientes/{expediente}/delete','records@delete')->name('expedientes.delete');

	Route::resource('/evoluciones','evolutions');
	Route::get('/evoluciones/{evolucion}/delete','evolutions@delete')->name('evoluciones.delete');
	Route::get('/{id}/evoluciones/','evolutions@nueva')->name('evoluciones.nueva');

	Route::resource('/citas','quotes');
	Route::get('/citas/{cita}/delete','quotes@delete')->name('citas.delete');

	// recepcionistas
	Route::resource('/recepcionistas','receptionists');
	Route::get('/recepcionistas/{recepcionista}/delete','receptionists@delete')->name('recepcionistas.delete');

	Route::resource('/facturas','invoices');
	Route::get('/facturas/{factura}/delete','invoices@delete')->name('facturas.delete');

	Route::resource('/calendario','calendaries');

	// Medicos
	Route::resource('/medicos','doctors');
	Route::get('/medicos/{medico}/delete','doctors@delete')->name('medicos.delete');
	Route::resource('/especialidades','specialties');
	Route::resource('/consultorios','doctorsoffices');

	// Usuarios
	Route::resource('/usuarios','users');
	Route::get('/usuarios/{usuario}/delete','users@delete')->name('usuarios.delete');

	// Route::get('/crearD', 'users@createDoctor')->name('usuarios.createDoctor');
	// Route::get('/crearR', 'users@createReceptionist')->name('usuarios.createReceptionist');

});