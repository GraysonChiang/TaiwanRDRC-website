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



Route::get('/','homecontroller@index');
Route::get('study','homecontroller@study');
Route::get('work','homecontroller@work');
Route::get('benefit','homecontroller@benefit');
Route::post('messagePost','homecontroller@messagePost');
Route::get('health','homecontroller@health');


