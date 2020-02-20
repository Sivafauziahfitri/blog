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

Route::group(['prefix'=>'master'],function(){
    // route untuk jurusan dan kelas
    route::get('jurusan-kelas', 'Master\JurusankelasController@index')->name('master.jurusan-kelas');
    route::get('tampilkan/form-baru', 'Master\JurusankelasController@create')->name('master.tampilkan.form-baru');
    route::post('kirim/data/baru', 'Master\JurusankelasController@store')->name('master.kirim.data.baru');

    route::get('edit-jurusan/{jurusan}','Master\JurusankelasController@edit')->name('master.edit-jurusan');
    route::put('update/jurusan/{jurusan}', 'Master\JurusankelasController@update')->name('master.update-jurusan');
    route::delete('hapus/data/{jurusan}', 'Master\JurusankelasController@destroy')->name('master.hapus.data');


});




Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/youtube','YoutubeController@index')->name('youtube');

Route::get('watch/sedang-streaming','YoutubeController@show')->name('watch.sedang-streaming');
