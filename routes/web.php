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

Route::get('planilla', function () {
    return view('planilla');
});

Route::get('descubre', function () {
    return view('descubre');
});

Route::get('perfil', function () {
    return view('perfil');
});

Route::get('novedades', function () {
    return view('novedades');
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