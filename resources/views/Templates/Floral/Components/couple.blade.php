<div class="max-w-3xl mx-auto my-12 text-center">
    <h2 class="text-xl font-semibold text-pink-600 mb-2">Mempelai</h2>
    <div class="flex flex-col md:flex-row justify-center gap-8">
        <div>
            <p class="font-bold text-lg">{{ $data->nama_pria }}</p>
            <p class="text-sm">Putra ke-{{ $data->mempelai_pria_anak_ke }}</p>
            <p class="text-sm">{{ $data->nama_ayah_mempelai_pria }} & {{ $data->nama_ibu_mempelai_pria }}</p>
        </div>
        <div>
            <p class="font-bold text-lg">{{ $data->nama_wanita }}</p>
            <p class="text-sm">Putri ke-{{ $data->mempelai_wanita_anak_ke }}</p>
            <p class="text-sm">{{ $data->nama_ayah_mempelai_wanita }} & {{ $data->nama_ibu_mempelai_wanita }}</p>
        </div>
    </div>
</div>
