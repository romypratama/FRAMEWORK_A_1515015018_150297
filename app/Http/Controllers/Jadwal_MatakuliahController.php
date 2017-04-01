<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use app\jadwal_matakuliah;

class Jadwal_MatakuliahController extends Controller
{
    //
    public function awal()
    {
        return "Hallo jadwal_matakuliah"
    }
    public function tambah()
    {
        return $this->simpan();
    }
    public function simpan()
    {
        $jadwal_matakuliah=new jadwal_matakuliah();
        $jadwal_matakuliah->mahasiswa_id="1";
        $jadwal_matakuliah->dosen_id="1";
        $jadwal_matakuliah->ruangan_id="1";
        $jadwal_matakuliah->save();
        return "data anda sudah disimpan";
    }
}
