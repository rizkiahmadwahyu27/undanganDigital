<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataOrder extends Model
{
    protected $fillable = [
        'nama',
        'kode_template',
        'jenis_bayar',
        'bayar',
        'id_template',
        'id_user_create',
    ];
}
