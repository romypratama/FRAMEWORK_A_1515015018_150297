<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'pengguna';

    public function dosen()
    {
    	return $this->hasOne(Dosen::class);
    }

    public function mahasiswa()
    {
    	return $this->hasOne(Mahasiswa::class);
    }

    public function peran()
    {
    	return $this->belongsToMany(Peran::class);
    }

    //model pengguna memiliki relasi one to one dengan model dosen
       
    //model pengguna memiliki relasi one to one dengan model mahasiswa
 
    //model pengguna memiliki relasi many to many dengan model peran 
       
}
