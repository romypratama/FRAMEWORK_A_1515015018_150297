<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ruangan extends Model
{
    protected $table = 'ruangan';

    public function jadwal_matakuliah()
    {
    	return $this->hasMany(Jadwal_Matakuliah::class);
    }

    //model ini memiliki relasi one to many dengan model jadwal_matakuliah
}