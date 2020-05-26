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
Route::get('/','ExportPdfController@list')->name('pdf.list');
Route::get('/create/pdf','ExportPdfController@create')->name('pdf.create');
Route::post('/store/pdf','ExportPdfController@store')->name('pdf.store');
Route::get('/export/pdf/{id}','ExportPdfController@exportpdf')->name('pdf.export');
