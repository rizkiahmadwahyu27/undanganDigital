<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'kode_pesan',
        'slug',
        'foto_cover',
        'foto_footer',
        'gallery',
        'foto_mempelai_wanita',
        'foto_mempelai_pria',
        'soundtrack'
    ];

    protected $casts = [
        'gallery' => 'array',
    ];
}
