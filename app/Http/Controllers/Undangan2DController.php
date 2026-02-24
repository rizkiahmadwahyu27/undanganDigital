<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Kehadiran;
use App\Models\OrderUndangan;
use App\Models\Pesan;
use App\Models\Story;
use App\Models\Undangan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Undangan2DController extends Controller
{
    public function undangan1(){

        return view('Undangan2D.undangan1');
    }

    // LIST DATA
    public function index()
    {
        $data_undangan = Undangan::latest()->paginate(10);
        return view('Admin.create_undangans', compact('data_undangan'));
    }

    
    // SIMPAN DATA
    public function store(Request $request)
    {
        
     // Pastikan import ini di atas

// ... di dalam fungsi controller ...

    DB::transaction(function () use ($request) {
        // 1. UPLOAD FOTO
        $fotoCoverPath = $request->hasFile('foto_cover') 
            ? $request->file('foto_cover')->store('covers', 'public') : null;

        $fotoMempelaiPria = $request->hasFile('foto_mempelai_pria') 
            ? $request->file('foto_mempelai_pria')->store('mempelai_pria', 'public') : null;

        $fotoMempelaiWanita = $request->hasFile('foto_mempelai_wanita') 
            ? $request->file('foto_mempelai_wanita')->store('mempelai_wanita', 'public') : null;

        $galleryPaths = [];

        if($request->hasFile('gallery')) {

        foreach($request->file('gallery') as $file) {

        $path = $file->store('gallery', 'public'); // simpan di storage/app/public/gallery

        $galleryPaths[] = $path;

        }

        }

        $file = $request->file('soundtrack');

        $namaFile = time().'.'.$file->getClientOriginalExtension();

        $file->storeAs('soundtrack', $namaFile, 'public');


        // 2. LOGIKA KODE PESAN (Disederhanakan)
        $kode_pesan = OrderUndangan::count() + 1;

        // 3. SIMPAN DATA UNDANGAN
        OrderUndangan::create([
            'kode_pesan'          => $kode_pesan,
            'slug'                => $request->slug,
            'template'            => $request->template,
            'nama_mempelai_wanita'=> $request->nama_mempelai_wanita,
            'nama_mempelai_pria'  => $request->nama_mempelai_pria,
            'nama_ayah_pria'      => $request->nama_ayah_pria,
            'nama_ibu_pria'       => $request->nama_ibu_pria,
            'nama_ayah_wanita'    => $request->nama_ayah_wanita,
            'nama_ibu_wanita'     => $request->nama_ibu_wanita,
            'pria_anak_ke'        => $request->pria_anak_ke,
            'wanita_anak_ke'      => $request->wanita_anak_ke,
            'tgl_akad'            => $request->tanggal_akad,
            'tgl_resepsi'         => $request->tanggal_resepsi,
            'alamat_akad'         => $request->lokasi_akad,
            'alamat_resepsi'      => $request->lokasi_resepsi,
            'maps_akad'           => $request->maps_akad,
            'maps_resepsi'        => $request->maps_resepsi,
            'alamat_kirim_hadiah' => $request->alamat_kirim_hadiah,
            'nama_bank'           => $request->nama_bank,
            'an_bank'             => $request->an_bank,
            'no_rek_bank'         => $request->no_rek_bank,
            'nama_ewalet'         => $request->nama_ewalet,
            'an_ewalet'           => $request->an_ewalet,
            'no_ewalet'           => $request->no_ewalet,
        ]);

        // 4. SIMPAN DATA IMAGE
        Image::create([
            'kode_pesan'           => $kode_pesan,
            'slug'                 => $request->slug,
            'foto_cover'           => $fotoCoverPath,
            // Gunakan json_encode agar array gallery bisa masuk ke database string/text
            'gallery'              => $galleryPaths, 
            'foto_mempelai_wanita' => $fotoMempelaiWanita, // Perbaikan nama variabel
            'foto_mempelai_pria'   => $fotoMempelaiPria,   // Perbaikan nama 
            'soundtrack'           => $namaFile,
        ]);

        //stroi
        Story::create([
            'kode_pesan'        => $kode_pesan,
            'slug'              => $request->slug,
            'tgl_stori_1'              => $request->tgl_stori_1,
            'tgl_stori_2'              => $request->tgl_stori_2,
            'tgl_stori_3'              => $request->tgl_stori_3,
            'tgl_stori_4'              => $request->tgl_stori_4,
            'tgl_stori_5'              => $request->tgl_stori_5,
            'tgl_stori_6'              => $request->tgl_stori_6,
            'story_1'              => $request->story_1,
            'story_2'              => $request->story_2,
            'story_3'              => $request->story_3,
            'story_4'              => $request->story_4,
            'story_5'              => $request->story_5,
            'story_6'              => $request->story_6,
        ]);
    });

        return redirect()->route('admin.data_order')->with('success', 'Undangan berhasil dibuat');
    }


    //kirim pesan
    public function kirim_pesan(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'pesan' => 'required'
        ]);

        Pesan::create([
            'slug' => $request->slug,
            'kode_pesan' => $request->kode_pesan,
            'nama' => $request->nama,
            'pesan' => $request->pesan
        ]);

       return back()->with('success', 'Pesan berhasil dikirim');
    }
    public function konfirmasi_kehadiran(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        Kehadiran::create([
            'kode_pesan' => $request->kode_pesan,
            'slug' => $request->slug,
            'nama' => $request->nama,
            'konfirmasi_kehadiran' => $request->konfirmasi_kehadiran,
        ]);

       return back()->with('success', 'Pesan berhasil dikirim');
    }


    // FORM EDIT
    public function edit(Undangan $undangan)
    {
        return view('admin.undangan.edit', compact('undangan'));
    }

    // UPDATE DATA
    public function update(Request $request, Undangan $undangan)
    {
        $validated = $request->validate([
            'slug'          => 'required|unique:undangans,slug,' . $undangan->id,
            'nama_pria'     => 'required',
            'nama_wanita'   => 'required',
            'tanggal_acara' => 'required|date',
            'lokasi'        => 'required',
        ]);

        if ($request->hasFile('foto_cover')) {
            $fotoCoverPath = $request->file('foto_cover')->store('covers', 'public');
        } else {
            $fotoCoverPath = $undangan->foto_cover;
        }

        $undangan->update([
            'slug'  => $request->slug,

            'nama_pria' => $request->nama_pria,
            'nama_ayah_mempelai_pria' => $request->nama_ayah_mempelai_pria,
            'nama_ibu_mempelai_pria' => $request->nama_ibu_mempelai_pria,
            'mempelai_pria_anak_ke' => $request->mempelai_pria_anak_ke,

            'nama_wanita' => $request->nama_wanita,
            'nama_ayah_mempelai_wanita' => $request->nama_ayah_mempelai_wanita,
            'nama_ibu_mempelai_wanita' => $request->nama_ibu_mempelai_wanita,
            'mempelai_wanita_anak_ke' => $request->mempelai_wanita_anak_ke,

            'tanggal_acara' => $request->tanggal_acara,
            'lokasi' => $request->lokasi,
            'maps_url' => $request->maps_url,

            'foto_cover' => $fotoCoverPath,

            'gallery' => json_decode($request->gallery, true),
            'video_url' => $request->video_url,
            'rekening' => json_decode($request->rekening, true),

            'rsvp_enabled' => $request->has('rsvp_enabled'),
            'template' => $request->template,
            'sections' => json_decode($request->sections, true),
        ]);

        return redirect()->route('admin.undangan.index')->with('success', 'Data berhasil diperbarui');
    }

    // DELETE DATA
    public function destroy(Undangan $undangan)
    {
        $undangan->delete();
        return back()->with('success', 'Undangan berhasil dihapus');
    }


    //template floral

    public function undangan2(){
        return view('Undangan2D.undangan2');
    }

    public function undangan3(){
        return view('Undangan2D.undangan3');
    }

    public function contoh_undangan(){
        return view('Undangan3D.undangan1');
    }
}
