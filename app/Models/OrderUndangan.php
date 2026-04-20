<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderUndangan extends Model
{
    protected $fillable = [
        'kode_pesan',
        'slug',
        'template',
        'nama_mempelai_wanita',
        'fb_mempelai_wanita',
        'ig_mempelai_wanita',
        'nama_mempelai_pria',
        'fb_mempelai_pria',
        'ig_mempelai_pria',
        'nama_ayah_pria',
        'nama_ibu_pria',
        'nama_ayah_wanita',
        'nama_ibu_wanita',
        'pria_anak_ke',
        'wanita_anak_ke',
        'tgl_akad',
        'tgl_resepsi',
        'alamat_akad',
        'alamat_resepsi',
        'maps_akad',
        'maps_resepsi',
        'alamat_kirim_hadiah',
        'dompet_digital',
    ];

    protected $casts = [
        'dompet_digital' => 'array',
    ];
}
