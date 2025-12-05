<!-- WRAPPER UTAMA -->
<div id="coverSection" class="bg-pink-100 py-16 text-center relative flex overflow-hidden w-full h-screen justify-center items-center">

    <!-- TEKS -->
    <div class="z-20">
        <span class="text-3xl font-bold text-pink-700 mb-2 flex justify-center items-center">
            {{ $data->nama_pria }} & {{ $data->nama_wanita }}
        </span>
        <span class="text-lg text-pink-500 mb-4 flex justify-center items-center">
            {{ \Carbon\Carbon::parse($data->tanggal_acara)->translatedFormat('d F Y') }}
        </span>

        <!-- TOMBOL BUKA UNDANGAN -->
        <button id="btnOpenInvitation" 
            class="mt-6 bg-pink-600 text-white px-6 py-3 rounded-full shadow-lg hover:bg-pink-700 transition z-30">
            Buka Undangan
        </button>
    </div>

    <!-- BACKGROUND -->
    <div class="absolute top-0 left-0 w-full h-screen">
        <img src="{{ asset('storage/'.$data->foto_cover) }}"
             class="w-full h-full object-cover opacity-20">
    </div>
</div>
<script>
    // Kunci scroll saat halaman dibuka
    document.body.style.overflow = "hidden";

    // Ketika tombol ditekan
    document.getElementById("btnOpenInvitation").addEventListener("click", function () {
        // Aktifkan scroll
        document.body.style.overflow = "auto";

        // Hilangkan tombol & dua teks cover jika ingin animasi fade out
        document.getElementById("coverSection").classList.add("fade-out");

        // Opsional: hilangkan section cover setelah animasi
        setTimeout(() => {
            document.getElementById("coverSection").style.display = "none";
        }, 800);
    });
</script>
