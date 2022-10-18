<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
            return [
                'NIS' => 3103120154,
                'Nama' => 'Nabila Nur Apriliyanti',
                'Phone'=> '085842910933',
                'Kelas' => 'XII RPL 5'
            ];
    }
}
