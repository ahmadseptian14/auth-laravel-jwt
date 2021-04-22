<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });eb

Route::get('/', 'StudentController@index')->name('student.index');
Route::post('/cari-mahasiswa', 'StudentController@search')->name('student.search');
Route::get('/tambah-data-mahasiswa', 'StudentController@create')->name('student.create');
Route::post('/tambah-data-mahasiswa', 'StudentController@store')->name('student.store');
Route::get('edit-data-mahasiswa/{id}', 'StudentController@edit')->name('student.edit');
Route::put('update-data-mahasiswa/{id}', 'StudentController@update')->name('student.update');
Route::delete('hapus/{id}', 'StudentController@destroy')->name('student.delete');

