<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;

class mahasiswacontroller extends Controller
{
 
    public function awal()
   {
   	return "Data Mahasiswa";
   }
   public function tambah()
   {
      return $this->simpan();
   }
   public function simpan()
   {
      $mahasiswa = new mahasiswa();
      $mahasiswa->nama = 'Romy Pratama';
      $mahasiswa->nim = '1515015018';
      $mahasiswa->alamat = 'samarinda';
      $mahasiswa->pengguna_id = '7';
      $mahasiswa->save();
      return "data dengan nama {$mahasiswa->nama} telah disimpan";
      
   }

}
