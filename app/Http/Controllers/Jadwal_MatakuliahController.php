<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Jadwal_matakuliah;
use App\Mahasiswa;
use App\Dosen_Matakuliah;
use App\Ruangan;
use App\Matakuliah;
use App\Dosen;

class Jadwal_matakuliahController extends Controller
{
    
    protected $informasi = 'Gagal melakukan aksi';

    public function awal()
    {
        // return "Hello dari Jadwal_MatakuliahController";
        $semuaJadwalMatakuliah = Jadwal_Matakuliah::all();
        return view('jadwal_matakuliah.awal',compact('semuaJadwalMatakuliah'));
    }

    public function tambah()
    {
        // return $this->simpan();
        $mahasiswa = new Mahasiswa;
        $ruangan = new Ruangan;
        $dosen_matakuliah = new Dosen_Matakuliah;
        return view('jadwal_matakuliah.tambah',compact('mahasiswa','ruangan','dosen_matakuliah'));
    }

    public function simpan(Request $input)
    {
        $jadwal_matakuliah = new Jadwal_Matakuliah($input->only('ruangan_id','dosen_matakuliah_id','mahasiswa_id'));
        if($jadwal_matakuliah->save()) $this->informasi="Jadwal Mahasisaw berhasil disimpan";
        return redirect('jadwal_matakuliah')->with(['informasi'=>$this->informasi]);
        // $jadwal_matakuliah->mahasiswa_id = 1;
        // $jadwal_matakuliah->ruangan_id = 1;
        // $jadwal_matakuliah->dosen_matakuliah_id = 1;
        // $jadwal_matakuliah->save();
        // return "Data dengan jadwal id mahasiswa {$jadwal_matakuliah->mahasiswa_id} telah disimpan";
    }

    public function lihat($id){
        $jadwal_matakuliah = Jadwal_Matakuliah::find($id);
        return view('jadwal_matakuliah.lihat',compact('jadwal_matakuliah'));
    }

    public function edit($id){
        $jadwal_matakuliah = Jadwal_Matakuliah::find($id);
        $mahasiswa = new Mahasiswa;
        $ruangan = new Ruangan;
        $dosen_matakuliah = new Dosen_Matakuliah;
        return view('jadwal_matakuliah.edit',compact('mahasiswa','ruangan','dosen_matakuliah','jadwal_matakuliah'));
    }

    public function update($id,Request $input)
    {
        $jadwal_matakuliah = Jadwal_Matakuliah::find($id);
        $jadwal_matakuliah->fill($input->only('ruangan_id','dosen_matakuliah_id','mahasiswa_id'));
        if($jadwal_matakuliah->save()) $this->informasi = "Jadwal Mahasiswa berhasil diperbarui";
        return redirect('jadwal_matakuliah')->with(['informasi'=>$this->informasi]);
    }

    public function hapus($id,Request $input)
    {
        $jadwal_matakuliah = Jadwal_Matakuliah::find($id);
        if($jadwal_matakuliah->delete()) $this->informasi = "Jadwal Mahasiswa berhasil dihapus";
        // $informasi = $mahasiswa->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('jadwal_matakuliah')-> with(['informasi'=>$this->informasi]);
    }
}
