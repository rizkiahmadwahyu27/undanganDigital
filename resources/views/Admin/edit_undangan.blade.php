@extends('Layout.app')
@section('content')
    <form action="{{route('admin.update_undangan', )}}" method="post" enctype="multipart/form-data">
        @csrf
        <!-- CONTENT -->
        <div class="text-gray-600">
            
            {{-- NAMA PRIA --}}
            <div class="mb-2">
                <label class="font-semibold">Nama Mempelai Pria</label>
                <input type="text" name="nama_mempelai_pria" class="w-full border rounded p-2" required value="{{$undangan->nama_mempelai_pria}}">
                <input type="hidden" name="id" class="w-full border rounded p-2" required value="{{$undangan->id}}">
            </div>
            <div class="mb-2">
                <label class="font-semibold">FB Mempelai Pria</label>
                <input type="text" name="fb_mempelai_pria" class="w-full border rounded p-2" required value="{{$undangan->fb_mempelai_pria}}">
            </div>
            <div class="mb-2">
                <label class="font-semibold">IG Mempelai Pria</label>
                <input type="text" name="ig_mempelai_pria" class="w-full border rounded p-2" required value="{{$undangan->ig_mempelai_pria}}">
            </div>

            {{-- NAMA WANITA --}}
            <div class="mb-2">
                <label class="font-semibold">Nama Mempelai Wanita</label>
                <input type="text" name="nama_mempelai_wanita" class="w-full border rounded p-2" required value="{{$undangan->nama_mempelai_wanita}}">
            </div>
            <div class="mb-2">
                <label class="font-semibold">FB Mempelai Wanita</label>
                <input type="text" name="fb_mempelai_wanita" class="w-full border rounded p-2" required value="{{$undangan->fb_mempelai_wanita}}">
            </div>
            <div class="mb-2">
                <label class="font-semibold">IG Mempelai Wanita</label>
                <input type="text" name="ig_mempelai_wanita" class="w-full border rounded p-2" required value="{{$undangan->ig_mempelai_wanita}}">
            </div>

            {{-- TANGGAL ACARA --}}
            <div class="mb-2">
                <label class="font-semibold">Tanggal Akad</label>
                <input type="datetime-local" name="tanggal_akad" class="w-full border rounded p-2" required value="{{ \Carbon\Carbon::parse($undangan->tanggal_akad)->format('Y-m-d\TH:i') }}">
            </div>

            <div class="mb-2">
                <label class="font-semibold">Tanggal Resepsi</label>
                <input type="datetime-local" name="tanggal_resepsi" class="w-full border rounded p-2" required value="{{ \Carbon\Carbon::parse($undangan->tanggal_akad)->format('Y-m-d\TH:i') }}">
            </div>

            {{-- LOKASI --}}
            <div class="mb-2">
                <label class="font-semibold">Lokasi Akad</label>
                <input type="text" name="lokasi_akad" class="w-full border rounded p-2" required value="{{$undangan->alamat_akad}}">
            </div>
            <div class="mb-2">
                <label class="font-semibold">Lokasi Resepsi</label>
                <input type="text" name="lokasi_resepsi" class="w-full border rounded p-2" required value="{{$undangan->alamat_resepsi}}">
            </div>
            <div class="mb-2">
                <label class="font-semibold">Lokasi Kirim Hadiah</label>
                <input type="text" name="alamat_kirim_hadiah" class="w-full border rounded p-2" required value="{{$undangan->alamat_kirim_hadiah}}">
            </div>

            {{-- MAPS URL --}}
            <div class="mb-2">
                <label class="font-semibold">Google Maps URL Akad</label>
                <input type="text" name="maps_akad" class="w-full border rounded p-2" required value="{{$undangan->maps_akad}}">
            </div>
            <div class="mb-2">
                <label class="font-semibold">Google Maps URL Resepsi</label>
                <input type="text" name="maps_resepsi" class="w-full border rounded p-2" required value="{{$undangan->maps_resepsi}}">
            </div>

            {{-- FOTO COVER --}}
            <div class="mb-2">
                <label class="font-semibold">Foto Cover (JPG/PNG)</label>
                <input type="file" name="foto_cover" class="w-full border rounded p-2" >
            </div>
            <div class="mb-2">
                <label class="font-semibold">Foto Pria (JPG/PNG)</label>
                <input type="file" name="foto_mempelai_pria" class="w-full border rounded p-2" >
            </div>
            <div class="mb-2">
                <label class="font-semibold">Foto Wanita (JPG/PNG)</label>
                <input type="file" name="foto_mempelai_wanita" class="w-full border rounded p-2" >
            </div>

            {{-- GALLERY UPLOAD --}}
            <div class="mb-2">
                <label class="font-semibold">Gallery Foto (Bisa pilih banyak)</label>
                <input type="file" name="gallery[]" class="w-full border rounded p-2" multiple>

                <div class="grid grid-cols-6 gap-2">
                    @foreach($images->gallery as $img)
                        <div><img src="{{ asset('storage/'.$img) }}" class="w-24 mt-2"></div>
                    @endforeach
                </div>
                <p class="text-sm text-gray-500 mt-1">Tahan tombol Ctrl / Shift untuk memilih banyak foto sekaligus.</p>
            </div>
            {{-- Sountrack --}}
            <div class="mb-2">
                <label class="font-semibold">SoundTrack</label>
                <input type="file" name="soundtrack" accept=".mp3,audio/*" class="w-full border rounded p-2">
            </div>

            {{-- REKENING JSON --}}
            <div class="mb-2">
                <label class="font-semibold">Tahun  1</label>
                <input type="date" name="tgl_stori_1" class="w-full border rounded p-2" required value="{{$stories->tgl_stori_1}}">
            </div>
            </div>
            <div class="mb-2">
                <label class="font-semibold">Stori 1</label>
                <textarea name="story_1" rows="4" class="w-full border rounded p-2" required
                placeholder='isi stori'>{{$stories->story_1}}</textarea>
            </div>
            <div class="mb-2">
                <label class="font-semibold">Tahun  2</label>
                <input type="date" name="tgl_stori_2" class="w-full border rounded p-2" required value="{{$stories->tgl_stori_2}}">
            </div>
            <div class="mb-2">
                <label class="font-semibold">Stori 2</label>
                <textarea name="story_2" rows="4" class="w-full border rounded p-2" required
                placeholder='isi stori'>{{$stories->story_2}}</textarea>
            </div>
            <div class="mb-2">
                <label class="font-semibold">Tahun  3</label>
                <input type="date" name="tgl_stori_3" class="w-full border rounded p-2" required value="{{$stories->tgl_stori_3}}">
            </div>
            <div class="mb-2">
                <label class="font-semibold">Stori 3</label>
                <textarea name="story_3" rows="4" class="w-full border rounded p-2" required
                placeholder='isi stori'>{{$stories->story_3}}</textarea>
            </div>
            <div class="mb-2">
                <label class="font-semibold">Tahun  4</label>
                <input type="date" name="tgl_stori_4" class="w-full border rounded p-2" required value="{{$stories->tgl_stori_4}}">
            </div>
            <div class="mb-2">
                <label class="font-semibold">Stori 4</label>
                <textarea name="story_4" rows="4" class="w-full border rounded p-2" required
                placeholder='isi stori'>{{$stories->story_4}}</textarea>
            </div>
            <div class="mb-2">
                <label class="font-semibold">Tahun  5</label>
                <input type="date" name="tgl_stori_5" class="w-full border rounded p-2" required value="{{$stories->tgl_stori_5}}">
            </div>
            <div class="mb-2">
                <label class="font-semibold">Stori 5</label>
                <textarea name="story_5" rows="4" class="w-full border rounded p-2" required
                placeholder='isi stori'>{{$stories->story_5}}</textarea>
            </div>
            <div class="mb-2">
                <label class="font-semibold">Tahun  6</label>
                <input type="date" name="tgl_stori_6" class="w-full border rounded p-2" required value="{{$stories->tgl_stori_6}}">
            </div>
            <div class="mb-2">
                <label class="font-semibold">Stori 6</label>
                <textarea name="story_6" rows="4" class="w-full border rounded p-2" required
                placeholder='isi stori'>{{$stories->story_6}}</textarea>
            </div>

            <div class="mb-2">
                <label class="font-semibold">Template</label>
                <input type="text" name="template" class="w-full border rounded p-2" required value="{{$undangan->template}}">
            </div>
            <div class="mb-2">
                <label class="font-semibold">Dompet Digital</label>
                <textarea name="dompet_digital" rows="6" class="w-full border rounded p-2"
                >{{$undangan->dompet_digital}}</textarea>
            </div>

          

            <h2 class="font-bold text-lg mt-6 mb-2">Data Keluarga Mempelai</h2>

            {{-- AYAH MEMPELAI PRIA --}}
            <div class="mb-2">
                <label class="block font-semibold mb-1">Nama Ayah Mempelai Pria</label>
                <input type="text" name="nama_ayah_pria" class="w-full border rounded p-2" required value="{{$undangan->nama_ayah_pria}}">
            </div>

            {{-- IBU MEMPELAI PRIA --}}
            <div class="mb-2">
                <label class="block font-semibold mb-1">Nama Ibu Mempelai Pria</label>
                <input type="text" name="nama_ibu_pria" class="w-full border rounded p-2" required value="{{$undangan->nama_ibu_pria}}">
            </div>

            {{-- ANAK KE PRIA --}}
            <div class="mb-2">
                <label class="block font-semibold mb-1">Mempelai Pria Anak Ke</label>
                <input type="number" name="pria_anak_ke" class="w-full border rounded p-2" required value="{{$undangan->pria_anak_ke}}">
            </div>

            {{-- AYAH MEMPELAI WANITA --}}
            <div class="mb-2">
                <label class="block font-semibold mb-1">Nama Ayah Mempelai Wanita</label>
                <input type="text" name="nama_ayah_wanita" class="w-full border rounded p-2" required value="{{$undangan->nama_ayah_wanita}}">
            </div>

            {{-- IBU MEMPELAI WANITA --}}
            <div class="mb-2">
                <label class="block font-semibold mb-1">Nama Ibu Mempelai Wanita</label>
                <input type="text" name="nama_ibu_wanita" class="w-full border rounded p-2" required value="{{$undangan->nama_ibu_wanita}}">
            </div>

            {{-- ANAK KE WANITA --}}
            <div class="mb-2">
                <label class="block font-semibold mb-1">Mempelai Wanita Anak Ke</label>
                <input type="number" name="wanita_anak_ke" class="w-full border rounded p-2" required value="{{$undangan->wanita_anak_ke}}">
            </div>


        

            <!-- FOOTER -->
            <div class="flex justify-end gap-3 mt-4">
                <button onclick="closeModal()" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">Close</button>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Save</button>
            </div>
        </div>
    </form>
@endsection
