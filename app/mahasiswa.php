<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = ['nama','nim','alamat','pengguna_id'];

    public function pengguna()
    {
    	return $this->belongsTo(Pengguna::class);
    }

    public function jadwal_matakuliah()
    {
    	return $this->hasMany(Jadwal_Matakuliah::class,"mahasiswa_id");
    }

    public function getUsernameAttribute(){
        return $this->pengguna->username;
    }

    public function listMahasiswaDanNim(){
        $out = [];
        foreach ($this->all() as $mhs) {
            $out[$mhs->id]="{$mhs->nama} ({$mhs->nim})";
        }
        return $out;
    }


       //model mahasiswa memiliki relasi one to one dengan model pengguna
    
  	   //model mahasiswa memiliki relasi one to many  dengan model jadwal_matakuliah
 
}
