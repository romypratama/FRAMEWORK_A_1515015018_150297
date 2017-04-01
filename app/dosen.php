<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosen';
    protected $fillable = ['nama','nip','alamat','pengguna_id'];

    public function pengguna()
    {
    	return $this->belongsTo(Pengguna::class);
    }
    public function dosen_matakuliah()
    {
    	return $this->hasMany(Dosen_Matakuliah::class);
    }

    //model dosen memiliki relasi one to one dengan model pengguna

    //model dosen memiliki relasi one to many dengan model dosen_matakuliah 
}
