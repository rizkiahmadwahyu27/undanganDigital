@extends('Layout.app')
@section('content')
    <div class="grid grid-cols-2 h-18 ml-1 mr-1 rounded-2xl bg-white">
        <div class="flex justify-start items-center ml-4">
            <div>
                <button onclick="openModal()">
                    <i data-lucide="user-round-plus" class="w-8 h-8 text-gray-400 hover:text-gray-700"></i>
                </button>
            </div>
        </div>
        <div class="flex justify-end items-center mr-4">
            <input type="text" name="search" id="search" class="rounded-2xl outline-2 outline-gray-200 p-2 hover:outline-gray-500 focus:outline-gray-800" placeholder="cari">
        </div>
    </div>
    <div class="w-full max-w-full overflow-x-auto">
        <div class="max-h-[600px] overflow-y-auto border border-gray-200 rounded-lg">
            <table class="w-full text-left border-collapse">
                <thead class="bg-gray-100 sticky top-0 z-10">
                    <tr>
                        <th class="px-4 py-3 font-semibold text-gray-700 border-b">No</th>
                        <th class="px-4 py-3 font-semibold text-gray-700 border-b">Nama</th>
                        <th class="px-4 py-3 font-semibold text-gray-700 border-b">Kode Templete</th>
                        <th class="px-4 py-3 font-semibold text-gray-700 border-b">Jenis Bayar</th>
                        <th class="px-4 py-3 font-semibold text-gray-700 border-b">Bayar</th>
                        <th class="px-4 py-3 font-semibold text-gray-700 border-b">Aksi</th>
                    </tr>
                </thead>
                @php
                    $no = 1;
                @endphp
                <tbody>
                    @foreach ($data_undangan as $undangan)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-3 border-b">{{$no++}}</td>
                            <td class="px-4 py-3 border-b">{{$undangan->slug}}</td>
                            <td class="px-4 py-3 border-b">{{$undangan->kode_template}}</td>
                            <td class="px-4 py-3 border-b">{{$undangan->jenis_bayar}}</td>
                            <td class="px-4 py-3 border-b">{{$undangan->bayar}}</td>
                            <td class="px-4 py-3 border-b">
                                <div class="flex justify-center items-center">
                                    <button class="px-3 py-1 bg-blue-500 text-white rounded">Edit</button>
                                    <a href="{{route('template_floral', $undangan->slug)}}" target="_blank">
                                        <i data-lucide="send"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- BACKDROP -->
    <div id="modalCreateUndangan" 
        class="fixed inset-0 bg-black/70 hidden z-50 items-center justify-center p-4">
        
        <!-- MODAL BOX -->
        <div id="modalBoxUndangan"
            class="bg-white w-11/12 sm:w-3/4 md:w-1/2 lg:w-1/3 
            rounded-xl shadow-lg p-6 
            transform scale-95 opacity-0 transition-all duration-300
            max-h-[90vh] overflow-y-auto">
            
            <!-- HEADER -->
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-semibold text-gray-700">Tambah Data Undangan</h2>
                <button onclick="closeModal()" class="text-gray-500 hover:text-gray-700 text-xl">&times;</button>
            </div>
            <form action="{{route('admin.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <!-- CONTENT -->
                <div class="text-gray-600">
                    {{-- SLUG --}}
                <div class="mb-4">
                    <label class="font-semibold">Slug</label>
                    <input type="text" name="slug" class="w-full border rounded p-2" required>
                </div>

                {{-- NAMA PRIA --}}
                <div class="mb-4">
                    <label class="font-semibold">Nama Mempelai Pria</label>
                    <input type="text" name="nama_pria" class="w-full border rounded p-2" required>
                </div>

                {{-- NAMA WANITA --}}
                <div class="mb-4">
                    <label class="font-semibold">Nama Mempelai Wanita</label>
                    <input type="text" name="nama_wanita" class="w-full border rounded p-2" required>
                </div>

                {{-- TANGGAL ACARA --}}
                <div class="mb-4">
                    <label class="font-semibold">Tanggal Acara</label>
                    <input type="datetime-local" name="tanggal_acara" class="w-full border rounded p-2" required>
                </div>

                {{-- LOKASI --}}
                <div class="mb-4">
                    <label class="font-semibold">Lokasi Acara</label>
                    <input type="text" name="lokasi" class="w-full border rounded p-2" required>
                </div>

                {{-- MAPS URL --}}
                <div class="mb-4">
                    <label class="font-semibold">Google Maps URL</label>
                    <input type="text" name="maps_url" class="w-full border rounded p-2">
                </div>

                {{-- FOTO COVER --}}
                <div class="mb-4">
                    <label class="font-semibold">Foto Cover (JPG/PNG)</label>
                    <input type="file" name="foto_cover" class="w-full border rounded p-2">
                </div>

                {{-- GALLERY UPLOAD --}}
                <div class="mb-4">
                    <label class="font-semibold">Gallery Foto (Bisa pilih banyak)</label>
                    <input type="file" name="gallery[]" class="w-full border rounded p-2" multiple>
                    <p class="text-sm text-gray-500 mt-1">Tahan tombol Ctrl / Shift untuk memilih banyak foto sekaligus.</p>
                </div>

                {{-- VIDEO URL --}}
                <div class="mb-4">
                    <label class="font-semibold">Video URL</label>
                    <input type="text" name="video_url" class="w-full border rounded p-2">
                </div>

                {{-- REKENING JSON --}}
                <div class="mb-4">
                    <label class="font-semibold">Rekening (JSON)</label>
                    <textarea name="rekening" rows="4" class="w-full border rounded p-2"
                    placeholder='[{"bank":"BCA","nama":"John","nomor":"123"},{"bank":"BRI","nama":"Doe","nomor":"456"}]'></textarea>
                </div>

                {{-- RSVP --}}
                <div class="mb-4">
                    <label class="font-semibold">Aktifkan RSVP?</label>
                    <select name="rsvp_enabled" class="w-full border rounded p-2">
                        <option value="1">Aktif</option>
                        <option value="0">Tidak</option>
                    </select>
                </div>

                {{-- TEMPLATE --}}
                <div class="mb-4">
                    <label class="font-semibold">Template</label>
                    <input type="text" name="template" class="w-full border rounded p-2" placeholder="classic, elegant, floral" required>
                </div>

                {{-- SECTIONS JSON --}}
                <div class="mb-4">
                    <label class="font-semibold">Sections (JSON)</label>
                    <textarea name="sections" rows="4" class="w-full border rounded p-2"
                    placeholder='["header","event","footer","gallery","gift","maps","wishes", "couple"]'></textarea>
                </div>


                {{-- ============================= --}}
                {{--        DATA ORANG TUA         --}}
                {{-- ============================= --}}

                <h2 class="font-bold text-lg mt-6 mb-2">Data Keluarga Mempelai</h2>

                {{-- AYAH MEMPELAI PRIA --}}
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Nama Ayah Mempelai Pria</label>
                    <input type="text" name="nama_ayah_mempelai_pria" class="w-full border rounded p-2">
                </div>

                {{-- IBU MEMPELAI PRIA --}}
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Nama Ibu Mempelai Pria</label>
                    <input type="text" name="nama_ibu_mempelai_pria" class="w-full border rounded p-2">
                </div>

                {{-- ANAK KE PRIA --}}
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Mempelai Pria Anak Ke</label>
                    <input type="number" name="mempelai_pria_anak_ke" class="w-full border rounded p-2">
                </div>

                {{-- AYAH MEMPELAI WANITA --}}
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Nama Ayah Mempelai Wanita</label>
                    <input type="text" name="nama_ayah_mempelai_wanita" class="w-full border rounded p-2">
                </div>

                {{-- IBU MEMPELAI WANITA --}}
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Nama Ibu Mempelai Wanita</label>
                    <input type="text" name="nama_ibu_mempelai_wanita" class="w-full border rounded p-2">
                </div>

                {{-- ANAK KE WANITA --}}
                <div class="mb-4">
                    <label class="block font-semibold mb-1">Mempelai Wanita Anak Ke</label>
                    <input type="number" name="mempelai_wanita_anak_ke" class="w-full border rounded p-2">
                </div>


                </div>

                <!-- FOOTER -->
                <div class="flex justify-end gap-3 mt-4">
                    <button onclick="closeModal()" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">Close</button>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Save</button>
                </div>
            </form>
        </div>
    </div>
    
@endsection
<script>
    function openModal() {
        const backdrop = document.getElementById('modalCreateUndangan');
        const modal = document.getElementById('modalBoxUndangan');
        backdrop.classList.remove('hidden');
        backdrop.classList.add('flex');
        setTimeout(() => {
            modal.classList.remove('scale-95', 'opacity-0');
            modal.classList.add('scale-100', 'opacity-100');
        }, 10);
    }

    function closeModal() {
        const backdrop = document.getElementById('modalCreateUndangan');
        const modal = document.getElementById('modalBoxUndangan');

        modal.classList.add('scale-95', 'opacity-0');
        modal.classList.remove('scale-100', 'opacity-100');

        setTimeout(() => {
            backdrop.classList.add('hidden');
            backdrop.classList.remove('flex');
        }, 200);
    }
</script>