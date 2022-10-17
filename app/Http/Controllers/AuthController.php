<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'Nis' => 3103120200,
            "Nama" => "Rizky Dwi Saputra",
            "Phone" => "0895377133221",
            "Class"=> "XII RPL 6"
        ];
    }
}
