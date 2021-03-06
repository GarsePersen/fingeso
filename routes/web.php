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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('actividad', function () {
    return view('actividad');
});



Route::get('descubre', function () {
    return view('descubre');
});

Route::get('perfil', function () {
    return view('perfil');
});

Route::get('agregarCompromiso',function(){

	return view('agregarCompromiso');

});

Route::get('verCompromisos',function(){

	return view('verCompromisos');

});



Route::get('novedades', function () {
    return view('novedades');
});

Route::get('registrarUsuario', function () {
    return view('auth/register');
});

Route::get('verPlanilla', function () {
    return view('verPlanilla');
});

Route::get('planillaAnual', function () {
    return view('planillaAnual');
});

Route::get('subirArchivo', function () {
    return view('subirArchivo');
});

Route::get('planillaResumen', function () {
    return view('planillaResumen');
});

Route::get('verUsuariosComision', 'UserController@indexComision');

Route::get('verUsuariosDirector', 'UserController@indexDirector');


Route::get('actividad/{id}','ActividadController@viewActividad')->name('actividad');
Route::get('actividad','ActividadController@viewActividad');

Route::get('verActividades/{id}','ActividadController@actividadCompromiso')->name('verActividades');
Route::get('verActividades','ActividadController@actividadCompromiso');

Route::get('aprobarCompromiso/{id}','ActividadController@aprobarActividad')->name('verActividades');
Route::get('aprobarCompromiso','ActividadController@aprobarActividad');

Route::get('verActividades/{id}','ActividadController@actividadCompromiso')->name('verActividades');

Route::post('actividad','ActividadController@agregarActividad')->name('guardar.actividad');

Route::get('verCompromisos', 'verCompromisosController@viewCompromisos')->name('verCompromisos');
Route::post('verCompromisos', 'verCompromisosController@viewCompromisos');

Route::get('verCompromisosComision', 'verCompromisosController@viewCompromisosComision')->name('verCompromisos');
Route::post('verCompromisosComision', 'verCompromisosController@viewCompromisosComision');


Route::post('register', 'UserController@store');
Route::post('/agregarCompromiso', 'compromisoActividadController@guardarCompromiso')->name('guardar.compromiso');

Route::post('calificarUsuario', 'UserController@calificar');

Route::post('getUserEdit', 'UserController@show');

Route::post('editUser', 'UserController@update');

Route::post('removeUser', 'UserController@destroy');

Route::get('getUsers', 'UserController@index');

Route::post('/actividades/add/post', 'ActividadController@store')->name('actividad.store');
Route::get('/actividades/add', 'ActividadController@add')->name('actividad.add');

