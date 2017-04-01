<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen_Matakuliah extends Model
{
    protected $table = 'dosen_matakuliah';
    protected $fillable = ['dosen_id','matakuliah_id'];

	public function dosen()
    {
    	return $this->belongsTo(Dosen::class);
    }

    public function matakuliah()
    {
    	return $this->belongsTo(Matakuliah::class);
    }

    public function jadwal_matakuliah()
    {
    	return $this->hasMany(Jadwal_Matakuliah::class);
    }

    //model dosen_matakuliah memiliki relasi one to many dengan model dosen (foreign key)

    //model dosen_matakuliah memiliki relasi one to many dengan model matakuliah (foreign key)

    //model dosen_matakuliah memiliki relasi one to many dengan model jadwal_matakuliah 
}
