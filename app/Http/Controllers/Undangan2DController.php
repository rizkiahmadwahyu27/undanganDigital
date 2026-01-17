<?php

namespace App\Http\Controllers;

use App\Models\Undangan;
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
        $validated = $request->validate([
            'slug'          => 'required|unique:undangans,slug',
            'nama_pria'     => 'required',
            'nama_wanita'   => 'required',
            'tanggal_acara' => 'required|date',
            'lokasi'        => 'required',
        ]);

        // UPLOAD FOTO COVER
        $fotoCoverPath = null;
        if ($request->hasFile('foto_cover')) {
            $fotoCoverPath = $request->file('foto_cover')->store('covers', 'public');
        }
        $galleryPaths = [];
        if($request->hasFile('gallery')) {
            foreach($request->file('gallery') as $file) {
                $path = $file->store('gallery', 'public'); // simpan di storage/app/public/gallery
                $galleryPaths[] = $path;
            }
        }
        Undangan::create([
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

            'gallery' => $galleryPaths,
            'video_url' => $request->video_url,
            'rekening' => json_decode($request->rekening, true),

            'rsvp_enabled' => $request->has('rsvp_enabled'),
            'template' => $request->template,
            'sections' => json_decode($request->sections, true),
        ]);


        return redirect()->route('admin.data_order')->with('success', 'Undangan berhasil dibuat');
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

    public function template_floral($slug){
        $data = Undangan::where('slug', $slug)->firstOrFail();
        return view('Templates.Floral.index', compact('data'));
    }
}
