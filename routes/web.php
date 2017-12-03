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
Route::get('plantilla', function () {
    return view('plantilla');
});

Route::post('/actividades/add/post', 'ActividadController@store')->name('actividad.store');
Route::get('/actividades/add', 'ActividadController@add')->name('actividad.add');
