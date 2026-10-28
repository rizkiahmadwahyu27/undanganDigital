<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, viewport-fit=cover">
    <meta name="theme-color" content="#ffffff">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="Undangan">
    <meta property="og:title" content="Undangan {{$undangan->judul_undangan}}">
    <meta property="og:description" content="Kepada Yth. Bapak/Ibu/Saudara/i {{$tamu}}">
    <meta property="og:image" content="{{ asset('storage/'.$images->foto_footer) }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Undangan {{$undangan->judul_undangan}}">
    <meta name="twitter:description" content="Kepada Yth. Bapak/Ibu/Saudara/i {{$tamu}}">
    <meta name="twitter:image" content="{{ asset('storage/'.$images->foto_footer) }}">

    <title>{{ config('app.name', 'Undangan Nikah') }}</title>
    <link rel="manifest" href="/manifest/{{ $undangan->slug }}">
    <link rel="apple-touch-icon" href="/icon-192.png">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <script src="https://unpkg.com/lucide@latest"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
        }
        .fullscreen {
            height: 100vh;
            height: 100dvh;
        }
        .lock-scroll {
        overflow: hidden;
        height: 100vh;
        }
        .bg-cover1 {
            background-image: url('/images/asset_undangan12/bg_hordeng.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }
        .bg-section {
            background-image: url('{{ asset('storage/'.$images->foto_cover) }}');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        .bunga1 {
            background-image: url('/images/asset_undangan12/bunga1.png');
            background-repeat: no-repeat;
            background-size: contain;
            animation-duration: 6s;
            animation-timing-function: ease-in-out;
            animation-iteration-count: infinite;
        }
        .bunga2 {
            background-image: url('/images/asset_undangan12/bunga2.png');
            background-repeat: no-repeat;
            background-size: contain;
            animation-duration: 6s;
            animation-timing-function: ease-in-out;
            animation-iteration-count: infinite;
        }
        .bunga3 {
            background-image: url('/images/asset_undangan12/bunga3.png');
            background-repeat: no-repeat;
            background-size: contain;
            animation-duration: 6s;
            animation-timing-function: ease-in-out;
            animation-iteration-count: infinite;
        }
        .bunga4 {
            background-image: url('/images/asset_undangan12/bunga4.png');
            background-repeat: no-repeat;
            background-size: contain;
            animation-duration: 6s;
            animation-timing-function: ease-in-out;
            animation-iteration-count: infinite;
        }
        .foto_amplop {
            background-image: url('/images/asset_undangan12/foto_amplop.png');
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center; /* Tambahkan ini agar posisi gambar di tengah */
            animation-duration: 6s;
            animation-timing-function: ease-in-out;
            animation-iteration-count: infinite;
        }
        .prangko {
            background-image: url('/images/asset_undangan12/prangko.png');
            background-repeat: no-repeat;
            background-size: contain;
            animation-duration: 6s;
            animation-timing-function: ease-in-out;
            animation-iteration-count: infinite;
        }
        .bingkai1 {
            background-image: url('/images/asset_undangan12/bingkai1.png');
            background-repeat: no-repeat;
            background-size: contain;
            animation-duration: 6s;
            animation-timing-function: ease-in-out;
            animation-iteration-count: infinite;
        }
        .bingkai2 {
            background-image: url('/images/asset_undangan12/bingkai2.png');
            background-repeat: no-repeat;
            /* Tambahkan properti height di bawah ini */
            height: 1200px; /* Nilai ini bisa Anda sesuaikan */
            width: 400px;
            /* Properti tambahan untuk tampilan yang lebih baik */
            background-position: center; /* Memastikan bingkai tetap di tengah */
            background-size: contain; /* Memastikan bingkai menutupi seluruh area tanpa distorsi */

            /* Properti animasi Anda yang sudah ada */
            animation-duration: 6s;
            animation-timing-function: ease-in-out;
            animation-iteration-count: infinite;
        }

        .amplop {
            background-image: url('/images/asset_undangan12/amplop.png');
            background-repeat: no-repeat;
            background-size: contain; /* Memaksa gambar mengikuti tinggi dan lebar kontainer secara penuh */
            animation-duration: 6s;
            animation-timing-function: ease-in-out;
            animation-iteration-count: infinite;
        }
       
        @keyframes scale-lembut {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.07);
            }
        }

        @keyframes fade-scroll {
            from {
                opacity: 0;
                transform: translateY(10px) scale(0.95);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }
        

        .fade-scroll {
            opacity: 0;
        }

        .fade-scroll.animate {
            animation: fade-scroll 1.2s cubic-bezier(0.22, 1, 0.36, 1) forwards;
        }

        .fade-item {
            opacity: 0;
            transform: translateY(40px);
            transition: all 0.8s ease;
        }

        .fade-item.show {
            opacity: 1;
            transform: translateY(0);
        }

        .fade-top {
            background: linear-gradient(to bottom, rgba(255,255,255,0.9), rgba(255,255,255,0));
        }

        .fade-bottom {
            background: linear-gradient(to top, rgba(255,255,255,0.9), rgba(255,255,255,0));
        }
        /* WRAPPER */
        .daun-jatuh-wrapper {
            position: absolute;
            inset: 0;
            overflow: hidden;
        }

        /* DAUN */
        .daun-jatuh {
            position: absolute;
            top: -10%;
            left: var(--posisi);
            width: calc(20px + var(--i) * 1px);
            height: calc(20px + var(--i) * 1px);

            background: url('/images/asset_undangan11/daun_kering.png') no-repeat center;
            background-size: contain;

            opacity: 0.8;

            animation: jatuhDaun var(--durasi) linear infinite;
            
            animation-delay: calc(var(--delay) + 4s);
        }

        /* ANIMASI JATUH + GOYANG */
        @keyframes jatuhDaun {
            0% {
                transform: translateY(0) translateX(0) rotate(0deg);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            50% {
                transform: translateY(50vh) translateX(30px) rotate(180deg);
            }
            100% {
                transform: translateY(1600px) translateX(-30px) rotate(360deg);
                opacity: 0;
            }
        }
        @keyframes spin-180 {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(180deg);
            }
        }

        /* Kelas dasar elemen (tanpa animasi) */
        .prangko {
            /* ... styling dasar prangko Anda ... */
            /* Pastikan ada transisi agar halus saat kelas animasi dilepas */
            transition: transform 0.3s ease; 
        }

        .bg-kartu-atm {
            background-image: url('/images/dompet_digital.png');
            background-repeat: no-repeat;
            background-size: cover;
        }

        /* Kelas yang akan ditambahkan oleh JavaScript saat di-scroll */
        .run-animation {
            /* Jalankan animasi 1 kali (tanpa infinite), pertahankan posisi akhir (forwards) */
            animation: spin-180 4s ease-in-out forwards;
        }

        .icon-mask {
            -webkit-mask-image: url('/images/asset_undangan3.png');
            -webkit-mask-repeat: no-repeat;
            -webkit-mask-position: center;
            -webkit-mask-size: contain;

            mask-image: url('/images/asset_undangan3.png');
            mask-repeat: no-repeat;
            mask-position: center;
            mask-size: contain;
        }

        /* =========================
        DAUN HILANG
        ========================= */
        @keyframes hilangDaun {
            0% { opacity: 1; }
            100% { opacity: 0; transform: scale(0.95); }
        }

        #daun-wrapper {
            animation: hilangDaun 1s ease forwards;
            animation-delay: 0.5s;
            z-index: 999;
            position: absolute;
            inset: 0;
            pointer-events: none;
        }

        /* =========================
        MUNCUL POHON (dari bawah + samping)
        ========================= */
        @keyframes munculPohon {
            0% {
                transform: translateY(120px) translateX(40px) scale(0.8);
                opacity: 0;
            }
            100% {
                transform: translateY(0) translateX(0) scale(1);
                opacity: 0.65;
            }
        }

        .muncul {
            opacity: 0;
            animation: munculPohon 1s cubic-bezier(0.25, 1, 0.5, 1) forwards;
        }

        @keyframes munculPohon1 {
            0% {
                transform: translateY(120px) translateX(40px) scale(0.8);
                opacity: 1;
            }
            100% {
                transform: translateY(0) translateX(0) scale(1);
                opacity: 1.65;
            }
        }

        .muncul2 {
            opacity: 0;
            animation: munculPohon1 1s cubic-bezier(0.25, 1, 0.5, 1) forwards;
        }
        
    </style>

</head>
<body class="overflow-x-hidden lock-scroll bg-gray-300">
    @php
        
        $start = \Carbon\Carbon::parse($undangan->tgl_akad)->format('Ymd\THis');
        $end = \Carbon\Carbon::parse($undangan->tgl_akad)->addHours(2)->format('Ymd\THis'); // tambah 2 jam

        $title = urlencode("The Wedding of {$undangan->nama_mempelai_pria} & {$undangan->nama_mempelai_wanita}");

        $details = urlencode(
            "The Wedding of {$undangan->nama_mempelai_pria} & {$undangan->nama_mempelai_wanita}\n" .
            \Carbon\Carbon::parse($undangan->tgl_akad)->locale('id')->translatedFormat('l, d F Y') . "\n" .
            $undangan->alamat_akad
        );

        $urutan = [
            1 => 'Pertama',
            2 => 'Kedua',
            3 => 'Ketiga',
            4 => 'Keempat',
            5 => 'Kelima',
            6 => 'Keenam',
            7 => 'Ketujuh',
            8 => 'Kedelapan',
            9 => 'Kesembilan',
            10 => 'Kesepuluh',
            11 => 'Kesebelas',
            12 => 'Keduabelas',
            13 => 'Ketigabelas',
            14 => 'Keempatbelas',
            15 => 'Kelimabelas',
            16 => 'Keenambelas',
            17 => 'Ketujuhbelas',
            18 => 'Kedelapanbelas',
            19 => 'Kesembilanbelas',
        ];

        $anak_ke = $urutan[$undangan->pria_anak_ke] ?? '-';

    @endphp
    @php
        $nama_depan_pria = explode(' ', $undangan->nama_mempelai_pria)[0];
        $nama_depan_wanita = explode(' ', $undangan->nama_mempelai_wanita)[0];
    @endphp
    <section id="cover">
        <div class="w-full flex justify-center">
            <div class="relative bg-section w-full md:w-6/12 h-screen overflow-hidden z-10">
                <!-- Tambahkan inset-x-0 agar elemen absolute selebar parent-nya -->
                <!-- Background Blur 50% Bawah -->
                <img src="{{ asset('storage/'.$images->foto_cover) }}"
                    class="absolute bottom-0 w-full h-3/12 object-cover blur-2xl scale-150">
                <div class="absolute bottom-10 inset-x-0 flex flex-col items-center justify-center z-50 px-4">
                    
                    <div class="w-full flex justify-center items-center muncul2 text-center" style="animation-delay: 4.7s;">
                        <h1 class="text-amber-100 font-alex-brush text-5xl">
                            {{$undangan->judul_undangan}}
                        </h1>
                    </div>
            
                    <div class="w-full flex justify-center items-center mt-10 mb-10 text-center">
                        <p class="text-amber-100 text-2xl font-bold muncul2" style="animation-delay: 5.3s;">{{$tamu}}</p>
                    </div>
            
                    <div class="mt-2 w-full flex justify-center items-center muncul2 text-white font-bold z-50" style="animation-delay: 5.9s;">
                        <a href="#isi_undangan" id="btnBuka" class="bg-red-900 px-4 py-3 rounded-lg flex items-center justify-center">
                            <i data-lucide="mail-open" class="w-5 h-5 mr-2"></i>
                            <span>Open Invitation</span>
                        </a>
                    </div>
            
                </div>
            </div>
        </div>
    </section>
    <section id="isi_undangan" class="hidden">
        <div class="w-full flex justify-center items-center">
            <div class="relative bg-cover1 w-full md:w-6/12 h-screen z-0 overflow-hidden">
                <div class="w-full flex justify-center items-center muncul mt-24 fade-scroll text-center" style="animation-delay: 4.7s;">
                    <h1 class="text-amber-100 font-alex-brush text-5xl">
                        Your Invited
                    </h1>
                </div>
                <div class="w-full flex justify-center items-center muncul fade-scroll text-center mt-2" style="animation-delay: 4.7s;">
                    <h1 class="text-amber-100 text-xl">
                        to our wedding
                    </h1>
                </div>
                
                <!-- Wrapper utama diubah menjadi relative agar anak elemen bisa diposisikan absolute terhadapnya -->
                <div class="absolute top-52 muncul w-64 h-52 md:w-80 md:h-80 fade-scroll pointer-events-none inset-x-0 mx-auto flex items-center justify-center z-50 px-4"
                style="animation-delay: 4s;">
                    

                <!-- Bungkus amplop dan bunga dalam satu container yang dimiringkan agar posisinya serasi -->
                    <div class="relative w-full h-full rotate-6 flex items-center justify-center">
                        
                        <!-- Amplop di tengah -->
                        <div class="amplop w-full h-full fade-scroll muncul"></div>
                        
                        <!-- Bunga 1 di pojok kiri bawah -->
                        <div class="bunga1 absolute -bottom-2 -left-20 w-40 h-40 md:w-56 md:h-4w-56 z-10 fade-scroll muncul"></div>
                        
                        <!-- Bunga 2 di pojok kanan atas -->
                        <div class="bunga2 absolute -top-2 -right-20 w-40 h-40 md:w-56 md:h-4w-56 z-10 fade-scroll muncul"></div>

                    </div>
                </div>
            </div>
        </div>
        <div class="w-full flex justify-center items-center">
            <div class="relative bg-cover1 w-full md:w-6/12 h-screen z-0 overflow-hidden"> 
                <!-- Wrapper utama diubah menjadi relative agar anak elemen bisa diposisikan absolute terhadapnya -->
                <div class="absolute top-52 muncul w-64 h-52 md:w-80 md:h-80 fade-scroll pointer-events-none inset-x-0 mx-auto flex items-center justify-center z-50 px-4"
                 style="animation-delay: 4s;">
                    

                    <!-- Bungkus amplop dan bunga dalam satu container -->
                    <div class="relative w-full h-full flex items-center justify-center">
                        
                        <!-- Berikan tinggi (h-64 / h-80) dan lebar (w-64 / w-80) yang jelas -->
                        <div class="foto_amplop fade-scroll muncul flex-shrink-0" style="width: 300px !important; height: 500px !important;"></div>
                        
                        <!-- Prangko -->
                        <div id="prangkoMuter" class="prangko absolute -bottom-10 w-16 h-16 z-10 fade-scroll muncul animate-spin-180"></div>
                        
                    </div>
                    
                </div>
                <div class="relative w-full h-screen flex justify-center items center">
                    <div class="absolute bottom-5 flex items-center justify-center">
                        <div class="text-center">
                            <h1 class="text-amber-100 font-alex-brush text-4xl">
                                {{$undangan->judul_undangan}}
                            </h1>
                            <p class="text-lg text-amber-100">
                                {{ \Carbon\Carbon::parse($undangan->tgl_akad)->locale('id')->translatedFormat('l') }}
                            </p>
                            <p class="text-sm text-amber-100">
                                It was always you, It was you in every lifetime
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="w-full flex justify-center items-center">
            <div class="relative bg-cover1 w-full md:w-6/12 h-screen z-0 overflow-hidden"> 
                <!-- Wrapper utama diubah menjadi relative agar anak elemen bisa diposisikan absolute terhadapnya -->
                <div class="absolute top-52 muncul w-80 h-80 fade-scroll pointer-events-none inset-x-0 mx-auto flex items-center justify-center z-50 px-4"
                 style="animation-delay: 4s;">
                    

                    <!-- Bungkus amplop dan bunga dalam satu container -->
                    <div class="relative w-full h-full flex items-center justify-center">
                        
                        <!-- Berikan tinggi (h-64 / h-80) dan lebar (w-64 / w-80) yang jelas -->
                        <!-- Tambahkan overflow-y-auto dan p-6 -->
                        <div class="bingkai1 fade-scroll muncul flex-shrink-0" style="width: 350px !important; height: 500px !important;"></div>
                        <div class="absolute top-13 w-44 h-72 z-10 fade-scroll muncul">
                            <div class="flex justify-center items-center text-center">
                                <p class="text-[11px] italic leading-relaxed text-red-900 mb-4">
                                "Dan diantara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir."
                                </p>
                            </div>
                            <div class="flex justify-center items-center text-center">
                                <p class="text-[11px] font-bold uppercase tracking-widest text-red-900">
                                    (Q.S Ar Rum : 21)
                                </p>
                            </div>
                        </div>
                        <!-- Prangko -->
                        <div class="bunga3 absolute -bottom-16 -left-14 w-40 h-40 z-10 fade-scroll muncul"></div>
                        
                    </div>
                </div>
                
            </div>
        </div>
        <div class="w-full flex justify-center items-center">
            <div class="relative bg-cover1 w-full md:w-6/12 h-screen z-0 overflow-hidden"> 
                <!-- Wrapper utama diubah menjadi relative agar anak elemen bisa diposisikan absolute terhadapnya -->
                <div class="absolute top-52 muncul w-80 h-96 fade-scroll pointer-events-none inset-x-0 mx-auto flex items-center justify-center z-50 px-4"
                 style="animation-delay: 4s;">
                    

                    <!-- Bungkus amplop dan bunga dalam satu container -->
                    <div class="relative w-full h-full flex items-center justify-center">
                        
                        <!-- Berikan tinggi (h-64 / h-80) dan lebar (w-64 / w-80) yang jelas -->
                        <!-- Tambahkan overflow-y-auto dan p-6 -->
                        <div class="bingkai2 fade-scroll muncul flex-shrink-0" style="width: 350px !important; height: 500px !important;"></div>
                        <div class="absolute top-8 w-44 h-72 z-10 fade-scroll muncul">
                            <div class="flex justify-center items-center text-center text-amber-100">
                                <svg class="w-36 md:56 h-auto fill-current" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="100mm" height="40mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                    viewBox="0 0 10000 4000"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xmlns:xodm="http://www.corel.com/coreldraw/odm/2003">
                                    <defs>
                                    <style type="text/css">
                                    <![CDATA[
                                        .fil0 {
                                            fill: currentColor;
                                        }
                                    ]]>
                                    </style>
                                    </defs>
                                    <g id="Layer_x0020_1">
                                    <metadata id="CorelCorpID_0Corel-Layer"/>
                                    <g id="_2813040700704">
                                    <path class="fil0" d="M5334.18 1059.55c0,4.52 134.8,259.97 134.8,502.57 0,162.31 -106.25,206.27 19.24,371.22 72.69,95.55 206.98,143.24 298.99,37.75 81.31,-93.21 59.47,-281.92 191.02,-344.81 0,137.75 -45.38,296.89 152.07,372.65 87.47,33.55 178.3,20.14 256,-17.16l66.39 -38.15c2.11,-1.61 5.09,-3.95 7.13,-5.6 38.69,-31.35 55.97,-55.89 57.62,-108.57l29.95 0c5.65,48.48 31.95,58.51 59.91,96.24 -84.2,113.61 -179.63,186.38 -113.6,337.72 25.02,57.36 101.86,68.61 173.51,68.61 91.23,0 207.03,-105.99 277.96,-143.74 73.4,-39.07 139.37,-74.62 222.79,-97.57 178.52,-49.13 122.26,8.4 215.21,61.66 71.47,40.94 82.97,27.43 152.76,51.33 61.75,-91.87 -31.48,-87.38 150.67,-54.1 93.85,17.15 213.28,11.33 313.65,11.33 189.4,0 549.72,-65.22 733.91,-128.31 45.83,140.45 285.25,120.35 374.45,0 82.15,39.27 135.42,87.62 219.62,17.78 2.02,-1.68 4.94,-4.04 6.83,-5.82 15.39,-14.45 0.64,9.45 17.53,-19.56 15.02,-25.78 9.61,-12.74 10.64,-45.87 71.3,58.57 99.95,64.16 209.69,64.16 168.45,0 207.74,-206.49 174.58,-294.99 -39.5,-105.42 -235.63,-154.23 -344.76,-214.91 -110.92,-61.67 9.93,-38.38 -61.59,-83.14 -10.14,-6.35 -140.65,-45.72 -157.65,-48.54 -26.86,36.23 -44.94,61.11 -44.94,117.62 54.2,9.01 72.64,23.44 107.45,51.6 2.89,2.34 10.97,9.17 13.93,11.44 2.1,1.61 5.16,3.91 7.31,5.48 89.84,65.66 425.5,182.72 425.5,273.66 0,83.01 -202.83,74.73 -258.44,34.8 -50.43,-36.2 -0.82,-18.95 -71.08,-45.49 -40.47,60.21 -32.64,100.63 -134.8,117.62 -67.72,-32.37 -54.51,-33.8 -74.89,-96.24 -72.41,27.35 -41.15,44.82 -90.31,85.23 -77.81,63.95 -254.18,79.44 -254.18,11.01 0,-101.34 56.97,-95.19 -106.69,-44.17 -76.68,23.91 -140.29,43.09 -228.82,61.27 -227.71,46.78 -570.94,86.99 -804.98,37.91l-274.93 -72.4c-79.98,-27.75 -29.33,-13.26 -90.47,-0.47l-197.66 42.05c-134.2,43.12 -195.67,86.55 -291.95,155.14 -250.49,178.45 -358.05,-7.33 -213.02,-162.79 18.32,-19.64 23.39,-30.62 36.73,-48.62 100.63,16.74 227.87,86.99 290.78,-49.03 79,-170.8 65.32,-220.01 -56.51,-385.83 -57.89,-78.8 -11.18,-52.86 -34.83,-103.07 -16.05,-34.09 -62.9,-62.68 -109.57,-71.58 -60.83,64.85 -34.19,110.47 7.43,176.48l138.5 232.6c15.89,29.82 23.06,28.52 33.8,61.42 -31.83,33.93 -44.92,53.47 -119.82,53.47 -208.86,0 -238.67,-232.04 -275.46,-338 -22.82,-65.73 -52.73,-82.54 -69.03,-132.5 -106.18,20.24 -66.74,131.91 -34.21,184.81 28.69,46.65 24.08,42.3 44.11,96.83 14.52,39.51 35.03,69.22 35.03,114 0,32.8 -103.63,97.56 -145.51,110.27 -116.84,35.43 -251.79,-4.42 -293.89,-85.29 -15.43,-29.64 -10.59,-63.23 -10.16,-99.67 0.96,-79.34 6.27,-149.59 -14.75,-214.02 -109.45,6.5 -179.75,140.69 -203.47,207.61 -21.31,60.14 -58.88,230.81 -170.98,230.81 -69.6,0 -177.21,-129.05 -172.75,-178.76 16.73,-186.59 173.56,-68.55 39.67,-528.21 -10.46,-35.89 -31.68,-64.58 -31.68,-95.01 0,-67.56 108.03,-65.8 -89.87,-160.4 -12.13,16.38 -59.91,78.53 -59.91,96.24z"/>
                                    <path class="fil0" d="M4046.09 1829.45c76.86,1.22 118.51,20.12 149.78,53.46 -88.8,-1.41 -76.75,-19.93 -149.78,-32.07l0 -21.39zm-1452.86 -684.36c0,32.26 47.56,97.05 56.17,141.69l39.94 163.96c42.44,145.27 68.65,272.05 68.65,421.48 0,33.5 -129.13,195.77 -53.99,391.42 9.99,25.99 46.73,75.49 66.25,91.71 139.86,116.21 440.92,76.55 638.15,-8.1 39.67,-17.02 70.94,-23.45 107.17,-41.11 26.53,-12.93 56.9,-32.18 83.51,-47.31 33.44,-19 54.35,-33.18 79.33,-60.98 52.23,-58.14 53.14,-106.58 53.14,-197.31 79.78,-15.21 119.94,-56.96 179.73,-85.55 57.97,27.72 263.38,168.23 361.8,23.05 110.84,-163.51 44.36,-101.88 -62.24,-215.52 287.63,-47.84 224.51,-28.46 478.51,-43.34 229.82,-13.46 268.18,5.14 325.71,-56.18 24.83,-26.48 33.27,-30.78 34.54,-71.57 -281.53,0 -333.47,-1.12 -618.42,-39.68 -64.63,-8.75 -139.03,-24.69 -197.11,-41.06 -96.22,-27.12 -253.74,-91.99 -339.05,-5.73 -25.74,26.03 -42.21,51.18 -43.65,97.16 155.83,0 197.97,-12.35 300.9,20.44 38.52,12.26 49.55,9.64 73.55,33.03 -76.67,26.26 -172.05,33.3 -257.28,115.73 -32.55,31.48 -42.26,62.98 -77.69,94.23 -143.15,126.28 -273.55,6.66 -324.06,-17.49 -137.28,146.36 74.89,171.69 74.89,299.41 0,55.42 -262.79,141.02 -352.76,165.18 -112.63,30.24 -315.9,51.04 -424.3,-6.06 -30.27,-15.95 -21.01,-9.76 -42.04,-34.14 -228.8,-265.31 101.58,-234.41 3.43,-665.42 -12.89,-56.59 -6.67,-90 -25.79,-141.99 -117.83,-320.28 117.01,-180.29 -67.86,-315.12 -40.73,-29.7 -34.5,-38.49 -109.17,-39.68 -12.19,37.34 -29.96,36.01 -29.96,74.85z"/>
                                    <path class="fil0" d="M1320.12 1711.82c90.95,0 104.43,-18.89 191.83,1.77 58.95,13.94 88.43,36.3 167.63,41.01l0 21.38c-95.96,15.96 -222.85,73.5 -361.96,-8.91 -50.43,-29.87 -38.9,-31.27 -102.35,-55.25 -5.21,2.49 -47.85,22.38 -53.18,26.19 -17.3,12.39 -7.71,5.69 -19.52,18.15 -2.48,2.62 -8.72,10.77 -11.06,13.49l-42.07 55.51c-119.78,214.83 66.91,146.85 -167.58,211.84 -236.42,65.53 -359.4,220.17 -500.42,220.17 -113.77,0 -90.72,-107.35 -28.68,-191.56 23.49,-31.88 29.09,-31.11 43.66,-75.76 -53.63,10.22 -65.39,28.99 -109.08,93.21 -151.77,223.05 51.82,361.28 271.73,226.07 3.3,-2.03 12.44,-8.11 15.63,-10.23 2.26,-1.49 5.35,-3.76 7.59,-5.27l38.93 -25.67c129.37,-76.61 286.26,-149.8 464.18,-149.8 50.21,0 67.21,14.56 111.1,27.62 39.26,11.68 74.88,19.41 113.57,25.85 70.1,-104.3 53.54,-108.91 -26.79,-141.27l-28.39 -11.81c-21.79,-9.8 -18.07,-9.24 -45.23,-21.18 -98.5,-43.31 -144.96,-87.25 -79.32,-157.23 192.69,36.73 80.89,181.53 593.81,6.91 286.77,-97.62 398.01,28.9 505.47,-88.24 30.61,-33.36 22.34,-2.79 24.06,-57.68 -165.11,0 -313.84,-25.12 -451.64,-41.12 -164.8,-19.14 -528.18,-193.7 -556.71,17.28 -1.95,14.41 3.82,34.53 34.79,34.53z"/>
                                    <path class="fil0" d="M5259.29 1850.84c-295.28,49.11 -228.24,-63.39 -344.49,-85.55 -16.86,51.69 -29.95,20.33 -29.95,96.24 0,58.83 89.87,92.11 89.87,171.09l-205.01 142.36c-218.46,114.78 -410.65,92.99 -408.96,-99.68 0.5,-56.7 15.75,-61.48 -30.08,-85.45 -31.06,39.46 -14.98,192.37 -14.98,245.93 0,38.29 150.57,222.51 428.42,70.62 297.52,-162.66 246.32,-216.92 320.47,-327.25 142.37,0 177.05,14.81 216.17,-70.22 58.34,-126.81 77.17,-247.47 20.25,-376.58l-75.62 -181.27c-128.49,-292.15 -40.98,-209.96 -40.98,-280.84 0,-19.86 -44.02,-54.81 -65.79,-70.65l-54.03 -25.59c-115.26,60.29 -45.04,116.18 -27.51,190.73l74.02 225.18c52.93,119.96 148.2,347.39 148.2,460.93z"/>
                                    <path class="fil0" d="M2278.7 1145.09l164.96 481.05c34.07,143.3 44.73,68.55 44.73,246.08 0,39.83 -63.27,52.22 -104.04,64.73 -42.49,13.04 -93.36,27.84 -135.45,42.31l-136.15 41.81c-45.74,17.85 -90.7,34.97 -133.06,54.71l-282.59 215.28c-150.48,144.91 -227.2,-4.36 -227.2,-33.89 0,-193.59 61.54,-131.48 74.88,-245.94 -62.37,32.63 -87.2,114.48 -113.85,164.66 -26.75,50.36 -76.79,280.92 117.55,290.33 154.55,7.48 183.86,-129.94 346.81,-226.14 248.67,-146.81 244.03,-94.81 428.49,-175.28 143.54,-62.63 142.81,-49.86 207.36,-172.75 97.39,-185.45 23.51,-276.64 -16.76,-423.34 -23.7,-86.35 -70.93,-162.16 -70.93,-238.07 0,-50.92 93.99,-95.98 -104.84,-171.09 -21.21,22.61 -59.91,46.69 -59.91,85.54z"/>
                                    <path class="fil0" d="M6951.79 1113.01l207.84 674.99c7.98,55.16 1.09,68.07 16.83,116.3l29.96 0c3.11,-99.88 75.34,-121.04 -11.85,-355.25 -13.03,-35.02 -21.48,-50.33 -26.71,-78.69l-79.38 -273.15c-7.8,-55.62 27.16,-115.38 -76.78,-169.74 -29.26,15.31 -59.91,54.03 -59.91,85.54z"/>
                                    <path class="fil0" d="M2083.98 1177.17c-76.41,0 -161.43,26.21 -247.68,47.72l-226.16 63.1c-62.62,13.71 -293.45,76.61 -332.88,104.71 -24.17,17.23 -54.49,59.5 -32.23,75.39 13.86,9.9 355.54,-106.69 487.11,-135.77 25.57,-5.65 34.85,-10.4 52.91,-15.69 35.82,-10.5 88.32,-22.19 121.54,-30.86 87.52,-22.84 168.61,-33.22 177.39,-108.6z"/>
                                    <path class="fil0" d="M780.91 1722.52l-29.95 0c-5.02,-43.05 -33.33,-74.32 -68.12,-101.14 -62.89,-48.47 -97.24,-30.7 -156.55,-27.18 0,103.68 -13.09,106.93 134.8,106.93 47.76,64.45 53.36,103.7 104.84,128.32 79.9,-107.81 41.06,-151.92 89.87,-224.56 81.88,15.61 34.31,35.24 104.85,53.47 54.77,-73.91 -9.93,-106.93 -44.94,-106.93 -46.5,0 -105.08,-2.88 -129.06,57.56 -13.53,34.12 -5.74,77.12 -5.74,113.53z"/>
                                    <path class="fil0" d="M8614.34 1626.28c82.04,0 129.45,-13.02 164.75,21.39 -31.28,5.2 -58.52,12.76 -89.14,21.9 -53.2,15.87 -45.62,2.11 -60.64,42.25 55.47,33.08 195.52,-18.81 231.37,-37.98 30.02,-16.05 7.19,-2.48 31.62,-20.2 11.06,-8.02 26.74,-20.5 36.14,-27.67 7.49,-5.71 20.71,-14.14 27.85,-22.89 20.91,-25.61 11.65,9.39 17.51,-40.96 -120.86,-41.4 -341.96,-85.97 -359.46,64.16z"/>
                                    <path class="fil0" d="M3896.31 1145.09c27.26,0 1.61,-0.67 29.95,10.69 -51.87,55.3 -141.31,44.25 -164.75,106.94 140.31,-23.34 315.4,-71.46 329.51,-192.48 -89.3,-30.59 -343.69,-54.4 -351.1,59.73 -3.22,49.49 81.48,15.12 156.39,15.12z"/>
                                    <path class="fil0" d="M900.73 1294.79l164.76 0c-44,46.92 -83.43,28.29 -104.84,85.55 61.26,0 62.31,4.57 105.04,-10.55 12.51,-4.43 64.65,-34.27 75.7,-42.2 37.62,-26.98 83.2,-69.81 88.86,-118.34 -84.09,-31.76 -109.29,-21.39 -239.65,-21.39 -49.22,0 -85.69,71.12 -89.87,106.93z"/>
                                    <path class="fil0" d="M3162.39 1219.94c-60.55,-31.67 -32.11,-128.32 -164.75,-128.32 -49.64,0 -56.01,30.68 -59.91,64.16 51.42,24.59 18.83,8.32 72.23,23.29 46.05,12.9 31.99,-0.28 58.74,32.91 16.67,20.71 45.51,87.03 48.76,114.89l44.93 0c20.02,-61.33 57.67,-131.25 59.92,-203.16 98.14,18.71 -8.29,24.06 89.86,42.77 55.42,-59.08 14.08,-96.24 -74.89,-96.24 -69.14,0 -74.89,95.11 -74.89,149.7z"/>
                                    <path class="fil0" d="M2353.59 2364.1c-27.01,-22.18 -19.89,-16.24 -35.86,-49.25 -13.53,-27.95 -12.96,-38.65 -35.41,-60.29 -43.09,-41.53 -86.44,-40.61 -153.4,-29.47 -26.87,82.36 -3.02,85.55 119.82,85.55 16.48,44.07 0.79,-0.42 17.46,30.31l57.43 108.7c39.82,-11.48 2.23,3.84 25,-14.23 69.65,-55.27 46.11,-112.52 94.82,-178.25 69.59,13.26 13.25,16.84 89.87,21.39 8.17,-25.02 21.05,-32.18 3.78,-55.78 -39.19,-53.56 -161.35,-48.79 -183.51,141.32z"/>
                                    <path class="fil0" d="M4210.84 1305.49c54.95,-0.88 247.19,-63.33 318.48,-82.74 32.32,-8.8 44.68,-15.56 72.88,-22.81 40.53,-10.43 230.6,-51.58 164.98,-98.43 -29.02,-20.72 -108.29,15.77 -143.14,28.47l-312.3 87.14c-46.92,11.7 -92.45,15.9 -100.9,88.37z"/>
                                    <path class="fil0" d="M3431.99 1102.32c0,116.06 -1.92,71.57 35.63,102.88 166.95,139.18 69.22,188 69.22,282.07 40.07,-20.96 49.32,-41.46 61.82,-84.18 27.67,-94.54 48.36,-153.39 -25.24,-241.34 -31.58,-37.75 -66.16,-80.02 -126.45,-91.51 -10.26,13.04 -14.98,11.44 -14.98,32.08z"/>
                                    <path class="fil0" d="M5918.32 1177.17c81.32,-4.83 11.02,2.38 68.19,-15.48l355.95 -98.74c75.78,-20.29 81.7,-11.85 115.07,-56.87 -67.82,-27.2 -239.22,34.2 -390.99,73.74 -132.12,34.41 -146.5,42.36 -148.22,97.35z"/>
                                    <path class="fil0" d="M3087.51 1775.98c0,48.69 17.03,36.5 73.82,54.23 46.29,14.44 180.8,89.92 180.8,-75.61 -73.82,-12.28 -139.39,-49.29 -209.69,-53.47 -9.51,14.15 -11.53,19.36 -22.7,37.26 -24.78,39.74 -22.23,-6.86 -22.23,37.59z"/>
                                    <path class="fil0" d="M2069.01 1551.43l-29.96 0c-18.36,-56.26 3.22,-70.21 -74.89,-74.85 0,175.11 104.73,128.3 104.85,128.31l119.39 12.52c35.61,-40.27 45.36,-17.96 45.36,-76.68 0,-43.74 -15.17,-60.61 -74.89,-64.15 0,44.99 -6.29,43.19 14.98,74.85 -91.33,-23.6 5.88,-64.44 -104.84,-85.55l0 85.55z"/>
                                    <path class="fil0" d="M4630.23 1925.69c-107.54,114.64 -136.42,149.7 44.93,149.7 60.8,0 135.2,-25.18 149.78,-64.16 -54.52,-18 -83.9,10.69 -164.76,10.69 -57.27,0 -5.45,3.29 -44.93,-10.69 16.94,-45.3 40.51,-33.14 72.28,-78.3 71.76,-102 -177.09,-85.17 -134.79,-25.93 13.27,18.59 37.1,12.58 77.49,18.69z"/>
                                    <path class="fil0" d="M5454 2267.86c89.55,0 202.57,-38.41 274.58,-60.6 140.13,-43.18 211.3,-27.79 219.7,-99.79 -74.41,0 -316.24,70.21 -410.97,91.55 -64.98,14.64 -81.54,12.34 -83.31,68.84z"/>
                                    <path class="fil0" d="M1005.58 2406.87c159.08,26.46 165.4,76.86 237.29,7.78 85.39,-82.07 -87.31,-110.25 -162.4,-114.71 -28.48,38.43 -59.75,60.54 -74.89,106.93z"/>
                                    <path class="fil0" d="M735.98 2406.87c35.31,34.42 117.66,59.58 194.71,64.16 34.46,-36.73 59.91,-44.37 59.91,-106.93 -165.14,-27.47 -157.55,-78.91 -224.35,-0.06l-30.27 42.83z"/>
                                    <path class="fil0" d="M6128.01 1444.5c0,45.02 78.85,72.7 110.9,113.3 36.51,46.24 23.9,108.9 23.9,175.41 68.38,-13.03 39.4,-19.74 50.1,-82.14 19.49,-113.58 -43.83,-241.85 -169.92,-249.34 -9.62,28.67 -14.98,20.15 -14.98,42.77z"/>
                                    <path class="fil0" d="M9557.94 2182.32c0,57.9 128.49,93.19 179.74,96.24 38.77,-41.34 82.71,-93.43 0.33,-128.71 -0.07,-0.03 -74.33,-21.85 -74.54,-21.89 -71.87,-13.93 -105.53,37.81 -105.53,54.36z"/>
                                    <path class="fil0" d="M4884.85 1423.11c-70.43,-36.83 -11.03,-47.85 -89.87,-85.54 -24.43,36.34 -5.01,31.88 0,74.85 -57.4,-10.94 -44.64,-17.35 -59.91,-64.16l-44.93 0c0,56.25 18,91.99 44.93,128.32 62.34,-3.71 50.11,-7.04 127.02,-7.36 14.31,-0.06 -2.29,15.11 45.63,-8.02 26.97,-13.02 44.61,-25.49 43.96,-57.09 -0.78,-38.46 -24.6,-57.04 -66.83,-77.24 -22.64,33.69 0,47.36 0,96.24z"/>
                                    <path class="fil0" d="M3941.24 2150.24c0,139.61 -2.95,69.81 33.99,146.83 17.3,36.08 4.16,45.34 25.92,77.73 50.9,-14.67 44.46,-32.5 32.56,-75.5 -11.08,-40.03 -27.96,-66.86 -32.56,-106.29 180.84,-30.08 94.08,-96.24 29.96,-96.24 -38.17,0 -89.87,23.12 -89.87,53.47z"/>
                                    <path class="fil0" d="M6712.15 1145.09l-44.94 0c1.34,-42.67 6.91,-39.59 29.96,-64.16 38.19,18.26 46.77,18.33 59.91,53.47 -18.27,7.33 -16.02,10.69 -44.93,10.69zm-104.85 10.69c0,48.18 104.68,66.43 172.42,5.48 40.83,-36.74 37.27,-30.9 37.27,-91.02 -68.02,-12.97 -34.64,-28.6 -119.82,-42.77 -50.31,31.22 -89.87,92.08 -89.87,128.31z"/>
                                    <path class="fil0" d="M3012.62 2032.62c0,59.59 -9.69,185.22 122.36,108.74 41.55,-24.07 -27.61,-5.11 42.39,-23.2l0 -42.77 -104.84 0c0,-81.27 13.66,-86.15 14.98,-128.32 -52.1,9.93 -74.89,41.84 -74.89,85.55z"/>
                                    <path class="fil0" d="M6369.93 1230.28c-130.26,-7.25 1.65,-32.38 -107.12,-53.11 0,45 6.3,43.2 -14.97,74.85 -43.32,-22.66 -29.96,-8.71 -29.96,-64.16l-44.93 0c0,168.26 83.58,85.55 119.82,85.55 34.59,0 74.06,21.09 115.23,-14.6 32.84,-28.46 1.74,-55.18 -10.39,-92.33l-44.93 0 17.25 63.8z"/>
                                    <path class="fil0" d="M5678.67 1038.16c0,39.14 0.84,28.91 51.71,17.5 18.31,-4.11 -3.88,-4.31 38.16,-6.81 -49.71,67.08 -54.83,52.69 -59.91,96.24 90.27,-5.36 104.85,-81.69 104.85,-139.01 -40.17,-6.86 -28.24,-10.69 -59.92,-10.69 -31.08,0 -74.89,31.28 -74.89,42.77z"/>
                                    <path class="fil0" d="M3162.39 1583.51c45.12,0 100.01,-12.42 121.96,-43.28 48.58,-68.3 -98.11,19.76 -84.69,-47.87 0.14,-0.65 15.37,-17.72 22.65,-37.17 -27.38,2.14 -50.37,-10.92 -76.56,53.33 -15.56,38.17 -7,43.08 16.64,74.99z"/>
                                    <path class="fil0" d="M6128.01 2193.01c55.5,-9.23 41.88,-17.64 104.85,-21.38 -7.96,24.37 -11.62,24.59 -14.98,53.46 73.02,-13.92 74.89,-44.91 74.89,-85.54 -29.79,-14.24 -41.5,-19.47 -74.89,-32.08 -58.36,22.04 -82.77,24.66 -89.87,85.54z"/>
                                    <path class="fil0" d="M3686.62 1615.59l44.93 0c-6.01,51.54 -23.95,34 -29.96,85.54 109.6,-20.89 107.82,-139.01 44.94,-139.01 -49.14,0 -56.2,21.57 -59.91,53.47z"/>
                                    </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="flex justify-center items-center text-center muncul fade-scroll">
                                <p class="text-[7px] text-amber-100">
                                    Dengan memohon Rahmat dan Ridho Allah SWT, Kami bermaksud mengundang Bapak/Ibu/Saudara/i untuk hadir dalam pernikahan kami
                                </p>
                            </div>
                        </div>
                        <div class="absolute top-24 -left-7 w-24 h-32 z-10">
                            <div class="flex justify-center items-center">
                                <div>
                                    <img src="{{ asset('storage/'.$images->foto_mempelai_wanita) }}"
                                        class="w-full object-cover muncul fade-scroll">
                                </div>
                            </div>
                        </div>
                        <div class="absolute top-32 right-5 w-40 h-20 z-10">
                            <div class="flex justify-center items-center">
                                <div>
                                    <div class="flex justify-center muncul fade-scroll items-center text-balance text-amber-100">
                                        <h1 class="font-alex-brush text-lg">
                                            {{$undangan->nama_mempelai_wanita}}
                                        </h1>
                                    </div>
                                    <div class="flex justify-center muncul fade-scroll items-center text-[7px] text-balance text-amber-100">
                                        @if ($undangan->nama_ayah_wanita != '-' && $undangan->nama_ibu_wanita != '-' && $undangan->anak_ke <= 0)
                                            <p>Putri {{$anak_ke}} dari Bapak {{$undangan->nama_ayah_wanita}} dan Ibu {{$undangan->nama_ibu_wanita}}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="absolute top-1/2 left-1/2 w-5 h-5 z-10 fade-scroll muncul">
                            <div class="flex justify-center items-center">
                                <div>
                                    <div class="flex justify-center items-center text-balance text-amber-100">
                                        <h1 class="font-alex-brush text-4xl">
                                            &
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="absolute bottom-10 -right-2 w-24 h-32 z-10 anim-right">
                            <div class="flex justify-center items-center">
                                <div>
                                    <img src="{{ asset('storage/'.$images->foto_mempelai_pria) }}"
                                        class="w-full object-cover muncul fade-scroll">
                                </div>
                            </div>
                        </div>
                        <div class="absolute bottom-15 left-14 w-40 h-20 z-10">
                            <div class="flex justify-center items-center">
                                <div>
                                    <div class="flex justify-center muncul fade-scroll items-center text-balance text-amber-100">
                                        <h1 class="font-alex-brush text-lg">
                                            {{$undangan->nama_mempelai_pria}}
                                        </h1>
                                    </div>
                                    <div class="flex justify-center muncul fade-scroll text-[7px] items-center text-balance text-amber-100">
                                        @if ($undangan->nama_ayah_pria != '-' && $undangan->nama_ibu_pria != '-' && $undangan->anak_ke <= 0)
                                            <p>Putra {{$anak_ke}} dari Bapak {{$undangan->nama_ayah_pria}} dan Ibu {{$undangan->nama_ibu_pria}}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="w-full flex justify-center items-center">
            <div class="relative bg-cover1 w-full md:w-6/12 h-screen z-0 overflow-hidden"> 
                <!-- Wrapper utama diubah menjadi relative agar anak elemen bisa diposisikan absolute terhadapnya -->
                <div class="flex justify-center items-center w-full h-screen">
                    <div class="bg-red-900 w-[300px] h-[550px] rounded-[400px/700px] text-center p-5">
                        <div class="flex justify-center items-center text-center">
                            <div>
                                <h1 class="font-alex-brush text-xl text-amber-100">
                                    Save The Date
                                </h1>
                                <div class="text-amber-100 text-3xl">
                                    {{ \Carbon\Carbon::parse($undangan->tgl_akad)->locale('id')->translatedFormat('l') }}
                                </div>
                                <div class="text-amber-100 text-6xl">
                                    {{ \Carbon\Carbon::parse($undangan->tgl_akad)->locale('id')->translatedFormat('d') }}
                                </div>
                                <div class="text-amber-100 text-2xl">
                                    {{ \Carbon\Carbon::parse($undangan->tgl_akad)->locale('id')->translatedFormat('F Y') }}
                                </div>
                                <div class="flex justify-center items-center">
                                    <img src="{{url('/images/asset_undangan12/mesjid.png')}}" alt="gambar mesjid" class="w-32 h-32">
                                </div>
                                <div class="flex justify-center items-center">
                                    <!-- countdown container -->
                                   <div>
                                       <div id="countdown" class="mt-2 fade-scroll flex justify-center items-center text-xl md:text-3xl font-bold"></div>
                                           <div class="grid grid-cols-4 gap-4">
                                               <div class="opacity-0 fade-scroll  scale-anim w-18 h-18 p-1 font-bold text-amber-100 rounded-tl-xl rounded-br-xl flex justify-center items-center">
                                                   <div class="flex justify-center items-center">
                                                       <div>
                                                           <p id="days">0</p>
                                                           <p>Hari</p>
                                                       </div>
                                                   </div>
                                               </div>
                                               <div class="opacity-0 fade-scroll  scale-anim w-18 h-18 p-1 font-bold text-amber-100 rounded-tl-xl rounded-br-xl flex justify-center items-center">
                                                   <div class="flex justify-center items-center">
                                                       <div>
                                                           <p id="hours">0</p>
                                                           <p>Jam</p>
                                                       </div>
                                                   </div>
                                               </div>
                                               <div class="opacity-0 fade-scroll  scale-anim w-18 h-18 p-1 font-bold text-amber-100 rounded-tl-xl rounded-br-xl flex justify-center items-center">
                                                   <div class="flex justify-center items-center">
                                                       <div>
                                                           <p id="minutes">0</p>
                                                           <p>Menit</p>
                                                       </div>
                                                   </div>
                                               </div>
                                               <div class="opacity-0 fade-scroll  scale-anim w-18 h-18 p-1 font-bold text-amber-100 rounded-tl-xl rounded-br-xl flex justify-center items-center">
                                                   <div class="flex justify-center items-center">
                                                       <div>
                                                           <p id="seconds">0</p>
                                                           <p>Detik</p>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                   </div>
                               </div>
                               <div class="flex justify-center items-center mt-10">
                                   <div class="opacity-0 fade-scroll bg-amber-100 rounded-xl p-3 text-red-900 font-bold">
                                       <a class="flex justify-center items-center"
                                       href="https://www.google.com/calendar/render?action=TEMPLATE
                                       &text={{ $title }}
                                       &details={{ $details }}
                                       &dates={{ $start }}/{{ $end }}
                                       &location={{ urlencode($undangan->alamat_akad) }}
                                       &ctz=Asia/Jakarta"
                                       target="_blank"
                                       rel="noopener noreferrer">
       
                                           <i data-lucide="calendar-fold" class="mr-2"></i>
                                           Save to Calendar
                                       </a>
                                   </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full flex justify-center items-center">
            <div class="relative bg-cover1 w-full md:w-6/12 h-screen z-0 overflow-hidden"> 
                <!-- Wrapper utama diubah menjadi relative agar anak elemen bisa diposisikan absolute terhadapnya -->
                <div class="flex justify-center items-center w-full h-screen">
                    <div class="bg-red-900 w-[300px] h-[550px] rounded-[400px/700px] text-center p-5">
                        <div class="flex justify-center items-center text-center">
                            <div>
                                <div class="fade-scroll text-amber-100 mt-10">
                                    <h1 class="font-alex-brush text-2xl">Akad Nikah</h1>
                                    <div class="grid grid-cols-3 gap-0 mt-1 mb-1">
                                        <div class="flex justify-center items-center">
                                            <p class="text-[14px]">{{ \Carbon\Carbon::parse($undangan->tgl_akad)->locale('id')->translatedFormat('l') }}</p>
                                        </div>
                                        <div class="border-l-2 border-r-2 border-amber-100 mr-1 ml-1">
                                            <div class="flex justify-center items-center">
                                                <p class="text-[36px] font-extrabold">{{ \Carbon\Carbon::parse($undangan->tgl_akad)->locale('id')->translatedFormat('d') }}</p>
                                            </div>
                                            <div class="flex justify-center items-center">
                                                <p class="text-[14px]">{{ \Carbon\Carbon::parse($undangan->tgl_akad)->locale('id')->translatedFormat('Y') }}</p>
                                            </div>
                                        </div>
                                        <div class="flex justify-center items-center">
                                            <p class="text-[14px]">{{ \Carbon\Carbon::parse($undangan->tgl_akad)->locale('id')->translatedFormat('F') }}</p>
                                        </div>
                                    </div>
                                    <p class="text-[12px]">Pukul {{ \Carbon\Carbon::parse($undangan->tgl_akad)->locale('id')->translatedFormat('H:i') }} {{$timezone}} - Pukul {{ \Carbon\Carbon::parse($undangan->tgl_resepsi)->locale('id')->translatedFormat('H:i') }} {{$timezone}}</p>
                                    <p class="text-[8px]">Tempat : {{$undangan->alamat_akad}}</p>
                                    
                                    <div class="flex justify-center items-center">
                                        <a href="{{$undangan->maps_akad}}" class="mt-1 px-0.5 py-1.5 w-8/12 rounded-xl bg-amber-100 flex justify-center items-center">
                                            <i data-lucide="map-minus" class="w-5 h-5 mr-2 text-red-900"></i>
                                            <span class="text-red-900">Buka Google Lokasi</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="fade-scroll text-amber-100 mt-3">
                                    <h1 class="font-alex-brush text-2xl">Resepsi</h1>
                                    <div class="grid grid-cols-3 gap-0 mt-1 mb-1">
                                        <div class="flex justify-center items-center">
                                            <p class="text-[14px]">{{ \Carbon\Carbon::parse($undangan->tgl_resepsi)->locale('id')->translatedFormat('l') }}</p>
                                        </div>
                                        <div class="border-l-2 border-r-2 border-amber-100 mr-1 ml-1">
                                            <div class="flex justify-center items-center">
                                                <p class="text-[36px]">{{ \Carbon\Carbon::parse($undangan->tgl_resepsi)->locale('id')->translatedFormat('d') }}</p>
                                            </div>
                                            <div class="flex justify-center items-center">
                                                <p class="text-[14px]">{{ \Carbon\Carbon::parse($undangan->tgl_resepsi)->locale('id')->translatedFormat('Y') }}</p>
                                            </div>
                                        </div>
                                        <div class="flex justify-center items-center">
                                            <p class="text-[14px]">{{ \Carbon\Carbon::parse($undangan->tgl_resepsi)->locale('id')->translatedFormat('F') }}</p>
                                        </div>
                                    </div>
                                    <p class="text-[12px] md:text-lg">Pukul {{ \Carbon\Carbon::parse($undangan->tgl_resepsi)->locale('id')->translatedFormat('H:i') }} {{$timezone}} - Pukul {{ \Carbon\Carbon::parse($undangan->tgl_resepsi)->locale('id')->translatedFormat('H:i') }} {{$timezone}}</p>
                                    <p class="text-[8px]">Tempat : {{$undangan->alamat_resepsi}}</p>
                                    
                                    <div class="flex justify-center items-center">
                                        <a href="{{$undangan->maps_resepsi}}" class="mt-1 px-0.5 py-1.5 w-8/12 rounded-xl bg-amber-100 flex justify-center items-center">
                                            <i data-lucide="map-minus" class="w-5 h-5 mr-2 text-red-900"></i>
                                            <span class="text-red-900">Buka Google Lokasi</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full flex justify-center items-center">
            <div class="relative bg-cover1 w-full h-[900px] overflow-hidden z-10">
               
                
                <div class="flex justify-center items-center w-full p-8 h-screen z-50">
                    <div class="overflow-y-auto max-h-screen min-h-0 w-full max-w-sm">
                        <h1 class="text-center text-amber-100 font-alex-brush text-3xl fade-scroll mb-4">Our Story</h1>
                        <div class="fade-scroll">
                            <img src="{{url('/images/asset_undangan12/Foto love story.jpeg')}}" alt="foto story">
                        </div>
                        <div class="flex justify-center fade-scroll items-center text-center mb-2 text-amber-100 border-b-2 border-amber-100">
                            @if ($stories->story_1 != "-")
                                <p>{{$stories->story_1}}</p>
                            @endif
                        </div>
                        <div class="flex justify-center fade-scroll items-center text-center mb-2 text-amber-100 border-b-2 border-amber-100">
                            @if ($stories->story_2 != "-")
                                <p>{{$stories->story_2}}</p>
                            @endif
                        </div>
                        <div class="flex justify-center fade-scroll items-center text-center mb-2 text-amber-100 border-b-2 border-amber-100">
                            @if ($stories->story_3 != "-")
                                <p>{{$stories->story_3}}</p>
                            @endif
                        </div>
                        <div class="flex justify-center fade-scroll items-center text-center mb-2 text-amber-100 border-b-2 border-amber-100">
                            @if ($stories->story_4 != "-")
                                <p>{{$stories->story_4}}</p>
                            @endif
                        </div>
                        <div class="flex justify-center fade-scroll items-center text-center mb-2 text-amber-100 border-b-2 border-amber-100">
                            @if ($stories->story_5 != "-")
                                <p>{{$stories->story_5}}</p>
                            @endif
                        </div>
                        <div class="flex justify-center fade-scroll items-center text-center mb-2 text-amber-100 border-b-2 border-amber-100">
                            @if ($stories->story_6 != "-")
                                <p>{{$stories->story_6}}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full flex justify-center">
            <!-- Ubah h-screen & overflow-hidden menjadi min-h-screen & tambahkan pb-10 -->
            <div class="relative bg-cover1 w-full md:w-6/12 min-h-screen z-10 pb-12">
        
                <!-- TITLE -->
                <div class="flex justify-center items-center pt-5 mb-5 text-amber-100 fade-scroll">
                    <h1 class="font-alex-brush text-3xl">
                        Our Gallery
                    </h1>
                </div>
        
                <!-- GRID -->
                <div class="grid grid-cols-3 gap-2 mt-8 px-4 mb-8">
                    @foreach ($gallery as $img)
                        <div class="fade-scroll">
                            <img src="{{ asset('storage/'.$img['path']) }}"
                                 class="w-full aspect-square object-cover rounded-xl">
                        </div>
                    @endforeach
                </div>
        
            </div>
        </div>
        <div class="flex justify-center fade-scroll items-center text-amber-100">
            <div class="bg-red-900 w-full md:w-6/12">
                <div class="flex justify-center items-center"><i data-lucide="gift" class="w-10 h-10 mb-2 mt-10"></i></div>
                <div class="flex justify-center items-center"><h1 class="font-alex-brush text-3xl">Wedding Gift</h1></div>
            </div>
        </div>
        @php
            $dompet_digital = json_decode($undangan->dompet_digital, true);
            // dd('dompet_digital');
        @endphp
        <div class="w-full flex justify-center items-center">  
            <div class="grid grid-cols-1 md:grid-cols-2 w-full md:w-6/12 gap-2 bg-red-900 p-4">
                @foreach ($dompet_digital ?? [] as $dompet)
                    <div class="w-full h-56 fade-scroll md:h-80 relative max-h-56 md:max-h-80 rounded-lg bg-kartu-atm">
                        <div class="absolute top-7 md:top-[70px] right-0 mr-5">
                            <h1 class="text-amber-100 text-xl font-bold md:-mt-5">{{ $dompet['nama_bank'] }}</h1>
                        </div>
                        <div class="absolute bottom-7 left-0 ml-4 mb-2">
                            <h1 class="norek-text text-[18px] md:text-lg text-amber-100 font-semibold leading-tight">
                                {{$dompet['no_rek']}}
                            </h1>
                            <h1 class="md:text-lg text-[18px] text-amber-100 font-semibold leading-tight">{{$dompet['an_nama']}}</h1>
                            <p class="text-xs status-message"></p>
                        </div>
                        <div class="absolute bottom-0 right-0 mr-4 mb-2">
                            <button onclick="copyNorek(this)" class="bg-amber-100 mt-2 flex opacity-50 p-[3px] rounded-lg text-amber-900">
                                <i data-lucide="copy" class="w-5 h-5 mr-2 text-red-900"></i>Copy
                            </button>
                        </div>
                    </div>
                @endforeach
                
                <div class="w-full fade-scroll md:h-auto bg-amber-100 shadow-2xl p-4 rounded-lg">

                    <!-- ICON -->
                    <div class="flex justify-center items-center text-center mt-2">
                        <i data-lucide="gift" class="w-10 h-10 mb-2 mt-2 text-red-900"></i>
                    </div>

                    <!-- TITLE -->
                    <div class="flex justify-center items-center text-center mt-1 mb-2 text-red-900">
                        <h1 class="text-xl font-bold">Kirim Hadiah</h1>
                    </div>

                    <!-- DATA -->
                    <div id="data-alamat" class="space-y-2 text-sm text-red-900">

                        <div class="flex leading-tight">
                            <span class="w-16">Nama</span>
                            <span class="w-5">:</span>
                            <span class="flex-1 break-words">
                                {{$undangan->nama_mempelai_wanita}}
                            </span>
                        </div>

                        <div class="flex leading-tight">
                            <span class="w-16">Alamat</span>
                            <span class="w-5">:</span>
                            <span class="flex-1 break-words">
                                {{$undangan->alamat_kirim_hadiah}}
                            </span>
                        </div>

                    </div>

                    <!-- BUTTON -->
                    <div class="mt-4">
                        <button onclick="copy_alamat()"
                            class="bg-red-900 flex items-center p-2 rounded-lg text-amber-100">
                            <i data-lucide="copy" class="w-5 h-5 mr-2"></i>
                            Copy
                        </button>
                    </div>

                </div>
            </div>
        </div>
        <div class="flex justify-center items-center">
            <div class="w-full md:w-6/12 bg-red-900">
                <!-- Body Content Area: Scrollable secara mandiri -->
                <div class="overflow-y-auto p-5 space-y-6 min-h-0">
                    
                    <!-- SECTION 1: FORM KIRIM PESAN / UCAPAN -->
                    <div class="bg-amber-100 border border-red-900 p-5 rounded-xl space-y-4">
                        <div class="text-center">
                            <h2 class="text-red-900 font-alex-brush text-3xl leading-tight">Kirim Ucapan</h2>
                            <p class="text-xs text-red-900">Berikan doa restu terbaik Anda untuk kedua mempelai</p>
                        </div>

                        <form action="{{ route('kirim_pesan') }}" method="post" class="space-y-4">
                            @csrf
                            <input type="hidden" name="slug" value="{{ $undangan->slug }}">
                            <input type="hidden" name="kode_pesan" value="{{ $undangan->kode_pesan }}">
                            
                            <div>
                                <label class="block text-xs font-semibold text-red-900 uppercase tracking-wider mb-1">Nama Anda</label>
                                <input type="text" name="nama" required placeholder="Masukkan nama lengkap"
                                    class="w-full bg-amber-100 border border-red-900 focus:border-red-950 focus:ring-2 focus:ring-red-100 outline-none py-2 px-3.5 rounded-lg text-sm transition-all text-red-900">
                            </div>
                            <div>
                                <label>Konfirmasi</label>
                                <select name="konfirmasi_kehadiran" class="w-full bg-amber-100 border border-red-900 focus:border-red-950 focus:ring-2 focus:ring-red-100 outline-none py-2 px-3.5 rounded-lg text-sm transition-all text-red-900">
                                    <option>Ya, Saya Akan Hadir</option>
                                    <option>Maaf, Saya Tidak Bisa Hadir</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-xs font-semibold text-red-900 uppercase tracking-wider mb-1">Pesan / Doa</label>
                                <textarea name="pesan" rows="3" required placeholder="Tuliskan ucapan & doa restu..."
                                        class="w-full bg-amber-100 border border-red-900 focus:border-red-950 focus:ring-2 focus:ring-red-100 outline-none py-2 px-3.5 rounded-lg text-sm transition-all text-red-900 resize-none"></textarea>
                            </div>

                            <div class="flex justify-end">
                                <button type="submit" class="w-full sm:w-auto px-6 py-2 rounded-lg bg-red-900 hover:bg-red-950 text-amber-100 font-medium text-sm transition-all shadow-sm active:scale-95 cursor-pointer">
                                    Kirim Pesan
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- SECTION 2: DAFTAR UCAPAN / FEEDBACK TAMU -->
                    <div class="space-y-3">
                        <h3 class="text-xs font-bold text-amber-100 uppercase tracking-widest px-1">Ucapan dari Tamu ({{ count($pesan) }})</h3>
                        
                        <div class="space-y-3">
                            @foreach ($pesan as $message)
                                {{-- Cari data kehadiran yang memiliki nama yang sama dengan nama pengirim pesan --}}
                                @php
                                    $hadir = $kehadiran->firstWhere('nama', $message->nama);
                                @endphp

                                <div class="relative flex items-start gap-3 p-4 bg-red-900 text-amber-100 rounded-xl shadow-sm">
                                    
                                    <div class="flex-shrink-0 flex justify-center items-center p-1 bg-white/10 rounded-full w-10 h-10">
                                        <i data-lucide="circle-user-round" class="w-7 h-7 text-amber-100"></i>
                                    </div>
                                    
                                    <div class="flex-1 min-w-0 space-y-1 pr-6"> 
                                        <p class="text-sm font-bold tracking-wide border-b border-white/10 pb-1 uppercase text-amber-100">
                                            {{ $message->nama }}
                                        </p>
                                        <p class="text-xs md:text-sm text-amber-100/90 leading-relaxed break-words">
                                            {{ $message->pesan }}
                                        </p>
                                    </div>

                                    @if ($hadir)
                                        <div class="absolute top-3 right-3">
                                            @if ($hadir->konfirmasi_kehadiran == 'Ya, Saya Akan Hadir')
                                                <span class="inline-flex items-center justify-center w-6 h-6 rounded-full bg-emerald-500/20 text-emerald-400 border border-emerald-500/30 shadow-sm" title="Hadir">
                                                    <i data-lucide="check" class="w-4 h-4 stroke-[3]"></i>
                                                </span>
                                            @else
                                                <span class="inline-flex items-center justify-center w-6 h-6 rounded-full bg-rose-500/20 text-rose-400 border border-rose-500/30 shadow-sm" title="Tidak Hadir">
                                                    <i data-lucide="x" class="w-4 h-4 stroke-[3]"></i>
                                                </span>
                                            @endif
                                        </div>
                                    @endif

                                </div>
                            @endforeach
                        </div>

                        <div class="pt-2 px-1 text-sm">
                            {{ $pesan->links() }}
                        </div>

                        <div class="grid grid-cols-2 gap-3 pt-4 border-t border-gray-200/20 mt-4 px-1">
                            <div class="flex items-center justify-between p-3 bg-emerald-500/10 border border-emerald-500/20 rounded-xl">
                                <div class="flex items-center gap-2">
                                    <span class="flex items-center justify-center w-7 h-7 rounded-full bg-emerald-500 text-amber-100 shadow-sm">
                                        <i data-lucide="check" class="w-4 h-4 stroke-[3]"></i>
                                    </span>
                                    <span class="text-xs md:text-sm font-medium text-gray-300">Hadir</span>
                                </div>
                                <span class="text-base font-bold text-emerald-400">
                                    {{ $kehadiran->where('konfirmasi_kehadiran', 'Ya, Saya Akan Hadir')->count() }}
                                </span>
                            </div>

                            <div class="flex items-center justify-between p-3 bg-rose-500/10 border border-rose-500/20 rounded-xl">
                                <div class="flex items-center gap-2">
                                    <span class="flex items-center justify-center w-7 h-7 rounded-full bg-rose-500 text-amber-100 shadow-sm">
                                        <i data-lucide="x" class="w-4 h-4 stroke-[3]"></i>
                                    </span>
                                    <span class="text-xs md:text-sm font-medium text-gray-300">Absen</span>
                                </div>
                                <span class="text-base font-bold text-rose-400">
                                    {{ $kehadiran->where('konfirmasi_kehadiran', '!=', 'Ya, Saya Akan Hadir')->count() }}
                                </span>
                            </div>
                        </div>
                        
                    </div>

                </div>
            </div>
        </div>
        <div class="flex justify-center items-center">
            <div class="relative w-full md:w-6/12 h-screen flex items-center justify-center overflow-hidden">
        
                <!-- Background Normal -->
                <img src="{{ asset('storage/'.$images->foto_footer) }}"
                    class="absolute inset-0 w-full h-full object-cover fade-scroll">
        
                <!-- Background Blur 50% Bawah -->
                <img src="{{ asset('storage/'.$images->foto_footer) }}"
                    class="absolute bottom-0 w-full h-3/12 object-cover blur-2xl scale-150">
        
                <!-- Foto utama / Konten -->
                <!-- UBAH DI SINI: ganti justify-center menjadi justify-end dan tambahkan pb-16 -->
                <div class="relative z-10 flex flex-col justify-end items-center 
                            w-full h-full text-center px-6 pb-16">
                    
                    <!-- Hapus -bottom-40 karena sudah diatur oleh justify-end -->
                    <div class="max-w-md fade-scroll text-amber-100">
                        <span>
                            Atas kehadiran dan doa restu dari Bapak/Ibu/Saudara/I sekalian,
                            kami mengucapkan Terima Kasih.
                        </span>
                        <p class="mt-2 font-alex-brush text-xl">Assalamualaikum Wr. Wb.</p>
                        <p class="mt-4">Kami yang berbahagia</p>
                        <p class="font-semibold font-alex-brush text-3xl"> {{$undangan->judul_undangan}}</p>
                    </div>
        
                </div>
            </div>
        </div>
        <div class="flex justify-center items-center">
            <footer class="bg-red-900 text-center py-10 px-5 shadow-inner w-full md:w-8/12">
    
                <!-- Made With Love -->
                <div class="text-amber-100 text-sm md:text-base flex justify-center items-center gap-2 mb-3">
                    <span>Made With</span>
                    <span class="text-amber-100 text-lg animate-pulse">❤</span>
                    <span>By</span>
                </div>

                <!-- Logo -->
                <div class="w-full flex justify-center items-center">
                    <div class="w-10 h-10 rounded-full overflow-hidden 
                                ring-8 ring-white/40 shadow-2xl">
                        <img src="{{ asset('/images/icon.png') }}"
                            class="w-full h-full object-cover object-center">
                    </div>
                </div>

                <!-- Nama Brand -->
                <h2 class="mt-2 text-lg md:text-xl font-semibold text-amber-100">
                    Invitin-Aja
                </h2>

                <!-- Tagline -->
                <p class="text-amber-100 text-sm md:text-base mt-2">
                    Percayakan undangan anda kepada kami
                </p>

                <!-- Button WhatsApp -->
                <div class="mt-6">
                    <a href="https://wa.me/62895610143232" target="_blank"
                    class="inline-block bg-amber-100 hover:bg-amber-200 text-red-900 text-sm md:text-base px-6 py-3 rounded-full shadow-md transition duration-300">
                        Order via WhatsApp
                    </a>
                </div>

            </footer>
        </div>
    {{-- music --}}
    <!-- Audio -->
    <audio id="bgMusic" loop>
        <source src="{{ asset('storage/soundtrack/'.$images->soundtrack) }}" type="audio/mpeg">
    </audio>
    <div id="imageModal" class="fixed inset-0 bg-black/90 hidden justify-center items-center z-50">
        <span class="absolute top-5 right-5 text-amber-100 text-3xl cursor-pointer" onclick="tutupModal()">&times;</span>
        
        <img id="modalImage" class="max-w-[90%] max-h-[90%] rounded-lg shadow-lg">
    </div>
    <!-- Control Music -->
    <div class="fixed bottom-50 right-1 z-50">
        <button id="musicBtn"
            class="flex items-center rounded-full bg-white/80 p-1 shadow-lg hover:scale-105 transition">

            <!-- Icon -->
            <svg id="musicIcon" xmlns="http://www.w3.org/2000/svg"
                class="w-6 h-6 text-amber-600" fill="currentColor"
                viewBox="0 0 24 24">
                <path d="M8 5v14l11-7z"/>
            </svg>

        </button>
    </div>

    </section>
   <!-- BACKDROP -->
    <div id="modalKehadiran" 
        class="fixed inset-0 bg-black/70 hidden z-50 items-center justify-center p-4">
        
        <!-- MODAL BOX -->
        <div id="modalBoxKehadiran"
            class="bg-white w-11/12 sm:w-3/4 md:w-1/2 lg:w-1/3 
            rounded-xl shadow-lg p-6 
            transform scale-95 opacity-0 transition-all duration-300
            max-h-[90vh] overflow-y-auto">
            
            <!-- HEADER -->
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-semibold text-amber-700">Konfirmasi Kehadiran</h2>
                <button onclick="closeModal()" class="text-amber-500 hover:text-amber-700 text-xl">&times;</button>
            </div>
            <form action="{{route('konfirmasi_kehadiran')}}" method="post">
                @csrf
                <div class="w-full p-2">
                    <label>Nama</label>
                    <input type="hidden" name="slug" value="{{$undangan->slug}}" class="w-full bg-gray-200 border-none decoration-0 hover:border-2 hover:border-gray-500 py-1.5 px-3 rounded-lg">
                    <input type="hidden" name="kode_pesan" value="{{$undangan->kode_pesan}}" class="w-full bg-gray-200 border-none decoration-0 hover:border-2 hover:border-gray-500 py-1.5 px-3 rounded-lg">
                    <input type="text" name="nama" class="w-full bg-gray-200 border-none decoration-0 hover:border-2 hover:border-gray-500 py-1.5 px-3 rounded-lg">
                </div>
                <div class="w-full p-2">
                    <label>Konfirmasi</label>
                    <select name="konfirmasi_kehadiran" class="w-full bg-gray-200 border-none decoration-0 hover:border-2 hover:border-gray-500 py-1.5 px-3 rounded-lg">
                        <option>Ya, Saya Akan Hadir</option>
                        <option>Maaf, Saya Tidak Bisa Hadirr</option>
                    </select>
                </div>
                <div class="w-full p-2">
                    <button type="submit" class="py-1.5 px-4 rounded-xl bg-gray-300 hover:bg-gray-500 text-amber-100">Kirim</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        ScrollReveal().reveal('.sr-item', {
            distance: '40px',
            duration: 1000,
            easing: 'ease-in-out',
            origin: 'bottom',
            interval: 200, // 🔥 ini bikin muncul bergantian otomatis
            opacity: 0,
            reset: false
        });
    </script>
    <script>
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/sw.js', {
            scope: '/undangan/'
        });
    }
    </script>
   <script>
        const btnBuka = document.getElementById('btnBuka');
        const isiUndangan = document.getElementById('isi_undangan');

        btnBuka.addEventListener('click', function (e) {
            e.preventDefault();
            document.body.classList.remove('lock-scroll');
            isiUndangan.classList.remove('hidden');
            isiUndangan.scrollIntoView({ behavior: 'smooth' });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {

            const music = document.getElementById('bgMusic');
            const btn = document.getElementById('musicBtn');
            const icon = document.getElementById('musicIcon');
            const btnBuka = document.getElementById('btnBuka');

            // tombol buka undangan
            if (btnBuka) {
                btnBuka.addEventListener('click', function () {
                    music.play();
                    icon.innerHTML = '<path d="M6 5h4v14H6zm8 0h4v14h-4z"/>';
                });
            }

            // tombol play / pause
            if (btn) {
                btn.addEventListener('click', function () {
                    if (music.paused) {
                        music.play();
                        icon.innerHTML = '<path d="M6 5h4v14H6zm8 0h4v14h-4z"/>';
                    } else {
                        music.pause();
                        icon.innerHTML = '<path d="M8 5v14l11-7z"/>';
                    }
                });
            }

        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const targetElement = document.getElementById('prangkoMuter');

            // Opsi untuk Observer
            const options = {
                root: null, // Menggunakan viewport
                rootMargin: '0px',
                threshold: 0.5 // Memicu saat 50% elemen terlihat
            };

            // Fungsi Callback
            const callback = (entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Saat elemen masuk area pandang, tambahkan kelas animasi
                        targetElement.classList.add('run-animation');
                        
                        // Opsional: Jika ingin animasi JANGAN diulang lagi (hanya sekali seumur hidup)
                        // observer.unobserve(targetElement); 
                    } else {
                        // Saat elemen keluar dari area pandang, hapus kelas untuk reset
                        targetElement.classList.remove('run-animation');
                    }
                });
            };

            // Buat Observer
            const observer = new IntersectionObserver(callback, options);

            // Mulai mengamati elemen
            observer.observe(targetElement);
        });
    </script>
    <script>
        const swiper = new Swiper(".mySwiper", {
            loop: true,

            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },

            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },

            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            effect: "slide", // bisa ganti 'fade'
        });
    </script>

    <script>
        function copyNorek(btn) {
            // Cari container kartu terdekat dari tombol yang diklik
            const card = btn.closest('.bg-kartu-atm');
            
            // Ambil nomor rekening dari elemen dengan class 'norek-text' di dalam kartu tersebut
            const norek = card.querySelector('.norek-text').innerText;
            const statusMsg = card.querySelector('.status-message');

            navigator.clipboard.writeText(norek).then(() => {
                statusMsg.innerText = "Berhasil disalin!";
                
                // Hilangkan pesan setelah 2 detik
                setTimeout(() => { statusMsg.innerText = ""; }, 2000);
            }).catch(err => {
                statusMsg.innerText = "Gagal disalin!";
            });
        }
        function copy_alamat() {
            const text = document.getElementById("data-alamat").innerText;

            navigator.clipboard.writeText(text).then(() => {
                alert("Nama dan alamat berhasil disalin!");
            }).catch(err => {
                console.error("Gagal menyalin", err);
            });
        }
    </script>


    <script>
        const targetDate = new Date("{{ \Carbon\Carbon::parse($undangan->tgl_akad)->toIso8601String() }}").getTime();

        const countdown = setInterval(() => {
            const now = new Date().getTime();
            const distance = targetDate - now;

            // Hitung waktu
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Cek apakah waktu sudah habis
            if (distance < 0) {
                clearInterval(countdown);
                document.getElementById("countdown").innerHTML = "Acara telah dimulai 🎉";
                return;
            }

            // Update elemen DOM (pastikan ID ini ada di HTML Anda)
            document.getElementById("days").innerText = days;
            document.getElementById("hours").innerText = hours;
            document.getElementById("minutes").innerText = minutes;
            document.getElementById("seconds").innerText = seconds;
        }, 1000);
    </script>

    <script>
        function bukaModal(src) {
            document.getElementById('modalImage').src = src;
            document.getElementById('imageModal').classList.remove('hidden');
            document.getElementById('imageModal').classList.add('flex');
        }

        function tutupModal() {
            document.getElementById('imageModal').classList.add('hidden');
            document.getElementById('imageModal').classList.remove('flex');
        }
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const elements = document.querySelectorAll(".muncul");

            const observer = new IntersectionObserver(
                (entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add("animate");
                            observer.unobserve(entry.target); // animasi sekali
                        }
                    });
                },
                {
                    threshold: 0.2
                }
            );

            elements.forEach(el => observer.observe(el));
        });
    </script>
    <!-- timeline -->
    <!-- JS -->
    <script>
        const items = document.querySelectorAll('.timeline-item');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove('opacity-0', 'translate-y-10');
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                }
            });
        }, {
            threshold: 0.2
        });

        items.forEach(item => observer.observe(item));
    </script>

    <!-- modal rsvp -->
    <script>
        function openModal() {
            const backdrop = document.getElementById('modalKehadiran');
            const modal = document.getElementById('modalBoxKehadiran');
            backdrop.classList.remove('hidden');
            backdrop.classList.add('flex');
            setTimeout(() => {
                modal.classList.remove('scale-95', 'opacity-0');
                modal.classList.add('scale-100', 'opacity-100');
            }, 10);
        }

        function closeModal() {
            const backdrop = document.getElementById('modalKehadiran');
            const modal = document.getElementById('modalBoxKehadiran');

            modal.classList.add('scale-95', 'opacity-0');
            modal.classList.remove('scale-100', 'opacity-100');

            setTimeout(() => {
                backdrop.classList.add('hidden');
                backdrop.classList.remove('flex');
            }, 200);
        }
    </script>

    <script>
        lucide.createIcons();
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const elements = document.querySelectorAll(".fade-scroll");

            const observer = new IntersectionObserver(
                (entries) => {
                    entries.forEach((entry) => {
                        const el = entry.target;

                        if (entry.isIntersecting) {
                            const index = [...elements].indexOf(el);

                            el.style.animationDelay = ((index % 5) * 0.15) + "s";
                            el.classList.add("animate");
                        } else {
                            el.classList.remove("animate");
                            el.style.animationDelay = "0s";
                        }
                    });
                },
                {
                    threshold: 0.05,
                    rootMargin: "0px 0px -50px 0px"
                }
            );

            elements.forEach((el) => observer.observe(el));
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Atur waktu tunda (dalam milidetik). 
            // Contoh: 6500ms (6.5 detik) agar animasi teks dan dekorasi di awal selesai dulu
            setTimeout(() => {
                const leftDoor = document.getElementById('left-door');
                const rightDoor = document.getElementById('right-door');

                if (leftDoor && rightDoor) {
                    // Pintu otomatis bergeser membuka ke samping
                    leftDoor.style.transform = 'translateX(-100%)';
                    rightDoor.style.transform = 'translateX(100%)';
                }
            }, 2000); // Sesuaikan durasi jeda ini sesuai selera Anda
        });
    </script>
    <script>
        AOS.init({
        duration: 1000,
        once: true,
        easing: 'ease-in-out'
        });
    </script>
</body>

</html>