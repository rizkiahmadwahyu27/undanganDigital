@if(!empty($data->rekening))
<div class="max-w-3xl mx-auto py-12 text-center">
    <h3 class="text-xl font-semibold text-pink-600 mb-4">Kirim Hadiah / Rekening</h3>
    <div class="flex flex-col md:flex-row justify-center gap-8">
        @foreach($data->rekening as $r)
            <div class="bg-white p-4 rounded shadow">
                <p class="font-bold">{{ $r['bank'] }}</p>
                <p>{{ $r['nama'] }}</p>
                <p>{{ $r['nomor'] }}</p>
            </div>
        @endforeach
    </div>
</div>
@endif
