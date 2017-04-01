<?php

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
    $nama = 'Romy Pratama';
    $nim = '1515015018';
    return view('welcome', compact('nama', 'nim'));
});
Route::get('/postest1',function(){
    $nama = 'Romy Pratama';
    $nim = '1515015018';
    return view('welcome', compact('nama', 'nim'));
});
Route::get('pengguna/{pengguna}',function($pengguna){
    return "hallo world dari pengguna $pengguna";
});
Route::get('berita/{berita?}',function($berita="laravel 5"){
    return "berita $berita belum dibaca";
});

Route::get('pengguna','PenggunaController@awal');
Route::get('pengguna/{pengguna}','PenggunaController@lihat');
Route::post('pengguna/simpan','PenggunaController@simpan');
Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
Route::post('pengguna/edit/{pengguna}','PenggunaController@update');
Route::get('pengguna/hapus/{pengguna}','PenggunaController@hapus');

Route::get('ruangan','RuanganController@awal');
Route::get('ruangan/{ruangan}','RuanganController@lihat');
Route::post('ruangan/simpan','RuanganController@simpan');
Route::get('ruangan/edit/{ruangan}','RuanganController@edit');
Route::post('ruangan/edit/{ruangan}','RuanganController@update');
Route::get('ruangan/hapus/{ruangan}','RuanganController@hapus');

Route::get('matakuliah','MatakuliahController@awal');
Route::get('matakuliah/{matakuliah}','MatakuliahController@lihat');
Route::post('matakuliah/simpan','MatakuliahController@simpan');
Route::get('matakuliah/edit/{matakuliah}','MatakuliahController@edit');
Route::post('matakuliah/edit/{matakuliah}','MatakuliahController@update');
Route::get('matakuliah/hapus/{matakuliah}','MatakuliahController@hapus');

Route::get('dosen','DosenController@tambah');
Route::get('mahasiswa','MahasiswaController@tambah');
Route::get('dosen_matakuliah','Dosen_MatakuliahController@awal');
Route::get('jadwal_matakuliah','Jadwal_MatakuliahController@awal');




//Route('group', ['prefix' => 'Posttest', '']);
Route::get('mahasiswa',['namespace' => 'Posttest', 'uses' => 'Posttest\Tugas1Controller@namanim']);
Route::get('/mahasiswa1', ['uses'=>'mahasiswa1Controller@data_mahasiswa']);

