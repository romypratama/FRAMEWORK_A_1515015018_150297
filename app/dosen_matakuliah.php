<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen_Matakuliah extends Model
{
    protected $table = 'dosen_matakuliah';
    protected $fillable = ['dosen_id','matakuliah_id'];

	public function dosen()
    {
    	return $this->belongsTo(Dosen::class,"dosen_id");
    }

    public function matakuliah()
    {
    	return $this->belongsTo(Matakuliah::class,"matakuliah_id");
    }

    public function jadwal_matakuliah()
    {
    	return $this->hasMany(Jadwal_Matakuliah::class,"dosen_matakuliah_id");
    }

    public function listDosenDanMatakuliah(){
        $out = [];
        foreach ($this->all() as $dsnMtk) {
            $out[$dsnMtk->id]="{$dsnMtk->dosen->nama} (Matakuliah {$dsnMtk->matakuliah->title})";
        }
        return $out;
    }
    //model dosen_matakuliah memiliki relasi one to many dengan model dosen (foreign key)

    //model dosen_matakuliah memiliki relasi one to many dengan model matakuliah (foreign key)

    //model dosen_matakuliah memiliki relasi one to many dengan model jadwal_matakuliah 
}
