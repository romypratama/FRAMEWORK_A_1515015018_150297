<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\pengguna;





class PenggunaController extends Controller
{
    //
    public function awal()
    {
        return "Hello pengguna";
    }

    public function tambah()
    {
        return $this->simpan();
    }
    public function simpan()
    {
        $pengguna=new pengguna();
        $pengguna->username='jon doe';
        $pengguna->password='doe_jon';
        $pengguna->save();
        return "data dengan usernaname {$pengguna->username} telah disimpan";

    }
}
