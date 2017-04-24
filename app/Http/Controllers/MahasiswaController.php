<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Mahasiswa;
use App\Pengguna;
use App\Http\Requests\MahasiswaRequest;

class mahasiswacontroller extends Controller
{
   protected $informasi = 'Gagal melakukan aksi';
    public function awal(){
   	//return "Data Mahasiswa";
      $semuaMahasiswa = Mahasiswa::all();
      return view('mahasiswa.awal', compact('semuaMahasiswa'));
   }
   public function tambah()
   {
      return view('mahasiswa.tambah');
   }
   public function simpan(MahasiswaRequest $input)
   {
      $pengguna = new Pengguna($input->only('username','password'));
      if ($pengguna->save()) {
         $mahasiswa = new Mahasiswa();
         $mahasiswa->nama = $input->nama;
         $mahasiswa->nim = $input->nim;
         $mahasiswa->alamat = $input->alamat;
         if($pengguna->mahasiswa()->save($mahasiswa)) $this->informasi = 'Berhasil Simpan Data';
         }
         return redirect('mahasiswa')->with(['informasi'=>$this->informasi]);
      
   }

   public function edit($id){
      $mahasiswa = Mahasiswa::find($id);
      return view('mahasiswa.edit')->with(array('mahasiswa'=>$mahasiswa));
   }

   public function lihat($id){
      $mahasiswa = Mahasiswa::find($id);
      return view('mahasiswa.lihat')->with(array('mahasiswa'=>$mahasiswa));
   }

   public function update($id, MahasiswaRequest $input){
      $mahasiswa = Mahasiswa::find($id);
      $pengguna = $mahasiswa->pengguna;
      $mahasiswa->nama = $input->nama;
      $mahasiswa->nim = $input->nim;  
      $mahasiswa->alamat = $input->alamat;
      $mahasiswa->save();
      if(!is_null($input->username)){
         $pengguna->fill($input->only('username'));
         if(!empty($input->password)){
            $pengguna->password = $input->password;
         }
      if($pengguna->save()){
         $this->informasi = 'berhasil simpan data';
      }else{
         $this->informasi = 'gagal simpan data';
       }
      }
      return redirect('mahasiswa')->with(['informasi'=>$this->informasi]);
   }

   public function hapus($id){
      $mahasiswa = Mahasiswa::find($id);
      if($mahasiswa->pengguna()->delete()){
         if($mahasiswa->delete()){
            $this->informasi = 'berhasil hapus data';
         }
      }
      return redirect('mahasiswa')->with(['informasi'=>$this->informasi]);
   }

}

