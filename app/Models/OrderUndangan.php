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
        'nama_mempelai_pria',
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
        'nama_bank',
        'an_bank',
        'no_rek_bank',
        'nama_ewalet',
        'an_ewalet',
        'no_ewalet',
    ];
}
