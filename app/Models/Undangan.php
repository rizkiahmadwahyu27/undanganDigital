<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Undangan extends Model
{
    protected $fillable = [
        'slug',
        'nama_pria', 'nama_ayah_mempelai_pria', 'nama_ibu_mempelai_pria', 'mempelai_pria_anak_ke',
        'nama_wanita', 'nama_ayah_mempelai_wanita', 'nama_ibu_mempelai_wanita', 'mempelai_wanita_anak_ke',
        'tanggal_acara', 'lokasi', 'maps_url',
        'foto_cover',
        'gallery', 'video_url', 'rekening',
        'rsvp_enabled', 'template', 'sections'
    ];

    protected $casts = [
        'gallery' => 'array',
        'rekening' => 'array',
        'sections' => 'array',
        'rsvp_enabled' => 'boolean',
    ];
}
