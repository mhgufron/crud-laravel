<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SantriController extends Controller
{
    public function create()
    {
        return view('santri.create');
    }
}
