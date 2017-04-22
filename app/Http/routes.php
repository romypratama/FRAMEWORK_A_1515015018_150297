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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view ('master');
});

Route::get('/hello-world', function () {
    return 'Doni Huhahahahahaha';
});

Route::get('/coba/{var}', function($variabel){
	return $variabel;
});


Route::get('/hello/{var?}', function($variabel = "Belum ada isinya"){
	return $variabel;
});

//------------------------------------------------------------------

Route::get('/pengguna', 'PenggunaController@awal');

Route::get('/pengguna/tambah', 'PenggunaController@tambah');

//------------------------------------------------------------------

Route::get('/dosen', 'DosenController@awal');

Route::get('dosen/tambah', 'DosenController@tambah');

//------------------------------------------------------------------

Route::get('/mahasiswa', 'MahasiswaController@awal');

Route::get('/mahasiswa/tambah', 'MahasiswaController@tambah');

Route::get('/mahasiswa/tambah/route', function(){
		$mahasiswa = new App\Mahasiswa();
        $mahasiswa->nama = 'romy';
        $mahasiswa->nim = '1515015018';
        $mahasiswa->alamat = 'Jl. Lambung Mangkuratadaw';
        $mahasiswa->pengguna_id = 3;
        $mahasiswa->save();
        return "Telah disave {$mahasiswa->nama} ke dalam databas";
});

//------------------------------------------------------------------

Route::get('/ruangan', 'RuanganController@awal');

Route::get('/ruangan/tambah', 'RuanganController@tambah');

//------------------------------------------------------------------

Route::get('/matakuliah', 'MatakuliahController@awal');

Route::get('/matakuliah/tambah', 'MatakuliahController@tambah');

//------------------------------------------------------------------

Route::get('/dosen_matakuliah', 'Dosen_matakuliahController@awal');

Route::get('/dosen_matakuliah/tambah', 'Dosen_MatakuliahController@tambah');

//------------------------------------------------------------------

Route::get('/jadwal_matakuliah', 'Jadwal_matakuliahController@awal');

Route::get('/jadwal_matakuliah/tambah', 'Jadwal_matakuliahController@tambah');

//------------------------------------------------------------------

Route::get('pengguna', 'PenggunaController@awal');
Route::get('pengguna/lihat/{pengguna}','PenggunaController@lihat');
Route::post('pengguna/simpan','PenggunaController@simpan');
Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
Route::post('pengguna/edit/{pengguna}','PenggunaController@update');
Route::get('pengguna/hapus/{pengguna}','PenggunaController@hapus');
Route::get('pengguna/tambah', 'PenggunaController@tambah');


//------------------------------------------------------------------

Route::get('matakuliah', 'MatakuliahController@awal');
Route::get('matakuliah/lihat/{matakuliah}','MatakuliahController@lihat');
Route::post('matakuliah/simpan','MatakuliahController@simpan');
Route::get('matakuliah/edit/{matakuliah}','MatakuliahController@edit');
Route::post('matakuliah/edit/{matakuliah}','MatakuliahController@update');
Route::get('matakuliah/tambah', 'MatakuliahController@tambah');
Route::get('matakuliah/hapus/{matakuliah}','MatakuliahController@hapus');

//------------------------------------------------------------------

Route::get('ruangan', 'RuanganController@awal');
Route::get('ruangan/lihat/{ruangan}','RuanganController@lihat');
Route::post('ruangan/simpan','RuanganController@simpan');
Route::get('ruangan/edit/{ruangan}','RuanganController@edit');
Route::get('ruangan/tambah', 'RuanganController@tambah');
Route::post('ruangan/edit/{ruangan}','RuanganController@update');
Route::get('ruangan/hapus/{ruangan}','RuanganController@hapus');
//------------------------------------------------------------------

Route::get('mahasiswa', 'MahasiswaController@awal');
Route::get('mahasiswa/lihat/{mahasiswa}','MahasiswaController@lihat');
Route::post('mahasiswa/simpan','MahasiswaController@simpan');
Route::get('mahasiswa/edit/{mahasiswa}','MahasiswaController@edit');
Route::get('mahasiswa/tambah', 'MahasiswaController@tambah');
Route::post('mahasiswa/edit/{mahasiswa}','MahasiswaController@update');
Route::get('mahasiswa/hapus/{mahasiswa}','MahasiswaController@hapus');

//------------------------------------------------------------------

Route::get('dosen', 'DosenController@awal');
Route::get('dosen/lihat/{dosen}','DosenController@lihat');
Route::post('dosen/simpan','DosenController@simpan');
Route::get('dosen/edit/{dosen}','DosenController@edit');
Route::get('dosen/tambah', 'DosenController@tambah');
Route::post('dosen/edit/{dosen}','DosenController@update');
Route::get('dosen/hapus/{dosen}','DosenController@hapus');

//------------------------------------------------------------------

Route::get('dosen_matakuliah','Dosen_MatakuliahController@awal');
Route::get('dosen_matakuliah/tambah','Dosen_MatakuliahController@tambah');
Route::post('dosen_matakuliah/simpan','Dosen_matakuliahController@simpan');
Route::get('dosen_matakuliah/edit/{dosen_matakuliah}','Dosen_MatakuliahController@edit');
Route::post('dosen_matakuliah/edit/{dosen_matakuliah}','Dosen_MatakuliahController@update');
Route::get('dosen_matakuliah/hapus/{dosen_matakuliah}','Dosen_MatakuliahController@hapus');
Route::get('dosen_matakuliah/lihat/{dosen_matakuliah}','Dosen_MatakuliahController@lihat');

//------------------------------------------------------------------

Route::get('jadwal_matakuliah','Jadwal_MatakuliahController@awal');
Route::get('jadwal_matakuliah/tambah','Jadwal_MatakuliahController@tambah');
Route::post('jadwal_matakuliah/simpan','Jadwal_MatakuliahController@simpan');
Route::get('jadwal_matakuliah/edit/{jadwal_matakuliah}','Jadwal_MatakuliahController@edit');
Route::post('jadwal_matakuliah/edit/{jadwal_matakuliah}','Jadwal_MatakuliahController@update');
Route::get('jadwal_matakuliah/hapus/{jadwal_matakuliah}','Jadwal_MatakuliahController@hapus');
Route::get('jadwal_matakuliah/lihat/{jadwal_matakuliah}','Jadwal_MatakuliahController@lihat');

//------------------------------------------------------------------

Route::get('relasi/mahasiswa', function() {
    $mahasiswa = App\Pengguna::find(3)->mahasiswa;
     return "<li>$mahasiswa";
});

Route::get('relasi/pengguna', function() {
    $pengguna = App\Mahasiswa::find(5)->pengguna;
    return "<li>$pengguna";
});

Route::get('relasi/dosen', function() {
    $pengguna = App\Pengguna::find(1)->dosen;
    return "<li>$pengguna";
});

Route::get('ujihas','RelationshipRebornController@ujihas');

Route::get('/',function(Illuminate\Http\Request $request)
{
    echo"ini adalah request".$request->nama;
});

Route::get('/',function(){
    echo Form::open(['url'=>'/']).
            Form::label('nama').
            Form::text('nama',null).
            Form::submit('kirim').
            Form::close();
});

Route::post('/',function(Request $request)
{
    echo"Hasil dari input tadi nama : ".$request->nama;
});
