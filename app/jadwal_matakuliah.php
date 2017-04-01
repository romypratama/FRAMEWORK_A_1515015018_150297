<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_matakuliah extends Model
{
    protected $table = 'jadwal_matakuliah';
    protected $fillable = ['mahasiswa_id','ruangan_id','dosen_id'];

    public function mahasiswa()
    {
    	return $this->belongsTo(Mahasiswa::class);
    }
 
    public function dosen_matakuliah()
    {
    	return $this->belongsTo(Dosen_Matakuliah::class);
    }

    public function ruangan()
    {
    	return $this->belongsTo(Ruangan::class);
    }

     //model jadwal matakuliah memiliki relasi one to many dengan model mahasiswa (foreign key)

     //model jadwal matakuliah memiliki relasi one to many dengan model dosen_matakuliah (foreign key)

     //model jadwal matakuliah memiliki relasi one to many dengan model ruangan (foreign key)
}
