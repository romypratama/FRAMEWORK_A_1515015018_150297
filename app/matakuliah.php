<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $table = 'matakuliah';

    public function dosen_matakuliah()
    {
    	return $this->hasMany(Dosen_Matakuliah::class,"matakuliah_id");
    }

    //model matakuliah memiliki relasi one to many dengan dosen_matakuiah 
}
