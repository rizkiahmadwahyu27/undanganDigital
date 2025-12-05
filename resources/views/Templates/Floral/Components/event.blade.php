<div class="bg-white py-12">
    <div class="max-w-2xl mx-auto text-center">
        <h3 class="text-xl font-semibold text-pink-600 mb-4">Acara Pernikahan</h3>
        <p class="text-gray-700">{{ $data->lokasi }}</p>
        <p class="text-gray-700">{{ \Carbon\Carbon::parse($data->tanggal_acara)->translatedFormat('l, d F Y H:i') }}</p>
    </div>
</div>
