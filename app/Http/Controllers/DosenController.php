<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class dosencontroller extends Controller
{
       public function awal()
   {
   	return "Data Dosen";
   }
   public function tambah()
   {
      return $this->simpan();
   }
   public function simpan()
   {
      $dosen = new Dosen();
      $dosen->nama = 'hario dosen';
      $dosen->nip = '200123123';
      $dosen->alamat = 'samarinda';
      $dosen->pengguna_id = '7';
      $dosen->save();
      return "data dosen dengan nama {$dosen->nama} telah disimpan";
      
   }
}
