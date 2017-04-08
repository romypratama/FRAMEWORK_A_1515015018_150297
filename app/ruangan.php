<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ruangan extends Model
{
    protected $table='ruangan';

    public function Jadwal(){
    	return $this->hasMany(Jadwal::class);
    }
}
