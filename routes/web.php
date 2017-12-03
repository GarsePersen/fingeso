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


Route::post('register', 'UserController@store');
Route::post('/agregarCompromiso', 'compromisoActividadController@guardarCompromiso')->name('guardar.compromiso');


Route::post('/actividades/add/post', 'ActividadController@store')->name('actividad.store');
Route::get('/actividades/add', 'ActividadController@add')->name('actividad.add');

