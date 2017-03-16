<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class DosenController extends Controller
{
    //
    public function awal()
    {
        return "Hello dosen";
    }

    public function tambah()
    {
        return $this->simpan();
    }
    public function simpan()
    {
        $dosen=new dosen();
        $dosen->nama='jon doe';
        $dosen->nip='123456';
        $dosen->alamat='samarinda';
        $dosen->pengguna_id='1';
        $dosen->save();
        return "data dengan nama {$dosen->username} telah disimpan";

    }
}
