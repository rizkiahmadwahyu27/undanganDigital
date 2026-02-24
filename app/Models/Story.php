<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $fillable = [
        'kode_pesan',
        'slug',
        'tgl_stori_1',
        'tgl_stori_2',
        'tgl_stori_3',
        'tgl_stori_4',
        'tgl_stori_5',
        'tgl_stori_6',
        'story_1',
        'story_2',
        'story_3',
        'story_4',
        'story_5',
        'story_6',
    ];
}
