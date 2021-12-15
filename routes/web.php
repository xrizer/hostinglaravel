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
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});
// <<<<<<< HEAD
// authentication
Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

Route::group(['middleware' => 'auth'],function () {
    // dashboard
    Route::get('/dashboard','DaftarakunController@dashboard');

    // menu daftar akun
    Route::get('/pemain/daftarakun','DaftarakunController@index1');
    Route::get('/pemain/daftarakun/add','DaftarakunController@index2');
    Route::post('/pemain/daftarakun/create','DaftarakunController@create');
    Route::get('/pemain/daftarakun/{id}/delete', 'DaftarakunController@destroy');

    // menu input jurnal
    Route::get('/pemain/inputjurnal','InputJurnalController@index1');
    Route::get('/pemain/inputjurnal/add','InputJurnalController@index2');
    Route::post('/pemain/inputjurnal/create','InputJurnalController@create');
    Route::get('/pemain/inputjurnal/{id}/delete', 'InputJurnalController@destroy');


    // menu daftar laporan
    Route::get('/pemain/laporan','LaporanController@index');
    Route::get('/pemain/jurnalumum','LaporanController@jurnalumum');
    Route::get('/pemain/bukubesar','LaporanController@bukubesar');
    Route::get('/pemain/neracasaldo','LaporanController@neracasaldo');
    Route::get('/pemain/labarugi','LaporanController@labarugi');
    Route::get('/pemain/neraca','LaporanController@neraca');
    Route::get('/pemain/perubahanmodal','LaporanController@perubahanmodal');
    Route::get('/pemain/neracalajur','LaporanController@neracalajur');
    Route::get('/pemain','PemainController@index');
    // halaman create
    Route::post('/pemain/add', 'PemainController@create');
    // // submit baru
    Route::post('/pemain', 'TemansController@store');
    // // klik detail pemain
    Route::get('/pemain/{id}','PemainController@show');
    // // klik tombol update
    Route::post('/pemain/{id}/edit', 'PemainController@update');
    // // klik tombol delete
    Route::get('/pemain/{id}/delete', 'PemainController@destroy');
    // // menampilkan tombol edit
    Route::get('/pemain/{id}/edit', 'PemainController@edit');
});

// Route::group(['middleware' => ['auth','checkRole:admin']],function (){
//     // halaman awal
    
// });

// =======
// >>>>>>> 1f58240116b1cadfabe37a240f30f0422fc523cf

