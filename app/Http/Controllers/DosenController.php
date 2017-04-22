<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Dosen;
use App\Pengguna;

class DosenController extends Controller
{

    public function awal()
    {
        //return "Hello dari DosenController";
        return view('dosen.awal',['data'=>Dosen::all()]);
    }

    public function tambah()
    {
        //return $this->simpan();
        return view('dosen.tambah');
    }

    public function simpan(Request $input)
    {
        // $dosen = new Dosen();
        // $dosen->nama = 'Ferry S.Kom';
        // $dosen->nip = '1515015111';
        // $dosen->alamat = 'Jalan Pramuka';
        // $dosen->pengguna_id = 1;
        // $dosen->save();
        // return "Data dengan nama dosen {$dosen->nama} telah disimpan";
        // $dosen = new Dosen;
        // $dosen->nama = $input->nama;
        // $dosen->nip = $input->nip;
        // $dosen->alamat = $input->alamat;
        // $dosen->pengguna_id = $input->pengguna_id;
        // $informasi = $dosen->save() ? 'Berhasil Simpan Data' : 'Gagal simpan data';
        // return redirect('dosen')->with(['informasi'=>$informasi]);
        $pengguna = new Pengguna($input->only('username','password'));
        if ($pengguna->save()) {
            $dosen = new Dosen;
            $dosen->nama = $input->nama;
            $dosen->nip = $input->nip;
            $dosen->alamat = $input->alamat;
            if ($pengguna->dosen()->save($dosen)) $this->informasi ='Berhasil Simpan Data';
        }
        return redirect('dosen')->with(['informasi'=>$this->informasi]);
    }

    public function edit($id)
    {
        $dosen = Dosen::find($id);
        return view('dosen.edit')->with(array('dosen'=>$dosen));
    }

    public function lihat($id)
    {
        $dosen = Dosen::find($id);
        return view('dosen.lihat')->with(array('dosen'=>$dosen));
    }

    public function update($id, Request $input)
    {
        // $dosen = dosen::find($id);
        // $dosen->nama = $input->nama;
        // $dosen->nip = $input->nip;
        // $dosen->alamat = $input->alamat;
        // $dosen->pengguna_id = $input->pengguna_id;
        // $informasi = $dosen->save() ? 'Berhasil update data' :'Gagal Update data';
        // return redirect('dosen')->with(['informasi'=>$informasi]);
        $dosen = Dosen::find($id);
        $dosen->nama = $input->nama;
        $dosen->nip = $input->nip;
        $dosen->alamat = $input->alamat;
        $dosen->save();
        // $dosen->pengguna_id = $input->pengguna_id;
        if(!is_null($input->username)){
            $pengguna=$dosen->pengguna->fill($input->only('username'));
                if(!empty($input->password)) $pengguna->password = $input->password;
        // $dosen = dosen::find($id);
        // $dosen->nama = $input->nama;
        // $dosen->nip $input->nip;
        // $dosen->alamat = $input->alamat;
                if($pengguna->save()) $this->informasi = 'Berhasil update data';
        }
        else{
            $this->informasi = 'Berhasil simpan data 2';
        }
        // $informasi = $dosen->save() ? 'Berhasil update data': 'Gagal update data';
        return redirect('dosen') -> with (['informasi'=>$this->informasi]);
    }

    public function hapus($id)
    {
        $dosen = Dosen::find($id);
        $informasi = $dosen->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('dosen')->with(['informasi'=>$informasi]);
    }
}
