<?php

namespace App\Http\Controllers;

use App\Santri;
use Illuminate\Http\Request;

class SantriController extends Controller
{
    public function index()
    {
        $santris = Santri::all();

        return view('santri.index', compact('santris'));
    }

    public function create()
    {
        return view('santri.create');
    }

    public function store(Request $request)
    {

        // dd($request->all());

        // Validasi Input Form
        $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'alamat' => 'required',
            'jenis_keramin' => 'required',
        ]);

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

        // return view('santri.create');
        // return redirect()->url('santri/create');
        return redirect()->route('santri.create');
    }

}
