<?php

use Illuminate\Support\Facades\Input;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/testing', 'SuratController@testing');
Route::get('/', function () {
    return view('homepage');
});

Route::auth();

Route::get('/home', 'HomeController@index');



Route::get('/datauser', 'datauserController@index');
Route::get('/dataskpd', 'dataskpdController@index');
Route::get('/pegawai', 'pegawaiController@index');
Route::get('/riwayatjabatan', 'riwayatjabatanController@index');
Route::get('/riwayatdiklat', 'riwayatdiklatController@index');
Route::get('/riwayatpendidikan', 'riwayatpendidikanController@index');
Route::get('/refjabatan', 'RefjabatanController@index');
Route::get('/refgolongan', 'RefgolonganController@index');
Route::get('/refjenisdiklat', 'RefjenisdiklatController@index');
Route::get('/refjenjangpendidikan', 'RefjenjangpendidikanController@index');
Route::get('/refpendidikan', 'RefpendidikanController@index');
Route::get('/mutasi', 'MutasiController@index');
Route::get('/pegawai/cetak', 'pegawaiController@cetak');
Route::get('/riwayatjabatan/cetak', 'riwayatjabatanController@cetak');
Route::get('/riwayatdiklat/cetak', 'riwayatdiklatController@cetak');
Route::get('/riwayatpendidikan/cetak', 'riwayatpendidikanController@cetak');


Route::get('/surat1', 'suratController@surat1');
Route::get('/surat2', 'suratController@surat2');
Route::get('/surat3', 'suratController@surat3');
Route::get('/surat4', 'suratController@surat4');

Route::group(['middleware' => 'admin'],function(){

// Route::get('/datauser', 'datauserController@index');
Route::get('/datauser/create', 'datauserController@create');
Route::post('/datauser/store', 'datauserController@store');
Route::put('/datauser/update/{id}', 'datauserController@update');
Route::delete('/datauser/delete/{id}', 'datauserController@delete');
Route::get('/datauser/edit/{id}', 'datauserController@edit');
Route::get('/datauser/detail/{id}', 'datauserController@detail');

// Route::get('/dataskpd', 'dataskpdController@index');
Route::get('/dataskpd/create', 'dataskpdController@create');
Route::post('/dataskpd/store', 'dataskpdController@store');
Route::put('/dataskpd/update/{id}', 'dataskpdController@update');
Route::delete('/dataskpd/delete/{id}', 'dataskpdController@delete');
Route::get('/dataskpd/edit/{id}', 'dataskpdController@edit');
Route::get('/dataskpd/detail/{id}', 'dataskpdController@detail');
	
// Route::get('/pegawai', 'pegawaiController@index');
Route::get('/pegawai/create', 'pegawaiController@create');
Route::post('/pegawai/store', 'pegawaiController@store');
Route::put('/pegawai/update/{id}', 'pegawaiController@update');
Route::delete('/pegawai/delete/{id}', 'pegawaiController@delete');
Route::get('/pegawai/edit/{id}', 'pegawaiController@edit');
Route::get('/pegawai/detail/{id}', 'pegawaiController@detail');

Route::get('/rekappegawai', 'rekapController@index');
Route::get('/rekappegawai/create', 'rekapController@create');
Route::post('/rekappegawai/store', 'rekapController@store');
Route::put('/rekappegawai/update/{id}', 'rekapController@update');
Route::delete('/rekappegawai/delete/{id}', 'rekapController@delete');
Route::get('/rekappegawai/edit/{id}', 'rekapController@edit');
Route::get('/rekappegawai/detail/{id}', 'rekapController@detail');
Route::get('/rekappegawai/cetak', 'rekapController@cetak');

// Route::get('/riwayatjabatan', 'riwayatjabatanController@index');
Route::get('/riwayatjabatan/create', 'riwayatjabatanController@create');
Route::post('/riwayatjabatan/store', 'riwayatjabatanController@store');
Route::put('/riwayatjabatan/update/{id}', 'riwayatjabatanController@update');
Route::delete('/riwayatjabatan/delete/{id}', 'riwayatjabatanController@delete');
Route::get('/riwayatjabatan/edit/{id}', 'riwayatjabatanController@edit');
Route::get('/riwayatjabatan/detail/{id}', 'riwayatjabatanController@detail');

// Route::get('/riwayatdiklat', 'riwayatdiklatController@index');
Route::get('/riwayatdiklat/create', 'riwayatdiklatController@create');
Route::post('/riwayatdiklat/store', 'riwayatdiklatController@store');
Route::put('/riwayatdiklat/update/{id}', 'riwayatdiklatController@update');
Route::delete('/riwayatdiklat/delete/{id}', 'riwayatdiklatController@delete');
Route::get('/riwayatdiklat/edit/{id}', 'riwayatdiklatController@edit');
Route::get('/riwayatdiklat/detail/{id}', 'riwayatdiklatController@detail');

// Route::get('/riwayatpendidikan', 'riwayatpendidikanController@index');
Route::get('/riwayatpendidikan/create', 'riwayatpendidikanController@create');
Route::post('/riwayatpendidikan/store', 'riwayatpendidikanController@store');
Route::put('/riwayatpendidikan/update/{id}', 'riwayatpendidikanController@update');
Route::delete('/riwayatpendidikan/delete/{id}', 'riwayatpendidikanController@delete');
Route::get('/riwayatpendidikan/edit/{id}', 'riwayatpendidikanController@edit');
Route::get('/riwayatpendidikan/detail/{id}', 'riwayatpendidikanController@detail');

// Route::get('/refjabatan', 'RefjabatanController@index');
Route::get('/refjabatan/create', 'RefjabatanController@create');
Route::post('/refjabatan/store', 'RefjabatanController@store');
Route::put('/refjabatan/update/{id}', 'RefjabatanController@update');
Route::delete('/refjabatan/delete/{id}', 'RefjabatanController@delete');
Route::get('/refjabatan/edit/{id}', 'RefjabatanController@edit');
Route::get('/refjabatan/detail/{id}', 'RefjabatanController@detail');

// Route::get('/refgolongan', 'RefgolonganController@index');
Route::get('/refgolongan/create', 'RefgolonganController@create');
Route::post('/refgolongan/store', 'RefgolonganController@store');
Route::put('/refgolongan/update/{id}', 'RefgolonganController@update');
Route::delete('/refgolongan/delete/{id}', 'RefgolonganController@delete');
Route::get('/refgolongan/edit/{id}', 'RefgolonganController@edit');
Route::get('/refgolongan/detail/{id}', 'RefgolonganController@detail');

// Route::get('/refjenisdiklat', 'RefjenisdiklatController@index');
Route::get('/refjenisdiklat/create', 'RefjenisdiklatController@create');
Route::post('/refjenisdiklat/store', 'RefjenisdiklatController@store');
Route::put('/refjenisdiklat/update/{id}', 'RefjenisdiklatController@update');
Route::delete('/refjenisdiklat/delete/{id}', 'RefjenisdiklatController@delete');
Route::get('/refjenisdiklat/edit/{id}', 'RefjenisdiklatController@edit');
Route::get('/refjenisdiklat/detail/{id}', 'RefjenisdiklatController@detail');

// Route::get('/refjenjangpendidikan', 'RefjenjangpendidikanController@index');
Route::get('/refjenjangpendidikan/create', 'RefjenjangpendidikanController@create');
Route::post('/refjenjangpendidikan/store', 'RefjenjangpendidikanController@store');
Route::put('/refjenjangpendidikan/update/{id}', 'RefjenjangpendidikanController@update');
Route::delete('/refjenjangpendidikan/delete/{id}', 'RefjenjangpendidikanController@delete');
Route::get('/refjenjangpendidikan/edit/{id}', 'RefjenjangpendidikanController@edit');
Route::get('/refjenjangpendidikan/detail/{id}', 'RefjenjangpendidikanController@detail');

// Route::get('/refpendidikan', 'RefpendidikanController@index');
Route::get('/refpendidikan/create', 'RefpendidikanController@create');
Route::post('/refpendidikan/store', 'RefpendidikanController@store');
Route::put('/refpendidikan/update/{id}', 'RefpendidikanController@update');
Route::delete('/refpendidikan/delete/{id}', 'RefpendidikanController@delete');
Route::get('/refpendidikan/edit/{id}', 'RefpendidikanController@edit');
Route::get('/refpendidikan/detail/{id}', 'RefpendidikanController@detail');

// Route::get('/mutasi', 'MutasiController@index');
Route::get('/mutasi/create', 'MutasiController@create');
Route::post('/mutasi/store', 'MutasiController@store');
Route::put('/mutasi/update/{id}', 'MutasiController@update');
Route::delete('/mutasi/delete/{id}', 'MutasiController@delete');
Route::get('/mutasi/edit/{id}', 'MutasiController@edit');
Route::get('/mutasi/detail/{id}', 'MutasiController@detail');
Route::get('/mutasi/cetak', 'MutasiController@cetak');

Route::get('/suratsk', 'suratController@indexsk');
Route::get('/suratsk/create', 'suratController@create');
Route::post('/suratsk/store', 'suratController@store');
Route::delete('/suratsk/delete/{id}', 'suratController@delete');
Route::get('/suratsk/edit/{id}', 'suratController@edit');
Route::put('/suratsk/update/{id}', 'suratController@update');
Route::get('/suratsk/detail/{id}', 'suratController@detail');
Route::get('/suratsk/cetak/{id}', 'suratController@cetak');

Route::get('/surat1', 'Surat1Controller@index');
Route::get('/surat1/create', 'Surat1Controller@create');
Route::post('/surat1/store', 'Surat1Controller@store');
Route::delete('/surat1/delete/{id}', 'Surat1Controller@delete');
Route::get('/surat1/edit/{id}', 'Surat1Controller@edit');
Route::put('/surat1/update/{id}', 'Surat1Controller@update');
Route::get('/surat1/detail/{id}', 'Surat1Controller@detail');
Route::get('/surat1/cetak/{id}', 'Surat1Controller@cetak');

Route::get('/surat2', 'Surat2Controller@index');
Route::get('/surat2/create', 'Surat2Controller@create');
Route::post('/surat2/store', 'Surat2Controller@store');
Route::delete('/surat2/delete/{id}', 'Surat2Controller@delete');
Route::get('/surat2/edit/{id}', 'Surat2Controller@edit');
Route::put('/surat2/update/{id}', 'Surat2Controller@update');
Route::get('/surat2/detail/{id}', 'Surat2Controller@detail');
Route::get('/surat2/cetak/{id}', 'Surat2Controller@cetak');

Route::get('/surat3', 'Surat3Controller@index');
Route::get('/surat3/create', 'Surat3Controller@create');
Route::post('/surat3/store', 'Surat3Controller@store');
Route::delete('/surat3/delete/{id}', 'Surat3Controller@delete');
Route::get('/surat3/edit/{id}', 'Surat3Controller@edit');
Route::put('/surat3/update/{id}', 'Surat3Controller@update');
Route::get('/surat3/detail/{id}', 'Surat3Controller@detail');
Route::get('/surat3/cetak/{id}', 'Surat3Controller@cetak');

Route::get('/laporan', 'LaporanController@index');
Route::get('/riwayatdiklat/create', 'riwayatdiklatController@create');
Route::post('/riwayatdiklat/store', 'riwayatdiklatController@store');
Route::put('/riwayatdiklat/update/{id}', 'riwayatdiklatController@update');
Route::delete('/riwayatdiklat/delete/{id}', 'riwayatdiklatController@delete');
Route::get('/riwayatdiklat/edit/{id}', 'riwayatdiklatController@edit');
Route::get('/riwayatdiklat/detail', 'riwayatdiklatController@detail');

Route::get('/eselon', 'eselonController@index');
Route::get('/eselon/create', 'eselonController@create');
Route::post('/eselon/store', 'eselonController@store');

Route::get('/jabatan',  'jabatanController@index');
Route::get('/jabatan/create', 'jabatanController@create');
Route::post('/jabatan/store', 'jabatanController@store');


Route::get('/checkbox', 'suratController@checkbox');

Route::get('/tes', function(){
	return view ('layouts.app2');
});
 
});