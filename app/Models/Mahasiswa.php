<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;

    // Kolom-kolom yang diperbolehkan untuk mass assignment
    protected $fillable = [
        'nama',
        'nim',
        'kelas',
    ];
}
