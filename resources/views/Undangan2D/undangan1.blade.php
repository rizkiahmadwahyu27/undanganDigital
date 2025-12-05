<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undangan Pernikahan</title>

    <!-- Tailwind -->
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        body {
            background-image: url('/bg/flower-bg.jpg');
            background-size: cover;
            background-attachment: fixed;
        }
    </style>
</head>

<body class="font-serif text-gray-900">

    <!-- BACKGROUND MUSIC -->
    <audio id="bg-music" loop autoplay hidden>
        <source src="/music/wedding-song.mp3" type="audio/mpeg">
    </audio>

    <!-- OPENING -->
    <section class="h-screen flex flex-col justify-center items-center text-center px-4 bg-black/40 text-white">
        <p class="text-xl mb-4">Undangan Pernikahan</p>
        <h1 class="text-4xl font-bold drop-shadow-lg" data-aos="fade-up">
            {{-- {{ $undangan->nama_pria }} & {{ $undangan->nama_wanita }} --}}
            Agus & Siti
        </h1>
        <p class="mt-4 text-lg" data-aos="fade-up" data-aos-delay="200">
            {{ \Carbon\Carbon::parse(date('Y-m-d'))->format('d F Y') }}
        </p>

        <button onclick="document.getElementById('bg-music').play()" 
                class="mt-6 px-6 py-3 bg-white text-gray-800 rounded-full shadow-lg" id="buka_undangan">Buka Undangan</button>
    </section>

    <!-- MEMPELAI -->
    <section id="buka_undangan" class="py-20 bg-white/90 backdrop-blur">
        <div class="max-w-4xl mx-auto text-center px-6">
            <h2 class="text-3xl font-bold mb-8" data-aos="fade-up">Mempelai</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mt-10">
                <div data-aos="fade-right">
                    <img src="/foto/pria.jpg" class="w-48 h-48 rounded-full mx-auto object-cover shadow-lg">
                    <h3 class="text-2xl mt-4">Agus</h3>
                </div>

                <div data-aos="fade-left">
                    <img src="/foto/wanita.jpg" class="w-48 h-48 rounded-full mx-auto object-cover shadow-lg">
                    <h3 class="text-2xl mt-4">Siti</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- ACARA -->
    <section class="py-20 bg-gray-100">
        <div class="max-w-3xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-8" data-aos="fade-up">Detail Acara</h2>

            <div class="bg-white p-6 rounded-xl shadow" data-aos="zoom-in">
                <p class="font-semibold text-xl">Akad Nikah</p>
                <p class="mt-2">Jangga</p>
                <p>20</p>

                <hr class="my-6">

                <p class="font-semibold text-xl">Resepsi</p>
                <p class="mt-2">20</p>
                <p>20</p>
            </div>
        </div>
    </section>

    <!-- GALERI -->
    <section class="py-20 bg-white">
        <div class="max-w-5xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-8" data-aos="fade-up">Galeri</h2>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @foreach($galeri as $foto)
                <img src="{{ $foto->path }}" class="rounded-lg shadow" data-aos="fade-up">
                @endforeach
            </div>
        </div>
    </section>

    <!-- RSVP -->
    <section class="py-20 bg-gray-100">
        <div class="max-w-3xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-8" data-aos="fade-up">Konfirmasi Kehadiran</h2>

            <form method="POST" action="/rsvp" class="bg-white p-6 rounded-xl shadow" data-aos="zoom-in">
                @csrf
                <input type="hidden" name="undangan_id" value="1">

                <label class="block mb-2">Nama Anda</label>
                <input type="text" name="nama" class="w-full p-3 border rounded mb-4">

                <label class="block mb-2">Konfirmasi</label>
                <select name="status" class="w-full p-3 border rounded mb-4">
                    <option value="Hadir">Hadir</option>
                    <option value="Tidak Hadir">Tidak Hadir</option>
                </select>

                <button class="w-full bg-blue-600 text-white py-3 rounded shadow">Kirim</button>
            </form>
        </div>
    </section>

    <!-- UCAPAN -->
    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-8" data-aos="fade-up">Ucapan & Doa</h2>

            <form method="POST" action="/ucapan" class="mb-10 bg-gray-100 p-6 rounded-lg shadow" data-aos="fade-up">
                @csrf
                <input type="hidden" name="undangan_id" value="1">
                
                <input name="nama" placeholder="Nama Anda" class="w-full p-3 border rounded mb-4">
                <textarea name="pesan" placeholder="Tulis ucapan..." class="w-full p-3 border rounded mb-4"></textarea>

                <button class="w-full bg-green-600 text-white py-3 rounded shadow">Kirim Ucapan</button>
            </form>

            <div class="space-y-4">
                @foreach($ucapan as $u)
                <div class="bg-gray-50 p-4 rounded shadow" data-aos="fade-up">
                    <p class="font-bold">{{ $u->nama }}</p>
                    <p>{{ $u->pesan }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="py-6 text-center text-white bg-black/60">
        <p>Terima kasih atas doa dan kehadiran Anda</p>
    </footer>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init();</script>

</body>
</html>
