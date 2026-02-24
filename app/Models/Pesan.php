<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    protected $fillable = [
        'kode_pesan',
        'slug',
        'nama',
        'pesan',
        
    ];
}
