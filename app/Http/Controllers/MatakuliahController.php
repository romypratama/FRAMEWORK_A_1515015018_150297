<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\matakuliah;

class MatakuliahController extends Controller
{
    //
    public function awal()
    {
        return "Hallo matakuliah";
    }
    public function tambah()
    {
        return $this-simpan();
    }
    public function simpan()
    {
        $matakuliah=new matakuliah();
        $matakuliah->keterangan='fakultas teknik informatika';
        $matakuliah->title='TI';
        $matakuliah->save();
        return "data yang anda pilih {$matakuliah->matakuliah} sudah di simpan";
    }
}
