<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Jadwal_Matakuliah;
use App\Mahasiswa;
use App\Dosen_Matakuliah;
use App\Ruangan;

class jadwal_matakuliahcontroller extends Controller
{
    public function awal()
   {
      // protected $guarded=['id'];
      $semuaJadwalMatakuliah = Jadwal_Matakuliah::all();
      return view('jadwal_matakuliah.awal', compact('semuaJadwalMatakuliah'));
   	// return "Data jadwal_matkauliah";
   }
   public function tambah()
   {
      $mahasiswa = new Mahasiswa;
      $ruangan = new Ruangan;
      $dosenMatakuliah = new Dosen_Matakuliah;
      return view('jadwal_matakuliah.tambah', compact('mahasiswa','ruangan','dosenMatakuliah'));
      //return $this->simpan();
   }

   public function simpan(Request $input)
   {
      $jadwal_matakuliah = new jadwal_matakuliah($input->only('ruangan_id','dosen_matakuliah_id','mahasiswa_id'));
      if($jadwal_matakuliah->save()) $this->informasi = "Jadwal Mahasiswa berhasil disimpan";
      return redirect('jadwal_matakuliah')->with(['informasi'=>$this->informasi]);
   }

    public function edit($id){
      $jadwalMatakuliah = Jadwal_Matakuliah::find($id);
      $mahasiswa = new Mahasiswa;
      $ruangan = new Ruangan;
      $dosenMatakuliah = new Dosen_Matakuliah;
      return view('jadwal_matakuliah.edit', compact('mahasiswa','ruangan','dosenMatakuliah','jadwalMatakuliah'));
   }

   public function lihat($id){
      $jadwalMatakuliah = Jadwal_Matakuliah::find($id);
      return view('jadwal_matakuliah.lihat')->with(array('jadwal_matakuliah'=>$jadwal_matakuliah));
   }

   public function update($id, Request $input){
      $jadwalMatakuliah = Jadwal_Matakuliah::find($id);
      $jadwalMatakuliah->fill($input->only('ruangan_id','dosen_matakuliah_id','mahasiswa_id'));
      if($jadwalMatakuliah->save()) $this->informasi = "Jadwal Mahasiswa berhasil diperbaharui";
      return redirect('jadwal_matakuliah')->with(['informasi'=>$this->informasi]);
   }

   public function hapus($id, Request $input){
      $jadwalMatakuliah = Jadwal_Matakuliah::find($id);
      if($jadwalMatakuliah->delete()) $this->informasi = "Jadwal Mahasiswa berhasil dihapus";
      return redirect('jadwal_matakuliah')->with(['informasi'=>$this->informasi]);
   }
}
