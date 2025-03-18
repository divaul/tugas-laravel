<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function show()
    {
        $mahasiswa = Mahasiswa::first();
        return view('mahasiswa.show', compact('mahasiswa'));
    }
}


