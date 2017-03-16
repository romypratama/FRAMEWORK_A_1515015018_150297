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
        return "Hallo mahasiswa";
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
