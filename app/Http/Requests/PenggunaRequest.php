<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PenggunaRequest extends Request
{
    public function authorize()
    {
    	return true;
    }

    public function rules()
    {
    	$validasi = [
    		'username'=>'required',
            'password'=>'required'
    		];
    		return $validasi;
    }
}
