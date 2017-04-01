<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\mahasiswa;

class MahasiswaController extends Controller
{
    //
    public function awal()
    {
        //return "hello dari MahasiswaaController";
        //relasi dari dosen ke pengguna
        return $data = mahasiswaa::where('pengguna_id', 14)->with('pengguna')->get(); 
        //relasi dari pengguna ke dosen
        return $data = pengguna::where('id', 12)->with('mahasiswaa')->get();
    }
    public function tambah()
    {
        return $this->simpan();
    }
    public function simpan()
    {
        $mahasiswa=new mahasiswa();
        $mahasiswa->nama='romy';
        $mahasiswa->nim='1515015018';
        $mahasiswa->alamat='samainda';
        $mahasiswa->pengguna_id='1';
        $mahasiswa->save();
        return "data dengan nama {$mahasiswa->nama} telah disimpan";
    }
}
