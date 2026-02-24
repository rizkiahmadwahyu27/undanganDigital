<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\OrderUndangan;
use App\Models\Pesan;
use App\Models\Story;
use Illuminate\Http\Request;

class OrderUndanganController extends Controller
{
    public function order_undangan(){
        $data_undangans = OrderUndangan::select('kode_pesan', 'slug', 'nama_mempelai_wanita', 'nama_mempelai_pria', 'nama_ayah_pria', 'nama_ibu_pria', 'nama_ayah_wanita', 'nama_ibu_wanita', 'tgl_akad', 'tgl_resepsi', 'alamat_akad', 'alamat_resepsi')->get();
        return view('Admin.create_undangans', compact('data_undangans'));
    }

    public function undangan_digital($slug, $tamu = null){
        $undangan = OrderUndangan::where('slug', $slug)->firstOrFail();
        $images = Image::where('slug', $slug)->first();
        $stories = Story::where('slug', $slug)->first();
        $pesan = Pesan::where('slug', $slug)
              ->latest()
              ->paginate(7);
        if ($tamu) {
            $tamu = ucwords(str_replace('-', ' ', $tamu));
        } else {
            $tamu = 'Tamu Undangan';
        }

        // Default timezone
        $timezone = 'WIB';

        // Coba extract koordinat dari link maps
        preg_match('/@(-?\d+\.\d+),(-?\d+\.\d+)/', $undangan->maps_akad, $matches);

        if ($matches) {
            $lng = $matches[2];

            if ($lng < 115) {
                $timezone = 'WIB';
            } elseif ($lng < 130) {
                $timezone = 'WITA';
            } else {
                $timezone = 'WIT';
            }
        }

        return view('Undangan2D.' . $undangan->template, compact(
            'undangan',
            'tamu',
            'images',
            'timezone',
            'stories',
            'pesan'
        ));
    }


}
