<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\matakuliah;

class MatakuliahController extends Controller
{
    //
    public function awal(){
        return view('matakuliah.awal',['data'=>matakuiah::all()]);
        //relasi dari dosen ke pengguna
        //return $data = dosen::where('pengguna_id', 12)->with('pengguna')->get(); 
        //relasi dari pengguna ke dosen
        //return $data = pengguna::where('id', 12)->with('dosen')->get();
    }
    public function tambah(){
        //return $this-simpan();
        return view('matakuliah.tambah');
    }
    public function simpan(Request $input){
        $matakuliah=new matakuliah();
        $matakuliah->title=$input->title;
        $matakuliah->keterangan=$input->keterangan;
        $informasi=$matakuliah->save() ? 'berhasil simpan data':'gagal simpan data';
        return redirect ('matakuliah')->with(['informasi'=>$informasi]);
    }
    public function edit($id){
        $matakuliah = matakuliah::find($id);
        return view ('matakuliah.edit')->with(array('matakuliah'=>$matakuliah));
    }
    public function lihat($id){
        $matakuliah = matakuliah::find($id);
        return view ('matakuliah.lihat')->with(array('matakuliah'=>$matakuliah));
    }
    public function update($id, Request $input){
        $matakuliah = matakuliah::find($id);
        $matakuliah->title = $input->title;
        $matakuliah->keterangan = $input->keterangan;
        $informasi = $matakuliah->save() ? 'Berhasil update data' : 'Gagal update data';
        return redirect('matakuliah')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)  {
        $matakuliah = matakuliah::find($id);
        $informasi = $matakuliah->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect ('matakuliah')->with(['informasi'=>$informasi]);  
    }
}
