@if($data->maps_url)
<div class="max-w-4xl mx-auto py-12">
    <h3 class="text-xl font-semibold text-pink-600 mb-4 text-center">Lokasi Acara</h3>
    <div class="w-full h-80">
        <iframe src="{{ $data->maps_url }}" class="w-full h-full rounded shadow-lg" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>
@endif
