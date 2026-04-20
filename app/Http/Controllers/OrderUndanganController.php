<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Kehadiran;
use App\Models\OrderUndangan;
use App\Models\Pesan;
use App\Models\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class OrderUndanganController extends Controller
{
    public function order_undangan(){
        $data_undangans = OrderUndangan::select('id','kode_pesan', 'slug', 'nama_mempelai_wanita', 'nama_mempelai_pria', 'nama_ayah_pria', 'nama_ibu_pria', 'nama_ayah_wanita', 'nama_ibu_wanita', 'tgl_akad', 'tgl_resepsi', 'alamat_akad', 'alamat_resepsi')->get();
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

        $gallery = collect($images->gallery)->map(function ($path) {

            $fullPath = storage_path('app/public/' . $path);

            if (file_exists($fullPath)) {
                [$width, $height] = getimagesize($fullPath);

                return [
                    'path' => $path,
                    'orientation' => $width > $height ? 'landscape' : 'portrait'
                ];
            }

            return [
                'path' => $path,
                'orientation' => 'portrait'
            ];
        });

        return view('Undangan2D.' . $undangan->template, compact(
            'undangan',
            'tamu',
            'images',
            'timezone',
            'stories',
            'pesan',
            'gallery'
        ));
    }

    public function edit_undangan($id){
        $undangan = OrderUndangan::where('id', $id)->firstOrFail();
        $stories = Story::where('slug', $undangan->slug)->firstOrFail();
        $images = Image::where('slug', $undangan->slug)->firstOrFail();
        return view('Admin.edit_undangan', compact('undangan', 'images', 'stories'));
    }

    public function update_undangan(Request $request)
{
    $id = $request->id;
    DB::transaction(function () use ($request, $id) {

        // 🔹 1. Ambil data lama
        
        $order = OrderUndangan::findOrFail($id);
        $image = Image::where('slug', $order->slug)->first();
        $story = Story::where('slug', $order->slug)->first();

        // 🔹 2. UPLOAD FOTO (jika ada)
        $fotoCoverPath = $image->foto_cover;
        if ($request->hasFile('foto_cover')) {
            $fotoCoverPath = $request->file('foto_cover')->store('covers', 'public');
        }

        $fotoMempelaiPria = $image->foto_mempelai_pria;
        if ($request->hasFile('foto_mempelai_pria')) {
            $fotoMempelaiPria = $request->file('foto_mempelai_pria')->store('mempelai_pria', 'public');
        }

        $fotoMempelaiWanita = $image->foto_mempelai_wanita;
        if ($request->hasFile('foto_mempelai_wanita')) {
            $fotoMempelaiWanita = $request->file('foto_mempelai_wanita')->store('mempelai_wanita', 'public');
        }

        // 🔹 3. GALLERY (tidak hilang, tapi nambah)
        $galleryPaths = $image->gallery ?? [];

        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $file) {
                $galleryPaths[] = $file->store('gallery', 'public');
            }
        }

        // 🔹 4. SOUNDTRACK
        $namaFile = $image->soundtrack;
        if ($request->hasFile('soundtrack')) {
            $file = $request->file('soundtrack');
            $namaFile = time().'.'.$file->getClientOriginalExtension();
            $file->storeAs('soundtrack', $namaFile, 'public');
        }

        // 🔹 5. UPDATE ORDER
        $order->update([
            'template'             => $request->template,
            'nama_mempelai_wanita' => $request->nama_mempelai_wanita,
            'fb_mempelai_wanita'   => $request->fb_mempelai_wanita,
            'ig_mempelai_wanita'   => $request->ig_mempelai_wanita,
            'nama_mempelai_pria'   => $request->nama_mempelai_pria,
            'fb_mempelai_pria'     => $request->fb_mempelai_pria,
            'ig_mempelai_pria'     => $request->ig_mempelai_pria,
            'nama_ayah_pria'       => $request->nama_ayah_pria,
            'nama_ibu_pria'        => $request->nama_ibu_pria,
            'nama_ayah_wanita'     => $request->nama_ayah_wanita,
            'nama_ibu_wanita'      => $request->nama_ibu_wanita,
            'pria_anak_ke'         => $request->pria_anak_ke,
            'wanita_anak_ke'       => $request->wanita_anak_ke,
            'tgl_akad'             => $request->tanggal_akad,
            'tgl_resepsi'          => $request->tanggal_resepsi,
            'alamat_akad'          => $request->lokasi_akad,
            'alamat_resepsi'       => $request->lokasi_resepsi,
            'maps_akad'            => $request->maps_akad,
            'maps_resepsi'         => $request->maps_resepsi,
            'alamat_kirim_hadiah'  => $request->alamat_kirim_hadiah,
            'dompet_digital'            => $request->dompet_digital,
        ]);

        // 🔹 6. UPDATE IMAGE
        $image->update([
            'foto_cover'           => $fotoCoverPath,
            'gallery'              => $galleryPaths,
            'foto_mempelai_wanita' => $fotoMempelaiWanita,
            'foto_mempelai_pria'   => $fotoMempelaiPria,
            'soundtrack'           => $namaFile,
        ]);

        // 🔹 7. UPDATE STORY
        $story->update([
            'tgl_stori_1' => $request->tgl_stori_1,
            'tgl_stori_2' => $request->tgl_stori_2,
            'tgl_stori_3' => $request->tgl_stori_3,
            'tgl_stori_4' => $request->tgl_stori_4,
            'tgl_stori_5' => $request->tgl_stori_5,
            'tgl_stori_6' => $request->tgl_stori_6,
            'story_1'     => $request->story_1,
            'story_2'     => $request->story_2,
            'story_3'     => $request->story_3,
            'story_4'     => $request->story_4,
            'story_5'     => $request->story_5,
            'story_6'     => $request->story_6,
        ]);

    });

    return redirect()->route('admin.data_order')->with('success', 'Undangan berhasil diupdate');
}

    public function delete_undangan($id)
{
    DB::transaction(function () use ($id) {

        $order = OrderUndangan::findOrFail($id);
        $image = Image::where('slug', $order->slug)->first();
        $story = Story::where('slug', $order->slug)->first();

        // 🔥 HAPUS FILE
        if ($image) {

            if ($image->foto_cover && Storage::disk('public')->exists($image->foto_cover)) {
                Storage::disk('public')->delete($image->foto_cover);
            }

            if ($image->foto_mempelai_pria && Storage::disk('public')->exists($image->foto_mempelai_pria)) {
                Storage::disk('public')->delete($image->foto_mempelai_pria);
            }

            if ($image->foto_mempelai_wanita && Storage::disk('public')->exists($image->foto_mempelai_wanita)) {
                Storage::disk('public')->delete($image->foto_mempelai_wanita);
            }

            if ($image->soundtrack && Storage::disk('public')->exists('soundtrack/'.$image->soundtrack)) {
                Storage::disk('public')->delete('soundtrack/'.$image->soundtrack);
            }

            // gallery aman
            if (!empty($image->gallery) && is_array($image->gallery)) {
                foreach ($image->gallery as $file) {
                    if (Storage::disk('public')->exists($file)) {
                        Storage::disk('public')->delete($file);
                    }
                }
            }

            $image->delete();
        }

        // 🔥 HAPUS RELASI
        if ($story) {
            $story->delete();
        }

        Kehadiran::where('slug', $order->slug)->delete();
        Pesan::where('slug', $order->slug)->delete();

        // 🔥 HAPUS ORDER
        $order->delete();
    });

    return redirect()->route('admin.data_order')->with('success', 'Undangan berhasil dihapus');
}
}
