<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiciosController;


Route::view('/', 'home')->name('home');

Route::view('programas', 'programas')->name('programas');
Route::get('talleres', 'App\Http\Controllers\ServiciosController@index')->name('talleres');
Route::view('asesoramiento', 'asesoramiento')->name('asesoramiento');
Route::view('contacto', 'contacto')->name('contacto');

//Route::get('servicios', 'App\Http\Controllers\ServiciosController@servicios')->name('servicios');
//Route::get('servicios', 'Servicios2Controller@index')->name('servicios');
//Route::resource('servicios', Servicios2Controller::class)->except('index', 'show');
//Route::view('servicios', 'servicios', compact('servicios'))->name('servicios');
