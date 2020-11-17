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

Route::get('/', function () {
    return view('home');
});

Auth::routes();
Route::get('/logout', 'AuthController@logout');
// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('admin-page', function() {
//     return 'Halaman untuk Admin';
// })->middleware('role:admin')->name('admin.page');

// Route::get('user-page', function() {
//     return 'Halaman untuk User';
// })->middleware('role:owner')->name('user.page');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin-page', function() {
    return view('dashboard');
})->middleware('role:admin')->name('admin.page');

Route::get('user-page', function() {
    return view('owner.dashboard');
})->middleware('role:owner')->name('user.page');


	Route::get('/barangmasuk', 'SuratjalanbarangmasukController@index'); //menampilkan halaman surat jalan data barang masuk
    Route::post('/barangmasuk', 'SuratjalanbarangmasukController@create'); //proses create data

    Route::get('/{id}/suratjalanbarangmasuk_edit', 'SuratjalanbarangmasukController@edit'); //proses update data (1)
    Route::post('/{id}/suratjalanbarangmasuk_update', 'SuratjalanbarangmasukController@update'); //proses update data (2)
    Route::get('/{id}/suratjalanbarangmasuk_hapus', 'SuratjalanbarangmasukController@delete'); //proses delete
    // Route::get('/tambahbarangmasuk', function () {
    //     return view('inputdatabarangmasuk');
    // });



    //------ Data Barang Masuk --------
    Route::get('/{id}/inputdatabarangmasuk', 'InputdatabarangmasukController@index'); //menampilkan halaman data barang masuk
    Route::get('/{id}/inputdatabarangmasuk_detail', 'InputdatabarangmasukController@detail'); //menampilkan halaman data barang masuk
    Route::post('/{id}/inputdatabarangmasuk_create/', 'InputdatabarangmasukController@create'); //proses create data
    Route::get('/{id}/{idbarang}/inputdatabarangmasuk_edit/', 'InputdatabarangmasukController@edit'); //proses update data (1)
    Route::get('/{id}/{idbarang}/inputdatabarangmasuk_hapus', 'InputdatabarangmasukController@delete'); //proses delete
    Route::get('cetaksuratmasuk/pdfexport/{id}', 'InputdatabarangmasukController@print');






    //------Input Surat Jalan Data Barang keluar--------

    Route::get('/barangkeluar', 'SuratjalanbarangkeluarController@index'); //menampilkan halaman surat jalan data barang keluar
    Route::post('/barangkeluar', 'SuratjalanbarangkeluarController@create'); //proses create data

    Route::get('/{id}/suratjalanbarangkeluar_edit', 'SuratjalanbarangkeluarController@edit'); //proses update data (1)
    Route::post('/{id}/suratjalanbarangkeluar_update', 'SuratjalanbarangkeluarController@update'); //proses update data (2)
    Route::get('/{id}/suratjalanbarangkeluar_hapus', 'SuratjalanbarangkeluarController@delete'); //proses delete
    // Route::get('/tambahbarangmasuk', function () {
    //     return view('inputdatabarangmasuk');
    // });



    //------ Data Barang Keluar --------
    Route::get('/{id}/inputdatabarangkeluar', 'InputdatabarangkeluarController@index'); //menampilkan halaman data barang masuk
    Route::get('/{id}/inputdatabarangkeluar_detail', 'InputdatabarangkeluarController@detail'); //menampilkan halaman data barang masuk
    Route::post('/{id}/inputdatabarangkeluar_create/', 'InputdatabarangkeluarController@create'); //proses create data
    Route::get('/{id}/{idbarang}/inputdatabarangkeluar_edit/', 'InputdatabarangkeluarController@edit'); //proses update data (1)
    Route::get('/{id}/{idbarang}/inputdatabarangkeluar_hapus', 'InputdatabarangkeluarController@delete'); //proses delete
    Route::get('cetaksuratkeluar/pdfexport/{id}', 'InputdatabarangkeluarController@print');
    // Route::post('inputdatabarangkeluar_tambahstok', 'SuratjalanbarangmasukController@updateBarang')->name('cekmasuk');



    //Master Data Barang
    Route::get('/masterdatabarang_view', 'MasterdatabarangController@index'); //menampilkan halaman master data barang
    Route::post('/masterdatabarang_view', 'MasterdatabarangController@create'); //proses create data
    Route::get('/{id}/masterdatabarang_edit', 'MasterdatabarangController@edit'); //proses update data (1)
    Route::post('/{id}/masterdatabarang_update', 'MasterdatabarangController@update'); //proses update data (2)
    Route::get('/{id}/masterdatabarang_hapus', 'MasterdatabarangController@delete'); //proses delete

    //---------------------------------------------------------------------------------------------



    //---------------------------------------------------------------------------------------------
    //Cetak Laporan dashboard
    Route::get('/cetaklaporan', function () {
        return view('cetakdatabarang_dashboard');
    });


    //Cetak Laporan Data Barang Masuk
    Route::get('/cetaklaporanbarangmasuk', 'CetakbarangmasukController@index');
    Route::post('/cari_laporanbarangmasuk/', 'CetakbarangmasukController@search');
    Route::get('/exportbarangmasuk/', 'CetakbarangmasukController@print');

    //Cetak Laporan Data Barang Masuk
    Route::get('/cetaklaporanbarangkeluar', 'CetakbarangkeluarController@awal');
    Route::post('/cari_laporanbarangkeluar/', 'CetakbarangkeluarController@search');
    Route::get('/exportbarangkeluar/', 'CetakbarangkeluarController@print');


    //Owner Laporan Data Barang Masuk
    Route::get('/ownerlaporanbarangmasuk', 'OwnerbarangmasukController@index');
    Route::post('/cari_ownerlaporanbarangmasuk/', 'OwnerbarangmasukController@search');
    Route::get('/exportbarangmasuk/', 'OwnerbarangmasukController@print');

    //Owner Laporan Data Barang Masuk
    Route::get('/ownerlaporanbarangkeluar', 'OwnerbarangkeluarController@awal');
    Route::post('/cari_ownerlaporanbarangkeluar/', 'OwnerbarangkeluarController@search');
    Route::get('/exportbarangkeluar/', 'OwnerbarangkeluarController@print');

    //Owner Cetak Stok Barang
    Route::get('/ownerlaporanstokbarang', 'MasterdatabarangController@laporan');
    Route::get('/cetakstokbarang', 'MasterdatabarangController@laporanadmin');


    //Owner Tambah User
    Route::get('/tambahuser_view', 'UserController@index'); //menampilkan halaman master data barang
    // Route::post('/tambahuser_view', 'UserController@create'); //proses create data
    // Route::get('/{id}/tambahuser_edit', 'UserController@edit'); //proses update data (1)
    // Route::post('/{id}/tambahuser_update', 'UserController@update'); //proses update data (2)
    // Route::get('/{id}/tambahuser_hapus', 'UserController@delete'); //proses delete

    // Route::get('/cetaklaporanbarangkeluar_hasil', function () {
    //     return view('cetakdatabarangkeluar_hasil');
    // });

    // //Cetak Laporan Data Barang Keluar
    // Route::get('/cetaklaporanstokbarang', function () {
    //     return view('cetakdatastokbarang_view');
    // });

    // Route::get('/cetaklaporanstokbarang_hasil', function () {
    //     return view('cetakdatastokbarang_hasil');
    // });