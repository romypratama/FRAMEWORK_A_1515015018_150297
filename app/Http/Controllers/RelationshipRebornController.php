<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen;

class RelationshipRebornController extends Controller
{
    public function ujihas()
    {
        return Dosen::has('dosen_matakuliah')->get();
    }
}
