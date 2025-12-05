@if(!empty($data->gallery))
<div class="max-w-5xl mx-auto py-12">
    <h3 class="text-xl font-semibold text-pink-600 mb-6 text-center">Gallery</h3>
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        @foreach ($data->gallery as $img)
            <img src="{{ asset('storage/'.$img) }}" class="rounded shadow-lg w-full h-64 object-cover">
        @endforeach
    </div>
</div>
@endif
