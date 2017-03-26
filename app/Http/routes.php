<?php


use App\Pengguna;
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

Route::get('/', function () {
	return view('welcome');
});

// Route::get("/public",function(){
// 	return "Nama : Triyanti Wafda Malini <br> NIM : 1515015049";
// });



Route::get('pengguna','PenggunaController@awal');
Route::get('pengguna/tambah','PenggunaController@tambah');
Route::get('pengguna/simpan','PenggunaController@simpan');

Route::get('pengguna/{simpan}',function($simpan){
		$pengguna = new Pengguna();
    	$pengguna->username = 'mahmud';
    	$pengguna->password = 'doe_jon';
    	$pengguna->save();
    	return "data dengan username {$pengguna->username} telah disimpan";
});


Route::get('dosen','DosenController@awal');
Route::get('dosen/tambah','DosenController@tambah');
Route::get('dosen/simpan','DosenController@simpan');


Route::get('mahasiswa','MahasiswaController@awal');
Route::get('mahasiswa/tambah','MahasiswaController@tambah');
Route::get('mahasiswa/simpan','MahasiswaController@simpan');

Route::get('ruangan','RuanganController@awal');
Route::get('ruangan/tambah','RuanganController@tambah');
Route::get('ruangan/simpan','RuanganController@simpan');

Route::get('matakuliah','MatakuliahController@awal');
Route::get('matakuliah/tambah','MatakuliahController@tambah');
Route::get('matakuliah/simpan','MatakuliahController@simpan');

Route::get('dosen_matakuliah','Dosen_MatakuliahController@awal');
Route::get('dosen_matakuliah/tambah','Dosen_MatakuliahController@tambah');
Route::get('dosen_matakuliah/simpan','Dosen_MatakuliahController@simpan');

Route::get('jadwal_matakuliah','Jadwal_MatakuliahController@awal');
Route::get('jadwal_matakuliah/tambah','Jadwal_MatakuliahController@tambah');
Route::get('jadwal_matakuliah/simpan','Jadwal_MatakuliahController@simpan');


Route::get('pengguna/{pengguna}','PenggunaController@lihat');
Route::post('pengguna/simpan','PenggunaController@simpan');
Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
Route::post('pengguna/edit/{pengguna}','PenggunaController@update');
Route::get('pengguna/hapus/{pengguna}','PenggunaController@hapus');

Route::get('matakuliah/{matakuliah}','PenggunaController@lihat');
Route::post('matakuliah/simpan','PenggunaController@simpan');
Route::get('matakuliah/edit/{matakuliah}','PenggunaController@edit');
Route::post('matakuliah/edit/{matakuliah}','PenggunaController@update');
Route::get('matakuliah/hapus/{matakuliah}','PenggunaController@hapus');

Route::post('ruangan/simpan','PenggunaController@simpan');
Route::get('ruangan/edit/{ruangan}','PenggunaController@edit');
Route::post('ruangan/edit/{ruangan}','PenggunaController@update');
Route::get('ruangan/hapus/{ruangan}','PenggunaController@hapus');
