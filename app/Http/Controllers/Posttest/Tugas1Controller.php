<?php

namespace App\Http\Controllers\Posttest;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Tugas1Controller extends Controller
{
    //
    public function namanim(){
        $data = \App\mahasiswa::all();
        return $data;
    }
}
