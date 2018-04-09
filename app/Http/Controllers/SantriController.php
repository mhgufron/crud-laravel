<?php

namespace App\Http\Controllers;

use App\Santri;
use Illuminate\Http\Request;

class SantriController extends Controller
{
    public function create()
    {
        return view('santri.create');
    }

    public function store(Request $roquest)
    {
        $nama           = $request->nama;
        $umur           = $request->umur;
        $alamat         = $request->alamat;
        $jenis_kelamin  = $request->jenis_kelamin;

        Santri::create([
            'nama'              => $nama,
            'umur'              => $umur,
            'alamat'            => $alamat,
            'jenis_kelamin'     => $jenis_kelamin,
        ]);
    }
}
