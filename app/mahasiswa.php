<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    //
    protected $table = 'mahasiswa';
    protected $guarded = ['id'];
    protected $fillable = ['nama', 'nim', 'alamat'];

    public function pengguna() {
    	return $this->belongsTo(Pengguna::class);
    }

    public function jadwalmatakuliah() {
    	return $this->hasMany(Jadwal_matakuliah::class);
    }

    public function getUsernameAttribute(){
        return $this->pengguna->username;
    }
    
    public function listMahasiswaDanNim()
    {
        $out = [];
        foreach ($this->all() as $mhs) {
            $out[$mhs->id] ="{$mhs->nama} ({$mhs->nim})";
        }
        return $out;
    }

}
