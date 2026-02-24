<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kehadiran extends Model
{
    protected $fillable = [
        'kode_pesan',
        'slug',
        'nama',
        'konfirmasi_kehadiran',
        
    ];
}
