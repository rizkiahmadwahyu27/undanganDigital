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
            background-image: url('/images/bg-jawa.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        .bg-cover-akhir {
            background-image: url('/images/foto-gallery-2.jpeg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 50%;
        }

        .bunga {
            background-image: url('/images/pohon (5).png');
            background-repeat: no-repeat;
            background-size: contain;
            animation-duration: 6s;
            animation-timing-function: ease-in-out;
            animation-iteration-count: infinite;
        }
        .janur {
            background-image: url('/images/janur kuning.png');
            background-repeat: no-repeat;
            background-size: contain;
            animation-duration: 6s;
            animation-timing-function: ease-in-out;
            animation-iteration-count: infinite;
        }
        .pohon1 {
            background-image: url('/images/pohon (2).png');
            background-repeat: no-repeat;
            background-size: contain;
            animation-duration: 6s;
            animation-timing-function: ease-in-out;
            animation-iteration-count: infinite;
        }
        
        .pohon2 {
            background-image: url('/images/pohon (1).png');
            background-repeat: no-repeat;
            background-size: contain;
            animation-duration: 6s;
            animation-timing-function: ease-in-out;
            animation-iteration-count: infinite;
        }
        .pohon3 {
            background-image: url('/images/pohon (3).png');
            background-repeat: no-repeat;
            background-size: contain;
            animation-duration: 6s;
            animation-timing-function: ease-in-out;
            animation-iteration-count: infinite;
        }
        
        .pohon4 {
            background-image: url('/images/pohon (6).png');
            background-repeat: no-repeat;
            background-size: contain;
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

        .scale-anim {
            animation: scale-lembut 4s ease-in-out infinite;
        }
        .show-undangan {
        opacity: 1;
        pointer-events: auto;
        }

        .bg-kartu-atm {
            background-image: url('/images/dompet_digital.png');
            background-repeat: no-repeat;
            background-size: cover;
        }

        @keyframes angin-top {
            0%, 100% {
                transform: rotate(-180deg) translateX(0);
            }
            50% {
                transform: rotate(-175deg) translateX(12px);
            }
        }

        @keyframes angin-bottom {
            0%, 100% {
                transform: rotate(5deg) translateX(0);
            }
            50% {
                transform: rotate(-5deg) translateX(12px);
            }
        }
        @keyframes fadeCover {
            from {
                transform: translateY(10px) scale(0.95);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
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

            background: url('/images/daun-jatuh.png') no-repeat center;
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
        
        /* =========================
        ANGIN (lebih natural)
        ========================= */
        @keyframes angin {
            0% { transform: rotate(0deg); }
            50% { transform: rotate(4deg); }
            100% { transform: rotate(0deg); }
        }

        @keyframes angin2 {
            0% { transform: rotate(0deg); }
            50% { transform: rotate(-4deg); }
            100% { transform: rotate(0deg); }
        }

        .angin {
            animation: angin 3s ease-in-out infinite;
            animation-delay: 6s;
            transform-origin: bottom;
        }

        .angin2 {
            animation: angin2 3.5s ease-in-out infinite;
            animation-delay: 6s;
            transform-origin: bottom;
        }

        /* kupu-kupu */
        .kupu {
            position: absolute;
            width: 40px;
            height: auto;
            opacity: 0.9;
            animation-delay: 4s;
        }
        .kupu1 {
            top: 60%;
            left: -10%;
            animation: terbang1 12s linear infinite;
        }

        @keyframes terbang1 {
            0% {
                transform: translate(0, 0) scale(1);
            }
            25% {
                transform: translate(30vw, -20vh) scale(1.1);
            }
            50% {
                transform: translate(60vw, -10vh) scale(1);
            }
            75% {
                transform: translate(80vw, -30vh) scale(1.1);
            }
            100% {
                transform: translate(110vw, -20vh) scale(1);
            }
        }

        .kupu2 {
            top: 40%;
            left: -10%;
            animation: terbang2 14s linear infinite;
            animation-delay: 2s;
        }

        @keyframes terbang2 {
            0% {
                transform: translate(0, 0);
            }
            20% {
                transform: translate(20vw, -10vh);
            }
            40% {
                transform: translate(40vw, 10vh);
            }
            60% {
                transform: translate(60vw, -15vh);
            }
            80% {
                transform: translate(80vw, 5vh);
            }
            100% {
                transform: translate(110vw, -10vh);
            }
        }
        .kupu3 {
            top: 20%;
            left: -10%;
            animation: terbang3 18s linear infinite;
            animation-delay: 4s;
        }
        .kupu2 {
            filter: blur(1px);
            opacity: 0.7;
        }

        .kupu3 {
            filter: blur(2px);
            opacity: 0.6;
        }
        @keyframes terbang3 {
            0% {
                transform: translate(0, 0) scale(0.8);
            }
            30% {
                transform: translate(40vw, -10vh) scale(1);
            }
            60% {
                transform: translate(70vw, -20vh) scale(1.1);
            }
            100% {
                transform: translate(110vw, -5vh) scale(0.9);
            }
        }
        @keyframes flip {
            0%,100% { transform: scaleX(1); }
            50% { transform: scaleX(-1); }
        }
    </style>

</head>
<body class="overflow-x-hidden lock-scroll bg-red-300">
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
            <div class="relative bg-cover1 w-full md:w-6/12 h-screen overflow-hidden z-10">
                <div class="daun-jatuh-wrapper absolute inset-0 z-0 pointer-events-none overflow-hidden">
                    @for ($i = 0; $i < 25; $i++)
                        <span class="daun-jatuh" style="
                            --i: {{ rand(5,35) }};
                            --delay: {{ rand(0,10) }}s;
                            --durasi: {{ rand(8,15) }}s;
                            --posisi: {{ rand(0,100) }}%;
                        "></span>
                    @endfor
                </div>
                <div class="kupu-wrapper absolute inset-0 pointer-events-none z-10">
                    
                    <img src="/images/kupu-kupu.gif" class="kupu kupu1">
                    <img src="/images/kupu-kupu.gif" class="kupu kupu2">
                    <img src="/images/kupu-kupu.gif" class="kupu kupu3">

                </div>
                <div id="daun-wrapper">
                    <!-- KIRI -->
                    <div class="bunga absolute -top-20 md:-top-72 -left-40 md:-left-80 w-96 h-96 md:w-[900px] md:h-[900px] rotate-100 z-20"></div>
                    <div class="bunga absolute top-30 -left-40 md:-left-80 w-96 h-96 md:w-[900px] md:h-[900px] rotate-100 z-20"></div>
                    <div class="bunga absolute top-80 -left-40 md:-left-80 w-96 h-96 md:w-[900px] md:h-[900px] rotate-100 z-20"></div>

                    <!-- KANAN -->
                    <div class="bunga absolute -top-20 md:-top-72 -right-40 md:-right-80 w-96 h-96 md:w-[900px] md:h-[900px] rotate-250 z-20"></div>
                    <div class="bunga absolute top-30 -right-40 md:-right-80 w-96 h-96 md:w-[900px] md:h-[900px] rotate-250 z-20"></div>
                    <div class="bunga absolute top-80 -right-40 md:-right-80 w-96 h-96 md:w-[900px] md:h-[900px] rotate-250 z-20"></div>
                </div>
                <div class="absolute -bottom-10 -right-10 w-46 h-46 md:w-64 md:h-64 muncul"
                    style="animation-delay: 1s;">
                    <div class="janur w-full h-full opacity-65 angin"></div>
                </div>

                <div class="absolute -bottom-10 -left-10 w-46 h-46 md:w-64 md:h-64 muncul"
                    style="animation-delay: 1.3s;">
                    <div class="janur w-full h-full opacity-65 scale-x-[-1] angin2"></div>
                </div>
                <div class="absolute bottom-50 -right-32 md:-right-48 w-52 h-52 md:w-80 md:h-80 muncul"
                    style="animation-delay: 1.6s;">
                    <div class="pohon1 w-full h-full opacity-65 rotate-300 angin"></div>
                </div>

                <div class="absolute bottom-50 -left-32 md:-left-48 w-52 h-52 md:w-80 md:h-80 muncul"
                    style="animation-delay: 1.9s;">
                    <div class="pohon1 w-full h-full opacity-65 scale-x-[-1] rotate-45 angin2"></div>
                </div>
                <div class="absolute bottom-70 -right-32 md:-right-48 w-52 h-52 md:w-80 md:h-80 muncul"
                    style="animation-delay: 2.2s;">
                    <div class="pohon2 w-full h-full opacity-65 rotate-300 angin"></div>
                </div>

                <div class="absolute bottom-70 -left-32 md:-left-48 w-52 h-52 md:w-80 md:h-80 muncul"
                    style="animation-delay: 2.5s;">
                    <div class="pohon2 w-full h-full opacity-65 scale-x-[-1] rotate-45 angin2"></div>
                </div>
                <div class="absolute -top-20 -right-44 md:-right-64 w-52 h-52 md:w-80 md:h-80 muncul"
                    style="animation-delay: 2.8s;">
                    <div class="pohon4 w-full h-full opacity-65 rotate-230 angin"></div>
                </div>

                <div class="absolute -top-20 -left-44 md:-left-64 w-52 h-52 md:w-80 md:h-80 muncul"
                    style="animation-delay: 3.1s;">
                    <div class="pohon4 w-full h-full opacity-65 scale-x-[-1] rotate-130 angin2"></div>
                </div>
                <div class="absolute -top-56 md:-top-96 -right-36 md:-right-64 w-52 h-52 md:w-96 md:h-96 muncul"
                    style="animation-delay: 3.4s;">
                    <div class="pohon3 w-full h-full rotate-230 angin"></div>
                </div>

                <div class="absolute -top-56 md:-top-96 -left-36 md:-left-64 w-52 h-52 md:w-96 md:h-96 muncul"
                    style="animation-delay: 3.7s;">
                    <div class="pohon3 w-full h-full scale-x-[-1] rotate-130 angin2"></div>
                </div>
               
                <div class="w-full h-screen flex justify-center items-center">
                    <div>
                        <div class="w-full flex justify-center items-center muncul2 mb-2" style="animation-delay: 4s;">
                            <h1 class="text-white" style="font-family: 'Sacramento', cursive; font-size: 52px;">
                                Wedding Of
                            </h1>
                        </div>
                        
                        <div class="w-full flex justify-center items-center mb-2 muncul2" style="animation-delay: 4.3s;">
                            <div class="w-full flex justify-center items-center">
                                <div class="w-56 h-56 md:w-80 md:h-80 rounded-full overflow-hidden 
                                    ring-8 ring-white/40 shadow-2xl">
                                    <img src="{{ asset('storage/'.$images->foto_cover) }}"
                                        class="w-full h-full object-cover object-center">
                                </div>
                            </div>    
                        </div>
                        <div class="w-full flex justify-center items-center muncul2" style="animation-delay: 4.7s;">
                            <h1 class="text-white" style="font-family: 'Sacramento', cursive; font-size: 44px;">
                                {{$undangan->judul_undangan}}
                            </h1>
                        </div>
                        <div class="w-full flex justify-center items-center -mt-1">
                            <div>
                                <div class="flex justify-center items-center muncul2" style="animation-delay: 5s;">
                                    <p class="text-white text-lg">Kepada Yth. Bapak/Ibu/Saudara/i</p>
                                </div>
                                <div class="flex justify-center items-center">
                                    <p class="text-white text-xl font-bold muncul2" style="animation-delay: 5.3s;">{{$tamu}}</p>
                                </div>
                                <div class="flex justify-center items-center text-center muncul2" style="animation-delay: 5.6s;">
                                    <p class="text-white text-sm">
                                        *Mohon maaf apabila ada kesalahan pada
                                        penulisan nama dan gelar
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2 w-full flex justify-center items-center muncul2 text-white font-bold" style="animation-delay: 5.9s;">
                            <a href="#isi_undangan" id="btnBuka" class="bg-red-300 hover:bg-red-400 p-3 rounded-lg flex justify-center items-center">
                                <i data-lucide="mail-open" class="w-5 h-5 mr-2"></i>
                                <span>Buka Undangan</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="isi_undangan" class="hidden">
        <div class="w-full flex justify-center items-center">
            <div class="relative bg-cover1 w-full md:w-6/12 h-screen z-0 overflow-hidden">
                <div class="daun-jatuh-wrapper absolute inset-0 z-0 pointer-events-none overflow-hidden">
                    @for ($i = 0; $i < 25; $i++)
                        <span class="daun-jatuh" style="
                            --i: {{ rand(5,35) }};
                            --delay: {{ rand(0,10) }}s;
                            --durasi: {{ rand(8,15) }}s;
                            --posisi: {{ rand(0,100) }}%;
                        "></span>
                    @endfor
                </div>
                <div class="kupu-wrapper absolute inset-0 pointer-events-none z-10">
                    
                    <img src="/images/kupu-kupu.gif" class="kupu kupu1">
                    <img src="/images/kupu-kupu.gif" class="kupu kupu2">
                    <img src="/images/kupu-kupu.gif" class="kupu kupu3">

                </div>
                <div class="absolute -bottom-10 -right-10 w-46 h-46 md:w-64 md:h-64 muncul"
                    style="animation-delay: 0s;">
                    <div class="janur w-full h-full opacity-65 angin"></div>
                </div>

                <div class="absolute -bottom-10 -left-10 w-46 h-46 md:w-64 md:h-64 muncul"
                    style="animation-delay: 0.5s;">
                    <div class="janur w-full h-full opacity-65 scale-x-[-1] angin2"></div>
                </div>
                <div class="absolute bottom-50 -right-32 md:-right-48 w-52 h-52 md:w-80 md:h-80 muncul"
                    style="animation-delay: 1s;">
                    <div class="pohon1 w-full h-full opacity-65 rotate-300 angin"></div>
                </div>

                <div class="absolute bottom-50 -left-32 md:-left-48 w-52 h-52 md:w-80 md:h-80 muncul"
                    style="animation-delay: 1.3s;">
                    <div class="pohon1 w-full h-full opacity-65 scale-x-[-1] rotate-45 angin2"></div>
                </div>
                <div class="absolute bottom-70 -right-32 md:-right-48 w-52 h-52 md:w-80 md:h-80 muncul"
                    style="animation-delay: 1.6s;">
                    <div class="pohon2 w-full h-full opacity-65 rotate-300 angin"></div>
                </div>

                <div class="absolute bottom-70 -left-32 md:-left-48 w-52 h-52 md:w-80 md:h-80 muncul"
                    style="animation-delay: 1.9s;">
                    <div class="pohon2 w-full h-full opacity-65 scale-x-[-1] rotate-45 angin2"></div>
                </div>
                <div class="absolute -top-20 -right-44 md:-right-64 w-52 h-52 md:w-80 md:h-80 muncul"
                    style="animation-delay: 2.2s;">
                    <div class="pohon4 w-full h-full opacity-65 rotate-230 angin"></div>
                </div>

                <div class="absolute -top-20 -left-44 md:-left-64 w-52 h-52 md:w-80 md:h-80 muncul"
                    style="animation-delay: 2.5s;">
                    <div class="pohon4 w-full h-full opacity-65 scale-x-[-1] rotate-130 angin2"></div>
                </div>
                <div class="absolute -top-56 md:-top-96 -right-36 md:-right-64 w-52 h-52 md:w-96 md:h-96 muncul"
                    style="animation-delay: 2.8s;">
                    <div class="pohon3 w-full h-full rotate-230 angin"></div>
                </div>

                <div class="absolute -top-56 md:-top-96 -left-36 md:-left-64 w-52 h-52 md:w-96 md:h-96 muncul"
                    style="animation-delay: 3.1s;">
                    <div class="pohon3 w-full h-full scale-x-[-1] rotate-130 angin2"></div>
                </div>
                
                <div class="w-full h-screen flex justify-center items-center">
                    <div>
                        <div class="fade-scroll w-full flex justify-center items-center">
                            <h1 class="text-white" style="font-family: 'Sacramento', cursive; font-size: 24px;">
                                The Wedding Of
                            </h1>
                        </div>
                        <div class="fade-scroll w-full flex justify-center items-center">
                            <h1 class="text-white" style="font-family: 'Sacramento', cursive; font-size: 44px;">
                                 {{$undangan->subjudul1_undangan}}  
                            </h1>
                        </div>
                        @if($undangan->hastag != '-')
                            <div class="fade-scroll w-full flex justify-center items-center mb-5">
                                <p class="text-white italic" style="font-family: 'Arial', cursive; font-size: 14px;">
                                     {{$undangan->hastag}}  
                                </p>
                            </div>
                        @endif
                        <div class="fade-scroll w-full flex justify-center items-center mt-5">
                            <h1 class="text-white text-xl">
                                {{ \Carbon\Carbon::parse($undangan->tgl_akad)->locale('id')->translatedFormat('l, d F Y') }}
                            </h1>
                        </div>
                        <div class="fade-scroll w-full flex justify-center items-center">
                             <!-- countdown container -->
                            <div>
                                <div id="countdown" class="mt-4 mb-4 flex justify-center items-center text-xl md:text-3xl font-bold text-white">
                                    
                                </div>
                                <div class="grid grid-cols-4 gap-4">
                                    <div class="bg-red-300 scale-anim w-18 h-18 p-1 font-bold text-white rounded-tl-xl rounded-br-xl flex justify-center items-center">
                                        <div class="flex justify-center items-center">
                                            <div>
                                                <p id="days">0</p>
                                                <p>Days</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-red-300 scale-anim w-18 h-18 p-1 font-bold text-white rounded-tl-xl rounded-br-xl flex justify-center items-center">
                                        <div class="flex justify-center items-center">
                                            <div>
                                                <p id="hours">0</p>
                                                <p>Jam</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-red-300 scale-anim w-18 h-18 p-1 font-bold text-white rounded-tl-xl rounded-br-xl flex justify-center items-center">
                                        <div class="flex justify-center items-center">
                                            <div>
                                                <p id="minutes">0</p>
                                                <p>Menit</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-red-300 scale-anim w-18 h-18 p-1 font-bold text-white rounded-tl-xl rounded-br-xl flex justify-center items-center">
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
                        <div class="fade-scroll w-full flex justify-center items-center mt-10">
                            <div class="bg-red-300 rounded-xl p-3 text-white font-bold">
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
        <div class="w-full flex justify-center items-center">
            <div class="relative bg-cover1 w-full md:w-6/12 h-[1500px] overflow-hidden">
               <div class="daun-jatuh-wrapper absolute inset-0 z-0 pointer-events-none overflow-hidden">
                    @for ($i = 0; $i < 25; $i++)
                        <span class="daun-jatuh" style="
                            --i: {{ rand(5,35) }};
                            --delay: {{ rand(0,10) }}s;
                            --durasi: {{ rand(8,15) }}s;
                            --posisi: {{ rand(0,100) }}%;
                        "></span>
                    @endfor
                </div>
                <div class="kupu-wrapper absolute inset-0 pointer-events-none z-10">
                    
                    <img src="/images/kupu-kupu.gif" class="kupu kupu1">
                    <img src="/images/kupu-kupu.gif" class="kupu kupu2">
                    <img src="/images/kupu-kupu.gif" class="kupu kupu3">

                </div>
                <div class="absolute -bottom-10 -right-10 w-46 h-46 md:w-64 md:h-64 muncul"
                    style="animation-delay: 0s;">
                    <div class="janur w-full h-full opacity-65 angin"></div>
                </div>

                <div class="absolute -bottom-10 -left-10 w-46 h-46 md:w-64 md:h-64 muncul"
                    style="animation-delay: 0.5s;">
                    <div class="janur w-full h-full opacity-65 scale-x-[-1] angin2"></div>
                </div>
                <div class="absolute bottom-50 -right-32 md:-right-48 w-52 h-52 md:w-80 md:h-80 muncul"
                    style="animation-delay: 1s;">
                    <div class="pohon1 w-full h-full opacity-65 rotate-300 angin"></div>
                </div>

                <div class="absolute bottom-50 -left-32 md:-left-48 w-52 h-52 md:w-80 md:h-80 muncul"
                    style="animation-delay: 1.3s;">
                    <div class="pohon1 w-full h-full opacity-65 scale-x-[-1] rotate-45 angin2"></div>
                </div>
                <div class="absolute bottom-70 -right-32 md:-right-48 w-52 h-52 md:w-80 md:h-80 muncul"
                    style="animation-delay: 1.6s;">
                    <div class="pohon2 w-full h-full opacity-65 rotate-300 angin"></div>
                </div>

                <div class="absolute bottom-70 -left-32 md:-left-48 w-52 h-52 md:w-80 md:h-80 muncul"
                    style="animation-delay: 1.9s;">
                    <div class="pohon2 w-full h-full opacity-65 scale-x-[-1] rotate-45 angin2"></div>
                </div>
                <div class="absolute -top-20 -right-44 md:-right-64 w-52 h-52 md:w-80 md:h-80 muncul"
                    style="animation-delay: 2.2s;">
                    <div class="pohon4 w-full h-full opacity-65 rotate-230 angin"></div>
                </div>

                <div class="absolute -top-20 -left-44 md:-left-64 w-52 h-52 md:w-80 md:h-80 muncul"
                    style="animation-delay: 2.5s;">
                    <div class="pohon4 w-full h-full opacity-65 scale-x-[-1] rotate-130 angin2"></div>
                </div>
                <<div class="absolute -top-56 md:-top-96 -right-36 md:-right-64 w-52 h-52 md:w-96 md:h-96 muncul"
                    style="animation-delay: 2.8s;">
                    <div class="pohon3 w-full h-full rotate-230 angin"></div>
                </div>

                <div class="absolute -top-56 md:-top-96 -left-36 md:-left-64 w-52 h-52 md:w-96 md:h-96 muncul"
                    style="animation-delay: 3.1s;">
                    <div class="pohon3 w-full h-full scale-x-[-1] rotate-130 angin2"></div>
                </div>
                
                @if ($undangan->jenis_undangan == 'P')
                    <div class="flex justify-center w-full h-[1400px] items-center p-2">
                        <div>
                            <div class="flex justify-center fade-scroll text-white mb-2">
                                <svg class="w-48 md:72 h-auto fill-current" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="100mm" height="40mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
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
                            <div class="opacity-0 flex justify-center mt-4 mb-4 text-white fade-scroll">
                                <h1 style="font-family: 'Sacramento', cursive; font-size: 25px;">Assalamualaikum Wr. Wb</h1>
                            </div>
                            <div class="opacity-0  flex justify-center items-center text-center mb-5 fade-scroll text-white">
                                <p class="w-10/12 text-[12px] md:text-sm">Dengan memohon Rahmat dan Ridho Allah SWT, Kami bermaksud mengundang Bapak/Ibu/Saudara/i untuk hadir dalam pernikahan kami</p>
                            </div>
                            <div class="flex justify-center mt-4">
                                <div>
                                    
                                    <div class="flex justify-center items-center">
                                        <div class="mt-3">
                                            <div class="opacity-0 fade-scroll text-white flex justify-center mt-5">
                                                <h1 style="font-family: 'Sacramento', cursive;" class="text-4xl md:text-8xl">{{$undangan->nama_mempelai_wanita}}</h1>
                                            </div>
                                            <div class="opacity-0 fade-scroll text-white mt-3 flex justify-center items-center text-[12px] md:text-[18px] text-center">
                                                @if ($undangan->nama_ayah_wanita != '-' && $undangan->nama_ibu_wanita != '-' && $undangan->anak_ke <= 0)
                                                    <p>Putri {{$anak_ke}} dari Bapak {{$undangan->nama_ayah_wanita}} dan Ibu {{$undangan->nama_ibu_wanita}}</p>
                                                @endif
                                            </div>
                                            <div class="flex justify-center items-center mt-5 mb-5 fade-scroll">
                                                <div class=" w-48 h-72 md:w-64 md:h-64 rounded-full overflow-hidden ring-[14px] ring-white/40 shadow-2xl">
                                                    <img src="{{ asset('storage/'.$images->foto_mempelai_wanita) }}" class="w-full h-full object-cover object-center" alt="mempelai perempuan">
                                                </div>
                                            </div>
                                            <div class="mt-2">
                                                <div class="flex justify-center items-center fade-scroll">
                                                    @if ($undangan->fb_mempelai_wanita != '-')
                                                        <div class=" w-5 h-5 md:w-10 md:h-10 rounded-full overflow-hidden ring-2 ring-white/40 shadow-2xl text-white">
                                                            <a href="https://www.facebook.com/{{ $undangan->fb_mempelai_wanita }}" target="_blank" rel="noopener noreferrer" class="w-5 h-5">
                                                                <?xml version="1.0" encoding="UTF-8"?>
                                                                <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                                                                <!-- Creator: CorelDRAW 2020 (64-Bit Evaluation Version) -->
                                                                <svg class="w-full h-full object-cover object-center" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="100mm" height="100mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                                                    viewBox="0 0 10000 10000"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    xmlns:xodm="http://www.corel.com/coreldraw/odm/2003">
                                                                    <defs>
                                                                    <style type="text/css">
                                                                    <![CDATA[
                                                                        .fil0 {fill:currentColor}
                                                                    ]]>
                                                                    </style>
                                                                    </defs>
                                                                    <g id="Layer_x0020_1">
                                                                    <metadata id="CorelCorpID_0Corel-Layer"/>
                                                                    <path class="fil0" d="M5439.34 3476.12l0 533.84 803.7 0c-1.24,56.21 -25.93,242.54 -29.37,322.62 -3.63,84.37 -25.54,234.37 -29.33,322.65 -3.17,73.63 -17.56,145.71 -17.56,222.97l-727.44 0 0 2604.7 -1038.36 0 0 -2581.24c0,-13.51 -4.08,-17.6 -17.6,-17.6l-522.11 0 0 -874.1 539.71 0 0 -703.97c0,-155.07 26.22,-323.79 70.33,-434.18 100.35,-251.12 276.1,-410.5 535.94,-484.81 131.28,-37.55 278.24,-66.58 443.82,-66.58l791.97 0 0 897.57 -492.78 0c-88.53,0 -186.77,4.37 -238.26,43.33 -55.47,41.99 -72.66,120.49 -72.66,214.8zm-4417.44 1319.95c0,380.03 23.57,689.04 114.96,1052.46 62.72,249.44 147.33,512.36 262.45,740.73 14.81,29.4 26.98,52.4 41.14,82.05 129.88,272.11 298.92,527.01 489.4,760.15l58.55 70.51c13.33,13.99 14.87,17.92 26.66,32 11.02,13.16 20.72,19.63 31.74,32.8l448.89 431.07c179.24,156.33 385.13,288.74 593.07,404.22 112.23,62.33 214.84,114.12 336.38,168.14 474.26,210.78 904.29,295.58 1416.13,337.94 38.35,3.18 83.81,-1.06 123.08,0.12 39.09,1.17 74.33,8.72 123.03,6.09l234.57 -11.83c225.37,0.61 632.27,-87.02 849.46,-147.84 63.45,-17.75 126.41,-39.52 191.18,-61.08 65.01,-21.63 121.9,-43.63 183.83,-68.43 109.26,-43.75 240.63,-97.38 342.19,-156.44l164 -88.26c53.61,-28.99 105.34,-62.33 157.26,-95 126.1,-79.36 245.38,-167.67 362.33,-259.52l137.45 -114.79c14.54,-11.14 20.1,-17.12 33.67,-30.88l401.32 -414.12c111.25,-137.73 223.73,-278.12 314.05,-430.98 62.48,-105.75 128.95,-210.6 183.74,-320.78 492.24,-989.89 574.86,-2077.02 226.58,-3130.48 -46.5,-140.66 -98.72,-272.67 -162.14,-401.04 -7.56,-15.3 -11.47,-27.88 -19.45,-45.09 -97.12,-209.61 -238.68,-445.42 -376.04,-627.12l-342.13 -408.77c-31.89,-31.86 -56.89,-67.11 -92.86,-94.87 -34.92,-26.96 -62.13,-63.93 -94.92,-92.81 -13.47,-11.87 -18.6,-13.06 -32.34,-26.33 -190.25,-183.72 -463.4,-376.6 -688.84,-502.05 -70.69,-39.33 -173.35,-101.14 -244.81,-130.64 -34.82,-14.36 -54.85,-27.37 -88,-41.05l-172.68 -73.72c-186.96,-74.73 -378.1,-132.87 -574.61,-182.15 -130.21,-32.66 -274.78,-57.92 -422.44,-76.22 -34.34,-4.25 -71.63,-7.26 -110.8,-12.39 -114.05,-14.93 -244.81,-15.55 -359.57,-21.75 -44.89,-2.42 -82.12,2.65 -117.66,5.59 -38.88,3.21 -83.52,-1.85 -122.92,0.28l-113.93 9.26c-40.95,6 -77.07,5.17 -118.22,10.84 -293.99,40.52 -585.88,88.17 -864.84,191.12l-141.68 51.92c-126.03,46.55 -314.75,124.07 -428.5,193.34 -79.22,48.23 -165.88,86.32 -242.95,138.37 -172.59,116.54 -352.89,227.01 -505.35,368.75l-99.85 87.87c-11.91,11.78 -19.88,21.17 -32.08,32.45l-278.8 284.38c-126.4,135.86 -246.34,307.46 -348.69,460.89 -67.39,101.03 -132.57,209.3 -186.55,317.96 -6.61,13.3 -11.56,24.39 -20.09,38.59 -9.69,16.17 -14.89,23.33 -22.7,41.82l-117.26 258.19c-26.6,61.64 -45.8,118.97 -69.59,182.66 -95.27,254.95 -158.22,527.83 -197.61,805.57 -20.41,143.94 -36.21,307.84 -36.21,468.3z"/>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    @endif
                                                    @if ($undangan->ig_mempelai_wanita != '-')
                                                        <div class=" w-5 h-5 md:w-10 md:h-10 rounded-full overflow-hidden ring-2 ring-white/40 shadow-2xl ml-2 text-white">
                                                            <a href="https://www.instagram.com/{{ $undangan->ig_mempelai_wanita }}" target="_blank" rel="noopener noreferrer" class="w-5 h-5">
                                                                <?xml version="1.0" encoding="UTF-8"?>
                                                                <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                                                                <!-- Creator: CorelDRAW 2020 (64-Bit Evaluation Version) -->
                                                                <svg class="w-full h-full object-cover object-center" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="100mm" height="100mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                                                    viewBox="0 0 10000 10000"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    xmlns:xodm="http://www.corel.com/coreldraw/odm/2003">
                                                                    <defs>
                                                                    <style type="text/css">
                                                                    <![CDATA[
                                                                        .fil0 {fill:currentColor}
                                                                    ]]>
                                                                    </style>
                                                                    </defs>
                                                                    <g id="Layer_x0020_1">
                                                                    <metadata id="CorelCorpID_0Corel-Layer"/>
                                                                    <g id="_2778592936208">
                                                                    <path class="fil0" d="M7278.63 5723.83l27.07 0 0 460.09 -27.07 0 0 189.44 -27.06 0 0 162.39 -27.07 0 0 81.18 -27.06 0 0 54.13 -27.06 0 0 54.13 -27.07 0 0 54.13 -27.06 0 0 27.06 -27.07 0 0 54.13 -27.06 0 0 27.06 -27.06 0 0 27.07 -27.07 0 0 27.05 -27.06 0 0 27.07 -27.07 0 0 27.06 -27.05 0 0 27.07 -27.07 0 0 27.06 -27.06 0 0 27.06 -54.13 0 0 27.07 -27.06 0 0 27.06 -54.13 0 0 27.07 -81.19 0 0 27.06 -54.13 0 0 27.06 -81.19 0 0 27.07 -162.38 0 0 27.06 -2652.23 0 0 -27.06 -108.25 0 0 -27.07 -108.25 0 0 -27.06 -81.19 0 0 -27.06 -54.13 0 0 -27.07 -54.13 0 0 -27.06 -27.06 0 0 -27.07 -54.13 0 0 -27.06 -27.07 0 0 -27.06 -27.05 0 0 -27.07 -27.07 0 0 -27.06 -27.06 0 0 -27.07 -27.07 0 0 -27.05 -27.06 0 0 -27.07 -54.13 0 0 -54.13 -27.06 0 0 -27.06 -27.07 0 0 -54.13 -27.06 0 0 -54.13 -27.06 0 0 -54.12 -27.07 0 0 -54.13 -27.06 0 0 -108.25 -27.07 0 0 -1623.81 -27.05 0 0 -1163.74 27.05 0 0 -135.32 27.07 0 0 -81.18 27.06 0 0 -81.19 27.07 0 0 -54.13 27.06 0 0 -54.13 27.06 0 0 -27.06 27.07 0 0 -54.13 27.06 0 0 -27.07 27.07 0 0 -27.05 27.06 0 0 -27.07 27.06 0 0 -27.06 27.07 0 0 -27.07 27.06 0 0 -27.06 27.07 0 0 -27.06 27.05 0 0 -27.07 27.07 0 0 -27.06 54.13 0 0 -27.07 27.06 0 0 -27.06 81.19 0 0 -27.06 54.13 0 0 -27.07 81.19 0 0 -27.06 135.32 0 0 -27.07 378.88 0 0 -27.05 784.85 0 0 27.05 27.06 0 0 -27.05 54.13 0 0 27.05 27.06 0 0 -27.05 27.07 0 0 27.05 54.12 0 0 -27.05 54.13 0 0 27.05 27.07 0 0 -27.05 81.18 0 0 27.05 378.89 0 0 -27.05 108.26 0 0 27.05 757.78 0 0 27.07 81.19 0 0 27.06 81.19 0 0 27.07 81.19 0 0 27.06 54.12 0 0 27.06 54.13 0 0 27.07 54.13 0 0 27.06 27.06 0 0 27.07 27.07 0 0 27.06 54.13 0 0 27.06 27.05 0 0 27.07 27.07 0 0 27.06 27.06 0 0 27.07 27.07 0 0 54.12 27.06 0 0 27.06 27.06 0 0 27.07 27.07 0 0 54.12 27.06 0 0 54.13 27.07 0 0 54.13 27.06 0 0 81.19 27.06 0 0 81.19 27.07 0 0 108.25 27.06 0 0 270.64 27.07 0 0 514.21 -27.07 0 0 1244.91zm-2300.4 -4519.6l-405.95 0 0 27.06 -189.44 0 0 27.07 -135.32 0 0 27.06 -108.26 0 0 27.07 -81.19 0 0 27.05 -108.26 0 0 27.07 -81.18 0 0 27.06 -81.2 0 0 27.07 -81.19 0 0 27.06 -54.12 0 0 27.06 -81.2 0 0 27.07 -54.12 0 0 27.06 -54.13 0 0 27.07 -54.12 0 0 27.05 -54.13 0 0 27.07 -54.13 0 0 27.07 -54.13 0 0 27.06 -54.13 0 0 27.07 -27.05 0 0 27.05 -54.13 0 0 27.07 -54.13 0 0 27.06 -27.06 0 0 27.07 -54.13 0 0 27.06 -27.07 0 0 27.06 -54.12 0 0 27.07 -27.07 0 0 27.06 -54.13 0 0 27.07 -27.05 0 0 27.06 -27.07 0 0 27.06 -54.13 0 0 27.07 -27.06 0 0 27.06 -27.06 0 0 27.06 -27.07 0 0 27.06 -27.06 0 0 27.07 -27.07 0 0 27.06 -54.12 0 0 27.07 -27.07 0 0 27.06 -27.06 0 0 27.06 -27.06 0 0 27.07 -27.06 0 0 27.06 -27.07 0 0 27.06 -27.06 0 0 27.07 -27.07 0 0 27.06 -27.06 0 0 27.07 -27.06 0 0 27.06 -27.07 0 0 27.06 -27.06 0 0 27.06 -27.06 0 0 54.13 -27.07 0 0 27.06 -27.06 0 0 27.07 -27.07 0 0 27.06 -27.06 0 0 54.13 -27.06 0 0 27.06 -27.06 0 0 27.07 -27.07 0 0 27.06 -27.06 0 0 54.12 -27.06 0 0 27.07 -27.07 0 0 54.13 -27.06 0 0 27.06 -27.07 0 0 54.13 -54.12 0 0 81.19 -27.07 0 0 27.06 -27.06 0 0 54.13 -27.07 0 0 54.12 -27.05 0 0 54.13 -54.13 0 0 54.13 -27.07 0 0 81.19 -27.06 0 0 27.07 -27.06 0 0 81.19 -27.07 0 0 27.06 -27.06 0 0 108.25 -27.07 0 0 54.13 -27.06 0 0 54.13 -27.06 0 0 108.25 -27.07 0 0 54.13 -27.06 0 0 108.25 -27.07 0 0 54.13 -27.05 0 0 135.32 -27.07 0 0 135.31 -27.06 0 0 162.39 -27.07 0 0 162.37 -27.06 0 0 27.07 27.06 0 0 27.06 -27.06 0 0 676.59 27.06 0 0 243.57 27.07 0 0 135.32 27.06 0 0 135.32 27.07 0 0 135.32 27.05 0 0 81.18 27.07 0 0 135.32 27.06 0 0 54.13 27.07 0 0 81.19 27.06 0 0 108.26 27.06 0 0 54.13 27.07 0 0 54.12 27.06 0 0 81.19 27.07 0 0 54.13 27.06 0 0 81.19 27.06 0 0 54.13 27.07 0 0 27.06 27.06 0 0 54.12 27.07 0 0 54.13 27.05 0 0 27.07 27.07 0 0 27.06 27.06 0 0 27.06 27.07 0 0 54.13 27.06 0 0 54.13 27.06 0 0 27.06 27.07 0 0 54.13 27.06 0 0 54.12 27.07 0 0 27.07 27.06 0 0 27.06 27.06 0 0 27.07 27.07 0 0 27.06 27.06 0 0 27.06 27.06 0 0 27.07 27.06 0 0 54.13 27.07 0 0 27.06 27.06 0 0 54.13 27.07 0 0 27.06 27.06 0 0 27.06 27.06 0 0 27.06 27.07 0 0 27.07 27.06 0 0 27.06 54.13 0 0 27.07 27.06 0 0 54.12 27.07 0 0 27.07 27.06 0 0 27.06 54.12 0 0 27.06 27.07 0 0 27.07 27.06 0 0 27.06 27.06 0 0 27.07 27.07 0 0 27.06 54.13 0 0 27.06 27.06 0 0 27.06 27.06 0 0 27.07 27.07 0 0 27.06 27.06 0 0 27.06 27.07 0 0 27.07 54.12 0 0 27.06 54.13 0 0 27.07 27.06 0 0 27.06 54.13 0 0 27.06 27.06 0 0 27.07 54.13 0 0 27.06 54.13 0 0 27.07 27.06 0 0 27.05 54.12 0 0 27.07 54.13 0 0 27.06 54.13 0 0 27.07 54.13 0 0 27.06 27.06 0 0 27.06 81.19 0 0 27.07 27.07 0 0 27.06 81.18 0 0 27.07 54.13 0 0 27.06 54.13 0 0 27.06 81.19 0 0 27.07 81.19 0 0 27.06 81.19 0 0 27.07 108.25 0 0 27.05 81.2 0 0 27.07 135.32 0 0 27.06 108.25 0 0 27.07 135.32 0 0 27.06 433.01 0 0 27.06 54.13 0 0 -27.06 270.63 0 0 27.06 108.26 0 0 -27.06 108.26 0 0 -27.06 216.5 0 0 -27.07 135.32 0 0 -27.06 162.38 0 0 -27.07 81.19 0 0 -27.05 108.26 0 0 -27.07 81.18 0 0 -27.06 81.2 0 0 -27.07 54.12 0 0 -27.06 81.19 0 0 -27.06 81.2 0 0 -27.07 54.12 0 0 -27.06 54.13 0 0 -27.07 54.12 0 0 -27.06 54.13 0 0 -27.06 54.13 0 0 -27.07 27.06 0 0 -27.06 81.2 0 0 -27.07 27.05 0 0 -27.05 54.13 0 0 -27.07 27.07 0 0 -27.06 54.12 0 0 -27.07 27.07 0 0 -27.06 54.13 0 0 -27.06 54.12 0 0 -27.07 27.07 0 0 -27.06 27.06 0 0 -27.07 54.12 0 0 -27.06 27.07 0 0 -27.06 27.06 0 0 -27.07 54.13 0 0 -27.06 27.06 0 0 -27.06 27.07 0 0 -27.06 27.06 0 0 -27.07 27.07 0 0 -27.06 27.06 0 0 -27.07 54.13 0 0 -27.06 27.06 0 0 -27.06 27.06 0 0 -27.07 27.06 0 0 -27.06 27.07 0 0 -27.06 27.06 0 0 -27.07 27.07 0 0 -27.06 27.06 0 0 -27.07 27.06 0 0 -54.12 27.07 0 0 -27.06 27.06 0 0 -27.07 27.06 0 0 -27.06 27.07 0 0 -27.06 27.06 0 0 -27.07 27.07 0 0 -27.06 27.06 0 0 -27.07 27.06 0 0 -54.12 27.06 0 0 -27.07 27.07 0 0 -27.06 27.06 0 0 -54.12 27.06 0 0 -27.07 27.07 0 0 -27.06 27.06 0 0 -54.13 27.07 0 0 -27.06 27.06 0 0 -54.13 27.06 0 0 -27.07 27.07 0 0 -54.12 27.06 0 0 -27.07 27.07 0 0 -54.13 27.05 0 0 -54.12 27.07 0 0 -54.13 27.06 0 0 -27.06 27.07 0 0 -54.13 27.06 0 0 -54.13 27.06 0 0 -54.12 27.07 0 0 -81.19 27.06 0 0 -54.13 27.07 0 0 -81.19 27.06 0 0 -54.13 27.06 0 0 -81.19 27.07 0 0 -81.19 27.06 0 0 -81.19 27.07 0 0 -108.25 27.05 0 0 -108.26 27.07 0 0 -108.25 27.06 0 0 -135.32 27.07 0 0 -216.5 27.06 0 0 -838.97 -27.06 0 0 -216.52 -27.07 0 0 -135.32 -27.06 0 0 -135.31 -27.07 0 0 -108.26 -27.05 0 0 -108.25 -27.07 0 0 -81.19 -27.06 0 0 -81.19 -27.07 0 0 -54.13 -27.06 0 0 -81.19 -27.06 0 0 -54.13 -27.07 0 0 -54.12 -27.06 0 0 -81.19 -27.07 0 0 -54.13 -27.06 0 0 -27.06 -27.06 0 0 -54.13 -27.07 0 0 -54.13 -27.06 0 0 -54.13 -27.07 0 0 -27.05 -27.05 0 0 -54.13 -27.07 0 0 -54.13 -27.06 0 0 -27.06 -27.07 0 0 -54.13 -27.06 0 0 -27.07 -27.06 0 0 -54.12 -27.07 0 0 -27.07 -27.06 0 0 -54.13 -27.07 0 0 -27.05 -27.06 0 0 -54.13 -27.06 0 0 -27.07 -27.07 0 0 -27.06 -27.06 0 0 -27.06 -27.06 0 0 -27.07 -27.06 0 0 -27.06 -27.07 0 0 -54.13 -27.06 0 0 -27.06 -27.07 0 0 -27.07 -27.06 0 0 -54.12 -27.06 0 0 -27.06 -27.07 0 0 -27.07 -27.06 0 0 -27.06 -27.06 0 0 -27.07 -54.13 0 0 -27.06 -27.07 0 0 -27.06 -27.06 0 0 -27.07 -27.06 0 0 -27.06 -27.06 0 0 -27.06 -27.07 0 0 -27.07 -27.06 0 0 -27.06 -27.06 0 0 -27.07 -54.13 0 0 -27.06 -27.07 0 0 -27.06 -27.06 0 0 -27.06 -27.06 0 0 -27.07 -54.13 0 0 -27.06 -27.07 0 0 -27.06 -27.05 0 0 -27.07 -54.13 0 0 -27.06 -27.07 0 0 -27.07 -27.06 0 0 -27.06 -54.13 0 0 -27.06 -27.06 0 0 -27.07 -54.13 0 0 -27.06 -27.06 0 0 -27.07 -54.13 0 0 -27.05 -54.12 0 0 -27.07 -27.07 0 0 -27.06 -54.13 0 0 -27.07 -54.12 0 0 -27.07 -54.13 0 0 -27.05 -54.13 0 0 -27.07 -54.13 0 0 -27.06 -54.12 0 0 -27.07 -81.19 0 0 -27.06 -54.13 0 0 -27.06 -81.19 0 0 -27.07 -81.19 0 0 -27.06 -108.25 0 0 -27.07 -108.26 0 0 -27.05 -81.19 0 0 -27.07 -108.26 0 0 -27.06 -135.32 0 0 -27.07 -189.44 0 0 -27.06 -405.95 0 0 -27.06 -162.38 0 0 27.06z"/>
                                                                    <path class="fil0" d="M6169.03 5182.57l27.06 0 0 27.06 -27.06 0 0 108.26 -27.07 0 0 108.25 -27.06 0 0 54.12 -27.06 0 0 81.2 -27.07 0 0 27.06 -27.06 0 0 54.13 -27.07 0 0 54.13 -27.06 0 0 27.05 -27.06 0 0 27.07 -27.07 0 0 27.07 -27.06 0 0 27.06 -27.07 0 0 27.07 -27.05 0 0 27.05 -27.07 0 0 27.07 -27.06 0 0 27.06 -27.07 0 0 27.07 -27.07 0 0 27.06 -27.05 0 0 27.06 -27.07 0 0 27.07 -54.13 0 0 27.06 -54.12 0 0 27.07 -54.13 0 0 27.05 -54.12 0 0 27.07 -81.2 0 0 27.07 -108.25 0 0 27.06 -433.02 0 0 -27.06 -81.19 0 0 -27.07 -108.26 0 0 -27.07 -54.12 0 0 -27.05 -81.19 0 0 -27.07 -27.06 0 0 -27.06 -54.13 0 0 -27.07 -27.07 0 0 -27.06 -54.12 0 0 -27.06 -27.07 0 0 -27.07 -27.06 0 0 -27.06 -27.07 0 0 -27.07 -27.05 0 0 -27.05 -27.07 0 0 -27.07 -27.06 0 0 -27.06 -27.07 0 0 -27.07 -27.06 0 0 -27.07 -27.06 0 0 -27.05 -27.07 0 0 -54.13 -27.06 0 0 -54.13 -27.07 0 0 -54.13 -27.06 0 0 -54.13 -27.06 0 0 -81.19 -27.07 0 0 -108.25 -27.06 0 0 -162.38 -27.06 0 0 -162.38 27.06 0 0 -135.32 27.06 0 0 -108.25 27.07 0 0 -81.2 27.06 0 0 -54.12 27.06 0 0 -54.13 27.07 0 0 -54.12 27.06 0 0 -54.13 27.07 0 0 -27.07 27.06 0 0 -54.12 27.06 0 0 -27.07 27.07 0 0 -27.06 27.06 0 0 -27.07 27.07 0 0 -27.05 27.05 0 0 -27.07 27.07 0 0 -27.06 27.06 0 0 -27.07 27.07 0 0 -27.06 27.07 0 0 -27.06 54.12 0 0 -27.07 27.06 0 0 -27.06 54.13 0 0 -27.07 54.13 0 0 -27.06 54.13 0 0 -27.06 54.12 0 0 -27.07 135.32 0 0 -27.06 81.19 0 0 -27.06 27.06 0 0 27.06 54.13 0 0 -27.06 216.51 0 0 27.06 108.25 0 0 27.06 81.19 0 0 27.07 81.2 0 0 27.06 54.12 0 0 27.06 54.13 0 0 27.07 27.06 0 0 27.06 54.13 0 0 27.07 54.13 0 0 27.06 27.05 0 0 27.06 27.07 0 0 27.07 27.07 0 0 27.06 27.06 0 0 27.07 27.07 0 0 27.05 27.05 0 0 27.07 27.07 0 0 27.06 27.06 0 0 27.07 27.07 0 0 54.12 27.06 0 0 27.07 27.06 0 0 54.13 27.07 0 0 54.12 27.06 0 0 27.07 27.07 0 0 54.13 27.06 0 0 81.18 27.06 0 0 81.19 27.07 0 0 162.39 27.06 0 0 135.32 -27.06 0 0 108.25zm-162.39 -1434.37l27.07 0 0 -54.13 27.06 0 0 -27.06 27.07 0 0 -27.06 27.06 0 0 -27.07 54.13 0 0 -27.06 135.31 0 0 27.06 54.13 0 0 27.07 54.13 0 0 54.12 27.06 0 0 54.13 27.06 0 0 108.26 -27.06 0 0 54.12 -27.06 0 0 54.13 -27.07 0 0 27.06 -27.06 0 0 27.06 -54.13 0 0 27.07 -162.38 0 0 -27.07 -27.06 0 0 -27.06 -27.06 0 0 -27.06 -27.07 0 0 -27.07 -27.06 0 0 -81.18 -27.07 0 0 -108.26zm-1271.98 -676.59l-838.97 0 0 27.07 -324.77 0 0 27.06 -81.18 0 0 27.07 -54.13 0 0 27.05 -54.13 0 0 27.07 -27.06 0 0 27.06 -54.13 0 0 27.07 -27.06 0 0 27.06 -27.07 0 0 27.06 -27.06 0 0 27.07 -27.07 0 0 54.13 -27.05 0 0 27.06 -27.07 0 0 54.13 -27.06 0 0 81.18 -27.07 0 0 108.26 -27.06 0 0 866.03 -27.06 0 0 1623.82 27.06 0 0 324.76 27.06 0 0 54.13 27.07 0 0 81.18 27.06 0 0 54.13 27.07 0 0 27.06 27.05 0 0 27.07 27.07 0 0 27.06 27.06 0 0 27.07 27.07 0 0 27.06 27.06 0 0 27.06 27.06 0 0 27.07 27.07 0 0 27.06 54.13 0 0 27.07 27.06 0 0 27.05 135.31 0 0 27.07 2949.93 0 0 -27.07 108.25 0 0 -27.05 54.13 0 0 -27.07 54.13 0 0 -27.06 27.06 0 0 -27.07 27.07 0 0 -27.06 27.06 0 0 -27.06 27.06 0 0 -27.07 27.07 0 0 -27.06 27.06 0 0 -54.13 27.07 0 0 -54.13 27.05 0 0 -54.12 27.07 0 0 -54.13 27.06 0 0 -108.25 27.07 0 0 -297.71 -27.07 0 0 -1813.25 27.07 0 0 -216.51 -27.07 0 0 -460.08 -27.06 0 0 -81.19 -27.07 0 0 -54.12 -27.05 0 0 -54.13 -27.07 0 0 -54.13 -27.06 0 0 -27.06 -27.07 0 0 -27.07 -27.06 0 0 -27.06 -27.06 0 0 -27.06 -27.07 0 0 -27.07 -27.06 0 0 -27.06 -54.13 0 0 -27.07 -54.13 0 0 -27.05 -54.12 0 0 -27.07 -81.19 0 0 -27.06 -216.51 0 0 -27.07 -216.51 0 0 -27.06 -1326.11 0 0 27.06z"/>
                                                                    <polygon class="fil0" points="4842.91,4262.4 4761.72,4262.4 4761.72,4289.47 4680.53,4289.47 4680.53,4316.53 4626.41,4316.53 4626.41,4343.6 4599.34,4343.6 4599.34,4370.67 4545.21,4370.67 4545.21,4397.72 4518.15,4397.72 4518.15,4424.79 4491.09,4424.79 4491.09,4451.85 4464.02,4451.85 4464.02,4478.92 4436.96,4478.92 4436.96,4505.98 4409.89,4505.98 4409.89,4533.04 4382.84,4533.04 4382.84,4587.17 4355.77,4587.17 4355.77,4641.29 4328.7,4641.29 4328.7,4668.36 4301.64,4668.36 4301.64,4722.49 4274.57,4722.49 4274.57,4776.61 4247.52,4776.61 4247.52,4884.87 4220.45,4884.87 4220.45,5182.57 4247.52,5182.57 4247.52,5317.89 4274.57,5317.89 4274.57,5372.01 4301.64,5372.01 4301.64,5426.14 4328.7,5426.14 4328.7,5480.26 4355.77,5480.26 4355.77,5507.33 4382.84,5507.33 4382.84,5561.46 4409.89,5561.46 4409.89,5588.52 4436.96,5588.52 4436.96,5615.58 4464.02,5615.58 4464.02,5642.65 4491.09,5642.65 4491.09,5669.71 4518.15,5669.71 4518.15,5696.78 4545.21,5696.78 4545.21,5723.83 4599.34,5723.83 4599.34,5750.9 4626.41,5750.9 4626.41,5777.97 4680.53,5777.97 4680.53,5805.03 4734.66,5805.03 4734.66,5832.1 4869.98,5832.1 4869.98,5859.15 5194.74,5859.15 5194.74,5832.1 5330.06,5832.1 5330.06,5805.03 5411.25,5805.03 5411.25,5777.97 5465.38,5777.97 5465.38,5750.9 5519.5,5750.9 5519.5,5723.83 5546.56,5723.83 5546.56,5696.78 5600.69,5696.78 5600.69,5669.71 5627.75,5669.71 5627.75,5642.65 5654.82,5642.65 5654.82,5615.58 5681.88,5615.58 5681.88,5561.46 5708.95,5561.46 5708.95,5534.39 5736,5534.39 5736,5480.26 5763.07,5480.26 5763.07,5453.21 5790.14,5453.21 5790.14,5399.07 5817.2,5399.07 5817.2,5317.89 5844.27,5317.89 5844.27,5209.63 5871.32,5209.63 5871.32,4884.87 5844.27,4884.87 5844.27,4776.61 5817.2,4776.61 5817.2,4695.42 5790.14,4695.42 5790.14,4641.29 5763.07,4641.29 5763.07,4587.17 5736,4587.17 5736,4560.11 5708.95,4560.11 5708.95,4505.98 5681.88,4505.98 5681.88,4478.92 5654.82,4478.92 5654.82,4451.85 5627.75,4451.85 5627.75,4424.79 5600.69,4424.79 5600.69,4397.72 5546.56,4397.72 5546.56,4370.67 5519.5,4370.67 5519.5,4343.6 5465.38,4343.6 5465.38,4316.53 5411.25,4316.53 5411.25,4289.47 5357.12,4289.47 5357.12,4262.4 5248.86,4262.4 5248.86,4235.35 4842.91,4235.35 "/>
                                                                    </g>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-center items-center mb-2 mt-5 fade-scroll text-white">
                                <div class="flex justify-center items-center text-[90px] md:text-[110px]">
                                    <h1 style="font-family: 'Sacramento', cursive;">&</h1>
                                </div>
                            </div>
                            <div class="flex justify-center">
                                <div>
                                    <div class="flex justify-center items-center">
                                        <div class="p-2">
                                            <div class="opacity-0 fade-scroll flex justify-center mt-1 text-white">
                                                <h1 style="font-family: 'Sacramento', cursive;" class="text-4xl md:text-8xl">{{$undangan->nama_mempelai_pria}}</h1>
                                            </div>
                                            <div class="opacity-0 mt-4 mb-9 fade-scroll text-white flex justify-center items-center text-[12px] md:text-[18px] text-center">
                                                @if ($undangan->nama_ayah_pria != '-' && $undangan->nama_ibu_pria != '-' && $undangan->anak_ke <= 0)
                                                    <p>Putra {{$anak_ke}} dari Bapak {{$undangan->nama_ayah_pria}} dan Ibu {{$undangan->nama_ibu_pria}}</p>
                                                @endif
                                            </div>
                                            <div class="flex justify-center items-center mb-5 fade-scroll">
                                                <div class=" w-48 h-72 md:w-64 md:h-64 rounded-full overflow-hidden ring-[14px] ring-white/40 shadow-2xl">
                                                    <img src="{{ asset('storage/'.$images->foto_mempelai_pria) }}" class="w-full h-full object-cover object-center" alt="mempelai perempuan">
                                                </div>
                                            </div>
                                            <div class="mb-3 mt-2">
                                                <div class="flex justify-center items-center fade-scroll">
                                                    @if ($undangan->fb_mempelai_pria != '-')
                                                        <div class=" w-5 h-5 md:w-10 md:h-10 rounded-full overflow-hidden ring-2 ring-white/40 shadow-2xl text-white">
                                                            <a href="https://www.facebook.com/{{ $undangan->fb_mempelai_pria }}" target="_blank" rel="noopener noreferrer" class="w-5 h-5">
                                                                <?xml version="1.0" encoding="UTF-8"?>
                                                                <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                                                                <!-- Creator: CorelDRAW 2020 (64-Bit Evaluation Version) -->
                                                                <svg class="w-full h-full object-cover object-center" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="100mm" height="100mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                                                    viewBox="0 0 10000 10000"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    xmlns:xodm="http://www.corel.com/coreldraw/odm/2003">
                                                                    <defs>
                                                                    <style type="text/css">
                                                                    <![CDATA[
                                                                        .fil0 {fill:currentColor}
                                                                    ]]>
                                                                    </style>
                                                                    </defs>
                                                                    <g id="Layer_x0020_1">
                                                                    <metadata id="CorelCorpID_0Corel-Layer"/>
                                                                    <path class="fil0" d="M5439.34 3476.12l0 533.84 803.7 0c-1.24,56.21 -25.93,242.54 -29.37,322.62 -3.63,84.37 -25.54,234.37 -29.33,322.65 -3.17,73.63 -17.56,145.71 -17.56,222.97l-727.44 0 0 2604.7 -1038.36 0 0 -2581.24c0,-13.51 -4.08,-17.6 -17.6,-17.6l-522.11 0 0 -874.1 539.71 0 0 -703.97c0,-155.07 26.22,-323.79 70.33,-434.18 100.35,-251.12 276.1,-410.5 535.94,-484.81 131.28,-37.55 278.24,-66.58 443.82,-66.58l791.97 0 0 897.57 -492.78 0c-88.53,0 -186.77,4.37 -238.26,43.33 -55.47,41.99 -72.66,120.49 -72.66,214.8zm-4417.44 1319.95c0,380.03 23.57,689.04 114.96,1052.46 62.72,249.44 147.33,512.36 262.45,740.73 14.81,29.4 26.98,52.4 41.14,82.05 129.88,272.11 298.92,527.01 489.4,760.15l58.55 70.51c13.33,13.99 14.87,17.92 26.66,32 11.02,13.16 20.72,19.63 31.74,32.8l448.89 431.07c179.24,156.33 385.13,288.74 593.07,404.22 112.23,62.33 214.84,114.12 336.38,168.14 474.26,210.78 904.29,295.58 1416.13,337.94 38.35,3.18 83.81,-1.06 123.08,0.12 39.09,1.17 74.33,8.72 123.03,6.09l234.57 -11.83c225.37,0.61 632.27,-87.02 849.46,-147.84 63.45,-17.75 126.41,-39.52 191.18,-61.08 65.01,-21.63 121.9,-43.63 183.83,-68.43 109.26,-43.75 240.63,-97.38 342.19,-156.44l164 -88.26c53.61,-28.99 105.34,-62.33 157.26,-95 126.1,-79.36 245.38,-167.67 362.33,-259.52l137.45 -114.79c14.54,-11.14 20.1,-17.12 33.67,-30.88l401.32 -414.12c111.25,-137.73 223.73,-278.12 314.05,-430.98 62.48,-105.75 128.95,-210.6 183.74,-320.78 492.24,-989.89 574.86,-2077.02 226.58,-3130.48 -46.5,-140.66 -98.72,-272.67 -162.14,-401.04 -7.56,-15.3 -11.47,-27.88 -19.45,-45.09 -97.12,-209.61 -238.68,-445.42 -376.04,-627.12l-342.13 -408.77c-31.89,-31.86 -56.89,-67.11 -92.86,-94.87 -34.92,-26.96 -62.13,-63.93 -94.92,-92.81 -13.47,-11.87 -18.6,-13.06 -32.34,-26.33 -190.25,-183.72 -463.4,-376.6 -688.84,-502.05 -70.69,-39.33 -173.35,-101.14 -244.81,-130.64 -34.82,-14.36 -54.85,-27.37 -88,-41.05l-172.68 -73.72c-186.96,-74.73 -378.1,-132.87 -574.61,-182.15 -130.21,-32.66 -274.78,-57.92 -422.44,-76.22 -34.34,-4.25 -71.63,-7.26 -110.8,-12.39 -114.05,-14.93 -244.81,-15.55 -359.57,-21.75 -44.89,-2.42 -82.12,2.65 -117.66,5.59 -38.88,3.21 -83.52,-1.85 -122.92,0.28l-113.93 9.26c-40.95,6 -77.07,5.17 -118.22,10.84 -293.99,40.52 -585.88,88.17 -864.84,191.12l-141.68 51.92c-126.03,46.55 -314.75,124.07 -428.5,193.34 -79.22,48.23 -165.88,86.32 -242.95,138.37 -172.59,116.54 -352.89,227.01 -505.35,368.75l-99.85 87.87c-11.91,11.78 -19.88,21.17 -32.08,32.45l-278.8 284.38c-126.4,135.86 -246.34,307.46 -348.69,460.89 -67.39,101.03 -132.57,209.3 -186.55,317.96 -6.61,13.3 -11.56,24.39 -20.09,38.59 -9.69,16.17 -14.89,23.33 -22.7,41.82l-117.26 258.19c-26.6,61.64 -45.8,118.97 -69.59,182.66 -95.27,254.95 -158.22,527.83 -197.61,805.57 -20.41,143.94 -36.21,307.84 -36.21,468.3z"/>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    @endif
                                                    @if ($undangan->ig_mempelai_pria != '-')
                                                        <div class=" w-5 h-5 md:w-10 md:h-10 rounded-full overflow-hidden ring-2 ring-white/40 text-white shadow-2xl ml-2">
                                                            <a href="https://www.instagram.com/{{ $undangan->ig_mempelai_pria }}" target="_blank" rel="noopener noreferrer" class="w-5 h-5">
                                                                <?xml version="1.0" encoding="UTF-8"?>
                                                                <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                                                                <!-- Creator: CorelDRAW 2020 (64-Bit Evaluation Version) -->
                                                                <svg class="w-full h-full object-cover object-center" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="100mm" height="100mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                                                    viewBox="0 0 10000 10000"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    xmlns:xodm="http://www.corel.com/coreldraw/odm/2003">
                                                                    <defs>
                                                                    <style type="text/css">
                                                                    <![CDATA[
                                                                        .fil0 {fill:currentColor}
                                                                    ]]>
                                                                    </style>
                                                                    </defs>
                                                                    <g id="Layer_x0020_1">
                                                                    <metadata id="CorelCorpID_0Corel-Layer"/>
                                                                    <g id="_2778592936208">
                                                                    <path class="fil0" d="M7278.63 5723.83l27.07 0 0 460.09 -27.07 0 0 189.44 -27.06 0 0 162.39 -27.07 0 0 81.18 -27.06 0 0 54.13 -27.06 0 0 54.13 -27.07 0 0 54.13 -27.06 0 0 27.06 -27.07 0 0 54.13 -27.06 0 0 27.06 -27.06 0 0 27.07 -27.07 0 0 27.05 -27.06 0 0 27.07 -27.07 0 0 27.06 -27.05 0 0 27.07 -27.07 0 0 27.06 -27.06 0 0 27.06 -54.13 0 0 27.07 -27.06 0 0 27.06 -54.13 0 0 27.07 -81.19 0 0 27.06 -54.13 0 0 27.06 -81.19 0 0 27.07 -162.38 0 0 27.06 -2652.23 0 0 -27.06 -108.25 0 0 -27.07 -108.25 0 0 -27.06 -81.19 0 0 -27.06 -54.13 0 0 -27.07 -54.13 0 0 -27.06 -27.06 0 0 -27.07 -54.13 0 0 -27.06 -27.07 0 0 -27.06 -27.05 0 0 -27.07 -27.07 0 0 -27.06 -27.06 0 0 -27.07 -27.07 0 0 -27.05 -27.06 0 0 -27.07 -54.13 0 0 -54.13 -27.06 0 0 -27.06 -27.07 0 0 -54.13 -27.06 0 0 -54.13 -27.06 0 0 -54.12 -27.07 0 0 -54.13 -27.06 0 0 -108.25 -27.07 0 0 -1623.81 -27.05 0 0 -1163.74 27.05 0 0 -135.32 27.07 0 0 -81.18 27.06 0 0 -81.19 27.07 0 0 -54.13 27.06 0 0 -54.13 27.06 0 0 -27.06 27.07 0 0 -54.13 27.06 0 0 -27.07 27.07 0 0 -27.05 27.06 0 0 -27.07 27.06 0 0 -27.06 27.07 0 0 -27.07 27.06 0 0 -27.06 27.07 0 0 -27.06 27.05 0 0 -27.07 27.07 0 0 -27.06 54.13 0 0 -27.07 27.06 0 0 -27.06 81.19 0 0 -27.06 54.13 0 0 -27.07 81.19 0 0 -27.06 135.32 0 0 -27.07 378.88 0 0 -27.05 784.85 0 0 27.05 27.06 0 0 -27.05 54.13 0 0 27.05 27.06 0 0 -27.05 27.07 0 0 27.05 54.12 0 0 -27.05 54.13 0 0 27.05 27.07 0 0 -27.05 81.18 0 0 27.05 378.89 0 0 -27.05 108.26 0 0 27.05 757.78 0 0 27.07 81.19 0 0 27.06 81.19 0 0 27.07 81.19 0 0 27.06 54.12 0 0 27.06 54.13 0 0 27.07 54.13 0 0 27.06 27.06 0 0 27.07 27.07 0 0 27.06 54.13 0 0 27.06 27.05 0 0 27.07 27.07 0 0 27.06 27.06 0 0 27.07 27.07 0 0 54.12 27.06 0 0 27.06 27.06 0 0 27.07 27.07 0 0 54.12 27.06 0 0 54.13 27.07 0 0 54.13 27.06 0 0 81.19 27.06 0 0 81.19 27.07 0 0 108.25 27.06 0 0 270.64 27.07 0 0 514.21 -27.07 0 0 1244.91zm-2300.4 -4519.6l-405.95 0 0 27.06 -189.44 0 0 27.07 -135.32 0 0 27.06 -108.26 0 0 27.07 -81.19 0 0 27.05 -108.26 0 0 27.07 -81.18 0 0 27.06 -81.2 0 0 27.07 -81.19 0 0 27.06 -54.12 0 0 27.06 -81.2 0 0 27.07 -54.12 0 0 27.06 -54.13 0 0 27.07 -54.12 0 0 27.05 -54.13 0 0 27.07 -54.13 0 0 27.07 -54.13 0 0 27.06 -54.13 0 0 27.07 -27.05 0 0 27.05 -54.13 0 0 27.07 -54.13 0 0 27.06 -27.06 0 0 27.07 -54.13 0 0 27.06 -27.07 0 0 27.06 -54.12 0 0 27.07 -27.07 0 0 27.06 -54.13 0 0 27.07 -27.05 0 0 27.06 -27.07 0 0 27.06 -54.13 0 0 27.07 -27.06 0 0 27.06 -27.06 0 0 27.06 -27.07 0 0 27.06 -27.06 0 0 27.07 -27.07 0 0 27.06 -54.12 0 0 27.07 -27.07 0 0 27.06 -27.06 0 0 27.06 -27.06 0 0 27.07 -27.06 0 0 27.06 -27.07 0 0 27.06 -27.06 0 0 27.07 -27.07 0 0 27.06 -27.06 0 0 27.07 -27.06 0 0 27.06 -27.07 0 0 27.06 -27.06 0 0 27.06 -27.06 0 0 54.13 -27.07 0 0 27.06 -27.06 0 0 27.07 -27.07 0 0 27.06 -27.06 0 0 54.13 -27.06 0 0 27.06 -27.06 0 0 27.07 -27.07 0 0 27.06 -27.06 0 0 54.12 -27.06 0 0 27.07 -27.07 0 0 54.13 -27.06 0 0 27.06 -27.07 0 0 54.13 -54.12 0 0 81.19 -27.07 0 0 27.06 -27.06 0 0 54.13 -27.07 0 0 54.12 -27.05 0 0 54.13 -54.13 0 0 54.13 -27.07 0 0 81.19 -27.06 0 0 27.07 -27.06 0 0 81.19 -27.07 0 0 27.06 -27.06 0 0 108.25 -27.07 0 0 54.13 -27.06 0 0 54.13 -27.06 0 0 108.25 -27.07 0 0 54.13 -27.06 0 0 108.25 -27.07 0 0 54.13 -27.05 0 0 135.32 -27.07 0 0 135.31 -27.06 0 0 162.39 -27.07 0 0 162.37 -27.06 0 0 27.07 27.06 0 0 27.06 -27.06 0 0 676.59 27.06 0 0 243.57 27.07 0 0 135.32 27.06 0 0 135.32 27.07 0 0 135.32 27.05 0 0 81.18 27.07 0 0 135.32 27.06 0 0 54.13 27.07 0 0 81.19 27.06 0 0 108.26 27.06 0 0 54.13 27.07 0 0 54.12 27.06 0 0 81.19 27.07 0 0 54.13 27.06 0 0 81.19 27.06 0 0 54.13 27.07 0 0 27.06 27.06 0 0 54.12 27.07 0 0 54.13 27.05 0 0 27.07 27.07 0 0 27.06 27.06 0 0 27.06 27.07 0 0 54.13 27.06 0 0 54.13 27.06 0 0 27.06 27.07 0 0 54.13 27.06 0 0 54.12 27.07 0 0 27.07 27.06 0 0 27.06 27.06 0 0 27.07 27.07 0 0 27.06 27.06 0 0 27.06 27.06 0 0 27.07 27.06 0 0 54.13 27.07 0 0 27.06 27.06 0 0 54.13 27.07 0 0 27.06 27.06 0 0 27.06 27.06 0 0 27.06 27.07 0 0 27.07 27.06 0 0 27.06 54.13 0 0 27.07 27.06 0 0 54.12 27.07 0 0 27.07 27.06 0 0 27.06 54.12 0 0 27.06 27.07 0 0 27.07 27.06 0 0 27.06 27.06 0 0 27.07 27.07 0 0 27.06 54.13 0 0 27.06 27.06 0 0 27.06 27.06 0 0 27.07 27.07 0 0 27.06 27.06 0 0 27.06 27.07 0 0 27.07 54.12 0 0 27.06 54.13 0 0 27.07 27.06 0 0 27.06 54.13 0 0 27.06 27.06 0 0 27.07 54.13 0 0 27.06 54.13 0 0 27.07 27.06 0 0 27.05 54.12 0 0 27.07 54.13 0 0 27.06 54.13 0 0 27.07 54.13 0 0 27.06 27.06 0 0 27.06 81.19 0 0 27.07 27.07 0 0 27.06 81.18 0 0 27.07 54.13 0 0 27.06 54.13 0 0 27.06 81.19 0 0 27.07 81.19 0 0 27.06 81.19 0 0 27.07 108.25 0 0 27.05 81.2 0 0 27.07 135.32 0 0 27.06 108.25 0 0 27.07 135.32 0 0 27.06 433.01 0 0 27.06 54.13 0 0 -27.06 270.63 0 0 27.06 108.26 0 0 -27.06 108.26 0 0 -27.06 216.5 0 0 -27.07 135.32 0 0 -27.06 162.38 0 0 -27.07 81.19 0 0 -27.05 108.26 0 0 -27.07 81.18 0 0 -27.06 81.2 0 0 -27.07 54.12 0 0 -27.06 81.19 0 0 -27.06 81.2 0 0 -27.07 54.12 0 0 -27.06 54.13 0 0 -27.07 54.12 0 0 -27.06 54.13 0 0 -27.06 54.13 0 0 -27.07 27.06 0 0 -27.06 81.2 0 0 -27.07 27.05 0 0 -27.05 54.13 0 0 -27.07 27.07 0 0 -27.06 54.12 0 0 -27.07 27.07 0 0 -27.06 54.13 0 0 -27.06 54.12 0 0 -27.07 27.07 0 0 -27.06 27.06 0 0 -27.07 54.12 0 0 -27.06 27.07 0 0 -27.06 27.06 0 0 -27.07 54.13 0 0 -27.06 27.06 0 0 -27.06 27.07 0 0 -27.06 27.06 0 0 -27.07 27.07 0 0 -27.06 27.06 0 0 -27.07 54.13 0 0 -27.06 27.06 0 0 -27.06 27.06 0 0 -27.07 27.06 0 0 -27.06 27.07 0 0 -27.06 27.06 0 0 -27.07 27.07 0 0 -27.06 27.06 0 0 -27.07 27.06 0 0 -54.12 27.07 0 0 -27.06 27.06 0 0 -27.07 27.06 0 0 -27.06 27.07 0 0 -27.06 27.06 0 0 -27.07 27.07 0 0 -27.06 27.06 0 0 -27.07 27.06 0 0 -54.12 27.06 0 0 -27.07 27.07 0 0 -27.06 27.06 0 0 -54.12 27.06 0 0 -27.07 27.07 0 0 -27.06 27.06 0 0 -54.13 27.07 0 0 -27.06 27.06 0 0 -54.13 27.06 0 0 -27.07 27.07 0 0 -54.12 27.06 0 0 -27.07 27.07 0 0 -54.13 27.05 0 0 -54.12 27.07 0 0 -54.13 27.06 0 0 -27.06 27.07 0 0 -54.13 27.06 0 0 -54.13 27.06 0 0 -54.12 27.07 0 0 -81.19 27.06 0 0 -54.13 27.07 0 0 -81.19 27.06 0 0 -54.13 27.06 0 0 -81.19 27.07 0 0 -81.19 27.06 0 0 -81.19 27.07 0 0 -108.25 27.05 0 0 -108.26 27.07 0 0 -108.25 27.06 0 0 -135.32 27.07 0 0 -216.5 27.06 0 0 -838.97 -27.06 0 0 -216.52 -27.07 0 0 -135.32 -27.06 0 0 -135.31 -27.07 0 0 -108.26 -27.05 0 0 -108.25 -27.07 0 0 -81.19 -27.06 0 0 -81.19 -27.07 0 0 -54.13 -27.06 0 0 -81.19 -27.06 0 0 -54.13 -27.07 0 0 -54.12 -27.06 0 0 -81.19 -27.07 0 0 -54.13 -27.06 0 0 -27.06 -27.06 0 0 -54.13 -27.07 0 0 -54.13 -27.06 0 0 -54.13 -27.07 0 0 -27.05 -27.05 0 0 -54.13 -27.07 0 0 -54.13 -27.06 0 0 -27.06 -27.07 0 0 -54.13 -27.06 0 0 -27.07 -27.06 0 0 -54.12 -27.07 0 0 -27.07 -27.06 0 0 -54.13 -27.07 0 0 -27.05 -27.06 0 0 -54.13 -27.06 0 0 -27.07 -27.07 0 0 -27.06 -27.06 0 0 -27.06 -27.06 0 0 -27.07 -27.06 0 0 -27.06 -27.07 0 0 -54.13 -27.06 0 0 -27.06 -27.07 0 0 -27.07 -27.06 0 0 -54.12 -27.06 0 0 -27.06 -27.07 0 0 -27.07 -27.06 0 0 -27.06 -27.06 0 0 -27.07 -54.13 0 0 -27.06 -27.07 0 0 -27.06 -27.06 0 0 -27.07 -27.06 0 0 -27.06 -27.06 0 0 -27.06 -27.07 0 0 -27.07 -27.06 0 0 -27.06 -27.06 0 0 -27.07 -54.13 0 0 -27.06 -27.07 0 0 -27.06 -27.06 0 0 -27.06 -27.06 0 0 -27.07 -54.13 0 0 -27.06 -27.07 0 0 -27.06 -27.05 0 0 -27.07 -54.13 0 0 -27.06 -27.07 0 0 -27.07 -27.06 0 0 -27.06 -54.13 0 0 -27.06 -27.06 0 0 -27.07 -54.13 0 0 -27.06 -27.06 0 0 -27.07 -54.13 0 0 -27.05 -54.12 0 0 -27.07 -27.07 0 0 -27.06 -54.13 0 0 -27.07 -54.12 0 0 -27.07 -54.13 0 0 -27.05 -54.13 0 0 -27.07 -54.13 0 0 -27.06 -54.12 0 0 -27.07 -81.19 0 0 -27.06 -54.13 0 0 -27.06 -81.19 0 0 -27.07 -81.19 0 0 -27.06 -108.25 0 0 -27.07 -108.26 0 0 -27.05 -81.19 0 0 -27.07 -108.26 0 0 -27.06 -135.32 0 0 -27.07 -189.44 0 0 -27.06 -405.95 0 0 -27.06 -162.38 0 0 27.06z"/>
                                                                    <path class="fil0" d="M6169.03 5182.57l27.06 0 0 27.06 -27.06 0 0 108.26 -27.07 0 0 108.25 -27.06 0 0 54.12 -27.06 0 0 81.2 -27.07 0 0 27.06 -27.06 0 0 54.13 -27.07 0 0 54.13 -27.06 0 0 27.05 -27.06 0 0 27.07 -27.07 0 0 27.07 -27.06 0 0 27.06 -27.07 0 0 27.07 -27.05 0 0 27.05 -27.07 0 0 27.07 -27.06 0 0 27.06 -27.07 0 0 27.07 -27.07 0 0 27.06 -27.05 0 0 27.06 -27.07 0 0 27.07 -54.13 0 0 27.06 -54.12 0 0 27.07 -54.13 0 0 27.05 -54.12 0 0 27.07 -81.2 0 0 27.07 -108.25 0 0 27.06 -433.02 0 0 -27.06 -81.19 0 0 -27.07 -108.26 0 0 -27.07 -54.12 0 0 -27.05 -81.19 0 0 -27.07 -27.06 0 0 -27.06 -54.13 0 0 -27.07 -27.07 0 0 -27.06 -54.12 0 0 -27.06 -27.07 0 0 -27.07 -27.06 0 0 -27.06 -27.07 0 0 -27.07 -27.05 0 0 -27.05 -27.07 0 0 -27.07 -27.06 0 0 -27.06 -27.07 0 0 -27.07 -27.06 0 0 -27.07 -27.06 0 0 -27.05 -27.07 0 0 -54.13 -27.06 0 0 -54.13 -27.07 0 0 -54.13 -27.06 0 0 -54.13 -27.06 0 0 -81.19 -27.07 0 0 -108.25 -27.06 0 0 -162.38 -27.06 0 0 -162.38 27.06 0 0 -135.32 27.06 0 0 -108.25 27.07 0 0 -81.2 27.06 0 0 -54.12 27.06 0 0 -54.13 27.07 0 0 -54.12 27.06 0 0 -54.13 27.07 0 0 -27.07 27.06 0 0 -54.12 27.06 0 0 -27.07 27.07 0 0 -27.06 27.06 0 0 -27.07 27.07 0 0 -27.05 27.05 0 0 -27.07 27.07 0 0 -27.06 27.06 0 0 -27.07 27.07 0 0 -27.06 27.07 0 0 -27.06 54.12 0 0 -27.07 27.06 0 0 -27.06 54.13 0 0 -27.07 54.13 0 0 -27.06 54.13 0 0 -27.06 54.12 0 0 -27.07 135.32 0 0 -27.06 81.19 0 0 -27.06 27.06 0 0 27.06 54.13 0 0 -27.06 216.51 0 0 27.06 108.25 0 0 27.06 81.19 0 0 27.07 81.2 0 0 27.06 54.12 0 0 27.06 54.13 0 0 27.07 27.06 0 0 27.06 54.13 0 0 27.07 54.13 0 0 27.06 27.05 0 0 27.06 27.07 0 0 27.07 27.07 0 0 27.06 27.06 0 0 27.07 27.07 0 0 27.05 27.05 0 0 27.07 27.07 0 0 27.06 27.06 0 0 27.07 27.07 0 0 54.12 27.06 0 0 27.07 27.06 0 0 54.13 27.07 0 0 54.12 27.06 0 0 27.07 27.07 0 0 54.13 27.06 0 0 81.18 27.06 0 0 81.19 27.07 0 0 162.39 27.06 0 0 135.32 -27.06 0 0 108.25zm-162.39 -1434.37l27.07 0 0 -54.13 27.06 0 0 -27.06 27.07 0 0 -27.06 27.06 0 0 -27.07 54.13 0 0 -27.06 135.31 0 0 27.06 54.13 0 0 27.07 54.13 0 0 54.12 27.06 0 0 54.13 27.06 0 0 108.26 -27.06 0 0 54.12 -27.06 0 0 54.13 -27.07 0 0 27.06 -27.06 0 0 27.06 -54.13 0 0 27.07 -162.38 0 0 -27.07 -27.06 0 0 -27.06 -27.06 0 0 -27.06 -27.07 0 0 -27.07 -27.06 0 0 -81.18 -27.07 0 0 -108.26zm-1271.98 -676.59l-838.97 0 0 27.07 -324.77 0 0 27.06 -81.18 0 0 27.07 -54.13 0 0 27.05 -54.13 0 0 27.07 -27.06 0 0 27.06 -54.13 0 0 27.07 -27.06 0 0 27.06 -27.07 0 0 27.06 -27.06 0 0 27.07 -27.07 0 0 54.13 -27.05 0 0 27.06 -27.07 0 0 54.13 -27.06 0 0 81.18 -27.07 0 0 108.26 -27.06 0 0 866.03 -27.06 0 0 1623.82 27.06 0 0 324.76 27.06 0 0 54.13 27.07 0 0 81.18 27.06 0 0 54.13 27.07 0 0 27.06 27.05 0 0 27.07 27.07 0 0 27.06 27.06 0 0 27.07 27.07 0 0 27.06 27.06 0 0 27.06 27.06 0 0 27.07 27.07 0 0 27.06 54.13 0 0 27.07 27.06 0 0 27.05 135.31 0 0 27.07 2949.93 0 0 -27.07 108.25 0 0 -27.05 54.13 0 0 -27.07 54.13 0 0 -27.06 27.06 0 0 -27.07 27.07 0 0 -27.06 27.06 0 0 -27.06 27.06 0 0 -27.07 27.07 0 0 -27.06 27.06 0 0 -54.13 27.07 0 0 -54.13 27.05 0 0 -54.12 27.07 0 0 -54.13 27.06 0 0 -108.25 27.07 0 0 -297.71 -27.07 0 0 -1813.25 27.07 0 0 -216.51 -27.07 0 0 -460.08 -27.06 0 0 -81.19 -27.07 0 0 -54.12 -27.05 0 0 -54.13 -27.07 0 0 -54.13 -27.06 0 0 -27.06 -27.07 0 0 -27.07 -27.06 0 0 -27.06 -27.06 0 0 -27.06 -27.07 0 0 -27.07 -27.06 0 0 -27.06 -54.13 0 0 -27.07 -54.13 0 0 -27.05 -54.12 0 0 -27.07 -81.19 0 0 -27.06 -216.51 0 0 -27.07 -216.51 0 0 -27.06 -1326.11 0 0 27.06z"/>
                                                                    <polygon class="fil0" points="4842.91,4262.4 4761.72,4262.4 4761.72,4289.47 4680.53,4289.47 4680.53,4316.53 4626.41,4316.53 4626.41,4343.6 4599.34,4343.6 4599.34,4370.67 4545.21,4370.67 4545.21,4397.72 4518.15,4397.72 4518.15,4424.79 4491.09,4424.79 4491.09,4451.85 4464.02,4451.85 4464.02,4478.92 4436.96,4478.92 4436.96,4505.98 4409.89,4505.98 4409.89,4533.04 4382.84,4533.04 4382.84,4587.17 4355.77,4587.17 4355.77,4641.29 4328.7,4641.29 4328.7,4668.36 4301.64,4668.36 4301.64,4722.49 4274.57,4722.49 4274.57,4776.61 4247.52,4776.61 4247.52,4884.87 4220.45,4884.87 4220.45,5182.57 4247.52,5182.57 4247.52,5317.89 4274.57,5317.89 4274.57,5372.01 4301.64,5372.01 4301.64,5426.14 4328.7,5426.14 4328.7,5480.26 4355.77,5480.26 4355.77,5507.33 4382.84,5507.33 4382.84,5561.46 4409.89,5561.46 4409.89,5588.52 4436.96,5588.52 4436.96,5615.58 4464.02,5615.58 4464.02,5642.65 4491.09,5642.65 4491.09,5669.71 4518.15,5669.71 4518.15,5696.78 4545.21,5696.78 4545.21,5723.83 4599.34,5723.83 4599.34,5750.9 4626.41,5750.9 4626.41,5777.97 4680.53,5777.97 4680.53,5805.03 4734.66,5805.03 4734.66,5832.1 4869.98,5832.1 4869.98,5859.15 5194.74,5859.15 5194.74,5832.1 5330.06,5832.1 5330.06,5805.03 5411.25,5805.03 5411.25,5777.97 5465.38,5777.97 5465.38,5750.9 5519.5,5750.9 5519.5,5723.83 5546.56,5723.83 5546.56,5696.78 5600.69,5696.78 5600.69,5669.71 5627.75,5669.71 5627.75,5642.65 5654.82,5642.65 5654.82,5615.58 5681.88,5615.58 5681.88,5561.46 5708.95,5561.46 5708.95,5534.39 5736,5534.39 5736,5480.26 5763.07,5480.26 5763.07,5453.21 5790.14,5453.21 5790.14,5399.07 5817.2,5399.07 5817.2,5317.89 5844.27,5317.89 5844.27,5209.63 5871.32,5209.63 5871.32,4884.87 5844.27,4884.87 5844.27,4776.61 5817.2,4776.61 5817.2,4695.42 5790.14,4695.42 5790.14,4641.29 5763.07,4641.29 5763.07,4587.17 5736,4587.17 5736,4560.11 5708.95,4560.11 5708.95,4505.98 5681.88,4505.98 5681.88,4478.92 5654.82,4478.92 5654.82,4451.85 5627.75,4451.85 5627.75,4424.79 5600.69,4424.79 5600.69,4397.72 5546.56,4397.72 5546.56,4370.67 5519.5,4370.67 5519.5,4343.6 5465.38,4343.6 5465.38,4316.53 5411.25,4316.53 5411.25,4289.47 5357.12,4289.47 5357.12,4262.4 5248.86,4262.4 5248.86,4235.35 4842.91,4235.35 "/>
                                                                    </g>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div> 
                                            
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="flex justify-center w-full h-[1400px] items-center p-2">
                        <div>
                            <div class="flex justify-center fade-scroll text-white mb-2">
                                <svg class="w-48 md:72 h-auto fill-current" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="100mm" height="40mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
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
                            <div class="opacity-0 flex justify-center mt-4 mb-4 text-white fade-scroll">
                                <h1 style="font-family: 'Sacramento', cursive; font-size: 25px;">Assalamualaikum Wr. Wb</h1>
                            </div>
                            <div class="opacity-0  flex justify-center items-center text-center mb-5 fade-scroll text-white">
                                <p class="w-10/12 text-[12px] md:text-sm">Dengan memohon Rahmat dan Ridho Allah SWT, Kami bermaksud mengundang Bapak/Ibu/Saudara/i untuk hadir dalam pernikahan kami</p>
                            </div>
                            <div class="flex justify-center mt-4">
                                <div>
                                    
                                    <div class="flex justify-center items-center">
                                        <div class="mt-3">
                                            <div class="opacity-0 fade-scroll flex justify-center mt-1 text-white">
                                                <h1 style="font-family: 'Sacramento', cursive;" class="text-4xl md:text-8xl">{{$undangan->nama_mempelai_pria}}</h1>
                                            </div>
                                            <div class="opacity-0 mt-4 mb-9 fade-scroll text-white flex justify-center items-center text-[12px] md:text-[18px] text-center">
                                                @if ($undangan->nama_ayah_pria != '-' && $undangan->nama_ibu_pria != '-' && $undangan->anak_ke <= 0)
                                                    <p>Putra {{$anak_ke}} dari Bapak {{$undangan->nama_ayah_pria}} dan Ibu {{$undangan->nama_ibu_pria}}</p>
                                                @endif
                                            </div>
                                            <div class="flex justify-center items-center mb-5 fade-scroll">
                                                <div class=" w-48 h-72 md:w-64 md:h-64 rounded-full overflow-hidden ring-[14px] ring-white/40 shadow-2xl">
                                                    <img src="{{ asset('storage/'.$images->foto_mempelai_pria) }}" class="w-full h-full object-cover object-center" alt="mempelai perempuan">
                                                </div>
                                            </div>
                                            <div class="mb-3 mt-2">
                                                <div class="flex justify-center items-center fade-scroll">
                                                    @if ($undangan->fb_mempelai_pria != '-')
                                                        <div class=" w-5 h-5 md:w-10 md:h-10 rounded-full overflow-hidden ring-2 ring-white/40 shadow-2xl text-white">
                                                            <a href="https://www.facebook.com/{{ $undangan->fb_mempelai_pria }}" target="_blank" rel="noopener noreferrer" class="w-5 h-5">
                                                                <?xml version="1.0" encoding="UTF-8"?>
                                                                <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                                                                <!-- Creator: CorelDRAW 2020 (64-Bit Evaluation Version) -->
                                                                <svg class="w-full h-full object-cover object-center" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="100mm" height="100mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                                                    viewBox="0 0 10000 10000"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    xmlns:xodm="http://www.corel.com/coreldraw/odm/2003">
                                                                    <defs>
                                                                    <style type="text/css">
                                                                    <![CDATA[
                                                                        .fil0 {fill:currentColor}
                                                                    ]]>
                                                                    </style>
                                                                    </defs>
                                                                    <g id="Layer_x0020_1">
                                                                    <metadata id="CorelCorpID_0Corel-Layer"/>
                                                                    <path class="fil0" d="M5439.34 3476.12l0 533.84 803.7 0c-1.24,56.21 -25.93,242.54 -29.37,322.62 -3.63,84.37 -25.54,234.37 -29.33,322.65 -3.17,73.63 -17.56,145.71 -17.56,222.97l-727.44 0 0 2604.7 -1038.36 0 0 -2581.24c0,-13.51 -4.08,-17.6 -17.6,-17.6l-522.11 0 0 -874.1 539.71 0 0 -703.97c0,-155.07 26.22,-323.79 70.33,-434.18 100.35,-251.12 276.1,-410.5 535.94,-484.81 131.28,-37.55 278.24,-66.58 443.82,-66.58l791.97 0 0 897.57 -492.78 0c-88.53,0 -186.77,4.37 -238.26,43.33 -55.47,41.99 -72.66,120.49 -72.66,214.8zm-4417.44 1319.95c0,380.03 23.57,689.04 114.96,1052.46 62.72,249.44 147.33,512.36 262.45,740.73 14.81,29.4 26.98,52.4 41.14,82.05 129.88,272.11 298.92,527.01 489.4,760.15l58.55 70.51c13.33,13.99 14.87,17.92 26.66,32 11.02,13.16 20.72,19.63 31.74,32.8l448.89 431.07c179.24,156.33 385.13,288.74 593.07,404.22 112.23,62.33 214.84,114.12 336.38,168.14 474.26,210.78 904.29,295.58 1416.13,337.94 38.35,3.18 83.81,-1.06 123.08,0.12 39.09,1.17 74.33,8.72 123.03,6.09l234.57 -11.83c225.37,0.61 632.27,-87.02 849.46,-147.84 63.45,-17.75 126.41,-39.52 191.18,-61.08 65.01,-21.63 121.9,-43.63 183.83,-68.43 109.26,-43.75 240.63,-97.38 342.19,-156.44l164 -88.26c53.61,-28.99 105.34,-62.33 157.26,-95 126.1,-79.36 245.38,-167.67 362.33,-259.52l137.45 -114.79c14.54,-11.14 20.1,-17.12 33.67,-30.88l401.32 -414.12c111.25,-137.73 223.73,-278.12 314.05,-430.98 62.48,-105.75 128.95,-210.6 183.74,-320.78 492.24,-989.89 574.86,-2077.02 226.58,-3130.48 -46.5,-140.66 -98.72,-272.67 -162.14,-401.04 -7.56,-15.3 -11.47,-27.88 -19.45,-45.09 -97.12,-209.61 -238.68,-445.42 -376.04,-627.12l-342.13 -408.77c-31.89,-31.86 -56.89,-67.11 -92.86,-94.87 -34.92,-26.96 -62.13,-63.93 -94.92,-92.81 -13.47,-11.87 -18.6,-13.06 -32.34,-26.33 -190.25,-183.72 -463.4,-376.6 -688.84,-502.05 -70.69,-39.33 -173.35,-101.14 -244.81,-130.64 -34.82,-14.36 -54.85,-27.37 -88,-41.05l-172.68 -73.72c-186.96,-74.73 -378.1,-132.87 -574.61,-182.15 -130.21,-32.66 -274.78,-57.92 -422.44,-76.22 -34.34,-4.25 -71.63,-7.26 -110.8,-12.39 -114.05,-14.93 -244.81,-15.55 -359.57,-21.75 -44.89,-2.42 -82.12,2.65 -117.66,5.59 -38.88,3.21 -83.52,-1.85 -122.92,0.28l-113.93 9.26c-40.95,6 -77.07,5.17 -118.22,10.84 -293.99,40.52 -585.88,88.17 -864.84,191.12l-141.68 51.92c-126.03,46.55 -314.75,124.07 -428.5,193.34 -79.22,48.23 -165.88,86.32 -242.95,138.37 -172.59,116.54 -352.89,227.01 -505.35,368.75l-99.85 87.87c-11.91,11.78 -19.88,21.17 -32.08,32.45l-278.8 284.38c-126.4,135.86 -246.34,307.46 -348.69,460.89 -67.39,101.03 -132.57,209.3 -186.55,317.96 -6.61,13.3 -11.56,24.39 -20.09,38.59 -9.69,16.17 -14.89,23.33 -22.7,41.82l-117.26 258.19c-26.6,61.64 -45.8,118.97 -69.59,182.66 -95.27,254.95 -158.22,527.83 -197.61,805.57 -20.41,143.94 -36.21,307.84 -36.21,468.3z"/>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    @endif
                                                    @if ($undangan->ig_mempelai_pria != '-')
                                                        <div class=" w-5 h-5 md:w-10 md:h-10 rounded-full overflow-hidden ring-2 ring-white/40 text-white shadow-2xl ml-2">
                                                            <a href="https://www.instagram.com/{{ $undangan->ig_mempelai_pria }}" target="_blank" rel="noopener noreferrer" class="w-5 h-5">
                                                                <?xml version="1.0" encoding="UTF-8"?>
                                                                <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                                                                <!-- Creator: CorelDRAW 2020 (64-Bit Evaluation Version) -->
                                                                <svg class="w-full h-full object-cover object-center" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="100mm" height="100mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                                                    viewBox="0 0 10000 10000"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    xmlns:xodm="http://www.corel.com/coreldraw/odm/2003">
                                                                    <defs>
                                                                    <style type="text/css">
                                                                    <![CDATA[
                                                                        .fil0 {fill:currentColor}
                                                                    ]]>
                                                                    </style>
                                                                    </defs>
                                                                    <g id="Layer_x0020_1">
                                                                    <metadata id="CorelCorpID_0Corel-Layer"/>
                                                                    <g id="_2778592936208">
                                                                    <path class="fil0" d="M7278.63 5723.83l27.07 0 0 460.09 -27.07 0 0 189.44 -27.06 0 0 162.39 -27.07 0 0 81.18 -27.06 0 0 54.13 -27.06 0 0 54.13 -27.07 0 0 54.13 -27.06 0 0 27.06 -27.07 0 0 54.13 -27.06 0 0 27.06 -27.06 0 0 27.07 -27.07 0 0 27.05 -27.06 0 0 27.07 -27.07 0 0 27.06 -27.05 0 0 27.07 -27.07 0 0 27.06 -27.06 0 0 27.06 -54.13 0 0 27.07 -27.06 0 0 27.06 -54.13 0 0 27.07 -81.19 0 0 27.06 -54.13 0 0 27.06 -81.19 0 0 27.07 -162.38 0 0 27.06 -2652.23 0 0 -27.06 -108.25 0 0 -27.07 -108.25 0 0 -27.06 -81.19 0 0 -27.06 -54.13 0 0 -27.07 -54.13 0 0 -27.06 -27.06 0 0 -27.07 -54.13 0 0 -27.06 -27.07 0 0 -27.06 -27.05 0 0 -27.07 -27.07 0 0 -27.06 -27.06 0 0 -27.07 -27.07 0 0 -27.05 -27.06 0 0 -27.07 -54.13 0 0 -54.13 -27.06 0 0 -27.06 -27.07 0 0 -54.13 -27.06 0 0 -54.13 -27.06 0 0 -54.12 -27.07 0 0 -54.13 -27.06 0 0 -108.25 -27.07 0 0 -1623.81 -27.05 0 0 -1163.74 27.05 0 0 -135.32 27.07 0 0 -81.18 27.06 0 0 -81.19 27.07 0 0 -54.13 27.06 0 0 -54.13 27.06 0 0 -27.06 27.07 0 0 -54.13 27.06 0 0 -27.07 27.07 0 0 -27.05 27.06 0 0 -27.07 27.06 0 0 -27.06 27.07 0 0 -27.07 27.06 0 0 -27.06 27.07 0 0 -27.06 27.05 0 0 -27.07 27.07 0 0 -27.06 54.13 0 0 -27.07 27.06 0 0 -27.06 81.19 0 0 -27.06 54.13 0 0 -27.07 81.19 0 0 -27.06 135.32 0 0 -27.07 378.88 0 0 -27.05 784.85 0 0 27.05 27.06 0 0 -27.05 54.13 0 0 27.05 27.06 0 0 -27.05 27.07 0 0 27.05 54.12 0 0 -27.05 54.13 0 0 27.05 27.07 0 0 -27.05 81.18 0 0 27.05 378.89 0 0 -27.05 108.26 0 0 27.05 757.78 0 0 27.07 81.19 0 0 27.06 81.19 0 0 27.07 81.19 0 0 27.06 54.12 0 0 27.06 54.13 0 0 27.07 54.13 0 0 27.06 27.06 0 0 27.07 27.07 0 0 27.06 54.13 0 0 27.06 27.05 0 0 27.07 27.07 0 0 27.06 27.06 0 0 27.07 27.07 0 0 54.12 27.06 0 0 27.06 27.06 0 0 27.07 27.07 0 0 54.12 27.06 0 0 54.13 27.07 0 0 54.13 27.06 0 0 81.19 27.06 0 0 81.19 27.07 0 0 108.25 27.06 0 0 270.64 27.07 0 0 514.21 -27.07 0 0 1244.91zm-2300.4 -4519.6l-405.95 0 0 27.06 -189.44 0 0 27.07 -135.32 0 0 27.06 -108.26 0 0 27.07 -81.19 0 0 27.05 -108.26 0 0 27.07 -81.18 0 0 27.06 -81.2 0 0 27.07 -81.19 0 0 27.06 -54.12 0 0 27.06 -81.2 0 0 27.07 -54.12 0 0 27.06 -54.13 0 0 27.07 -54.12 0 0 27.05 -54.13 0 0 27.07 -54.13 0 0 27.07 -54.13 0 0 27.06 -54.13 0 0 27.07 -27.05 0 0 27.05 -54.13 0 0 27.07 -54.13 0 0 27.06 -27.06 0 0 27.07 -54.13 0 0 27.06 -27.07 0 0 27.06 -54.12 0 0 27.07 -27.07 0 0 27.06 -54.13 0 0 27.07 -27.05 0 0 27.06 -27.07 0 0 27.06 -54.13 0 0 27.07 -27.06 0 0 27.06 -27.06 0 0 27.06 -27.07 0 0 27.06 -27.06 0 0 27.07 -27.07 0 0 27.06 -54.12 0 0 27.07 -27.07 0 0 27.06 -27.06 0 0 27.06 -27.06 0 0 27.07 -27.06 0 0 27.06 -27.07 0 0 27.06 -27.06 0 0 27.07 -27.07 0 0 27.06 -27.06 0 0 27.07 -27.06 0 0 27.06 -27.07 0 0 27.06 -27.06 0 0 27.06 -27.06 0 0 54.13 -27.07 0 0 27.06 -27.06 0 0 27.07 -27.07 0 0 27.06 -27.06 0 0 54.13 -27.06 0 0 27.06 -27.06 0 0 27.07 -27.07 0 0 27.06 -27.06 0 0 54.12 -27.06 0 0 27.07 -27.07 0 0 54.13 -27.06 0 0 27.06 -27.07 0 0 54.13 -54.12 0 0 81.19 -27.07 0 0 27.06 -27.06 0 0 54.13 -27.07 0 0 54.12 -27.05 0 0 54.13 -54.13 0 0 54.13 -27.07 0 0 81.19 -27.06 0 0 27.07 -27.06 0 0 81.19 -27.07 0 0 27.06 -27.06 0 0 108.25 -27.07 0 0 54.13 -27.06 0 0 54.13 -27.06 0 0 108.25 -27.07 0 0 54.13 -27.06 0 0 108.25 -27.07 0 0 54.13 -27.05 0 0 135.32 -27.07 0 0 135.31 -27.06 0 0 162.39 -27.07 0 0 162.37 -27.06 0 0 27.07 27.06 0 0 27.06 -27.06 0 0 676.59 27.06 0 0 243.57 27.07 0 0 135.32 27.06 0 0 135.32 27.07 0 0 135.32 27.05 0 0 81.18 27.07 0 0 135.32 27.06 0 0 54.13 27.07 0 0 81.19 27.06 0 0 108.26 27.06 0 0 54.13 27.07 0 0 54.12 27.06 0 0 81.19 27.07 0 0 54.13 27.06 0 0 81.19 27.06 0 0 54.13 27.07 0 0 27.06 27.06 0 0 54.12 27.07 0 0 54.13 27.05 0 0 27.07 27.07 0 0 27.06 27.06 0 0 27.06 27.07 0 0 54.13 27.06 0 0 54.13 27.06 0 0 27.06 27.07 0 0 54.13 27.06 0 0 54.12 27.07 0 0 27.07 27.06 0 0 27.06 27.06 0 0 27.07 27.07 0 0 27.06 27.06 0 0 27.06 27.06 0 0 27.07 27.06 0 0 54.13 27.07 0 0 27.06 27.06 0 0 54.13 27.07 0 0 27.06 27.06 0 0 27.06 27.06 0 0 27.06 27.07 0 0 27.07 27.06 0 0 27.06 54.13 0 0 27.07 27.06 0 0 54.12 27.07 0 0 27.07 27.06 0 0 27.06 54.12 0 0 27.06 27.07 0 0 27.07 27.06 0 0 27.06 27.06 0 0 27.07 27.07 0 0 27.06 54.13 0 0 27.06 27.06 0 0 27.06 27.06 0 0 27.07 27.07 0 0 27.06 27.06 0 0 27.06 27.07 0 0 27.07 54.12 0 0 27.06 54.13 0 0 27.07 27.06 0 0 27.06 54.13 0 0 27.06 27.06 0 0 27.07 54.13 0 0 27.06 54.13 0 0 27.07 27.06 0 0 27.05 54.12 0 0 27.07 54.13 0 0 27.06 54.13 0 0 27.07 54.13 0 0 27.06 27.06 0 0 27.06 81.19 0 0 27.07 27.07 0 0 27.06 81.18 0 0 27.07 54.13 0 0 27.06 54.13 0 0 27.06 81.19 0 0 27.07 81.19 0 0 27.06 81.19 0 0 27.07 108.25 0 0 27.05 81.2 0 0 27.07 135.32 0 0 27.06 108.25 0 0 27.07 135.32 0 0 27.06 433.01 0 0 27.06 54.13 0 0 -27.06 270.63 0 0 27.06 108.26 0 0 -27.06 108.26 0 0 -27.06 216.5 0 0 -27.07 135.32 0 0 -27.06 162.38 0 0 -27.07 81.19 0 0 -27.05 108.26 0 0 -27.07 81.18 0 0 -27.06 81.2 0 0 -27.07 54.12 0 0 -27.06 81.19 0 0 -27.06 81.2 0 0 -27.07 54.12 0 0 -27.06 54.13 0 0 -27.07 54.12 0 0 -27.06 54.13 0 0 -27.06 54.13 0 0 -27.07 27.06 0 0 -27.06 81.2 0 0 -27.07 27.05 0 0 -27.05 54.13 0 0 -27.07 27.07 0 0 -27.06 54.12 0 0 -27.07 27.07 0 0 -27.06 54.13 0 0 -27.06 54.12 0 0 -27.07 27.07 0 0 -27.06 27.06 0 0 -27.07 54.12 0 0 -27.06 27.07 0 0 -27.06 27.06 0 0 -27.07 54.13 0 0 -27.06 27.06 0 0 -27.06 27.07 0 0 -27.06 27.06 0 0 -27.07 27.07 0 0 -27.06 27.06 0 0 -27.07 54.13 0 0 -27.06 27.06 0 0 -27.06 27.06 0 0 -27.07 27.06 0 0 -27.06 27.07 0 0 -27.06 27.06 0 0 -27.07 27.07 0 0 -27.06 27.06 0 0 -27.07 27.06 0 0 -54.12 27.07 0 0 -27.06 27.06 0 0 -27.07 27.06 0 0 -27.06 27.07 0 0 -27.06 27.06 0 0 -27.07 27.07 0 0 -27.06 27.06 0 0 -27.07 27.06 0 0 -54.12 27.06 0 0 -27.07 27.07 0 0 -27.06 27.06 0 0 -54.12 27.06 0 0 -27.07 27.07 0 0 -27.06 27.06 0 0 -54.13 27.07 0 0 -27.06 27.06 0 0 -54.13 27.06 0 0 -27.07 27.07 0 0 -54.12 27.06 0 0 -27.07 27.07 0 0 -54.13 27.05 0 0 -54.12 27.07 0 0 -54.13 27.06 0 0 -27.06 27.07 0 0 -54.13 27.06 0 0 -54.13 27.06 0 0 -54.12 27.07 0 0 -81.19 27.06 0 0 -54.13 27.07 0 0 -81.19 27.06 0 0 -54.13 27.06 0 0 -81.19 27.07 0 0 -81.19 27.06 0 0 -81.19 27.07 0 0 -108.25 27.05 0 0 -108.26 27.07 0 0 -108.25 27.06 0 0 -135.32 27.07 0 0 -216.5 27.06 0 0 -838.97 -27.06 0 0 -216.52 -27.07 0 0 -135.32 -27.06 0 0 -135.31 -27.07 0 0 -108.26 -27.05 0 0 -108.25 -27.07 0 0 -81.19 -27.06 0 0 -81.19 -27.07 0 0 -54.13 -27.06 0 0 -81.19 -27.06 0 0 -54.13 -27.07 0 0 -54.12 -27.06 0 0 -81.19 -27.07 0 0 -54.13 -27.06 0 0 -27.06 -27.06 0 0 -54.13 -27.07 0 0 -54.13 -27.06 0 0 -54.13 -27.07 0 0 -27.05 -27.05 0 0 -54.13 -27.07 0 0 -54.13 -27.06 0 0 -27.06 -27.07 0 0 -54.13 -27.06 0 0 -27.07 -27.06 0 0 -54.12 -27.07 0 0 -27.07 -27.06 0 0 -54.13 -27.07 0 0 -27.05 -27.06 0 0 -54.13 -27.06 0 0 -27.07 -27.07 0 0 -27.06 -27.06 0 0 -27.06 -27.06 0 0 -27.07 -27.06 0 0 -27.06 -27.07 0 0 -54.13 -27.06 0 0 -27.06 -27.07 0 0 -27.07 -27.06 0 0 -54.12 -27.06 0 0 -27.06 -27.07 0 0 -27.07 -27.06 0 0 -27.06 -27.06 0 0 -27.07 -54.13 0 0 -27.06 -27.07 0 0 -27.06 -27.06 0 0 -27.07 -27.06 0 0 -27.06 -27.06 0 0 -27.06 -27.07 0 0 -27.07 -27.06 0 0 -27.06 -27.06 0 0 -27.07 -54.13 0 0 -27.06 -27.07 0 0 -27.06 -27.06 0 0 -27.06 -27.06 0 0 -27.07 -54.13 0 0 -27.06 -27.07 0 0 -27.06 -27.05 0 0 -27.07 -54.13 0 0 -27.06 -27.07 0 0 -27.07 -27.06 0 0 -27.06 -54.13 0 0 -27.06 -27.06 0 0 -27.07 -54.13 0 0 -27.06 -27.06 0 0 -27.07 -54.13 0 0 -27.05 -54.12 0 0 -27.07 -27.07 0 0 -27.06 -54.13 0 0 -27.07 -54.12 0 0 -27.07 -54.13 0 0 -27.05 -54.13 0 0 -27.07 -54.13 0 0 -27.06 -54.12 0 0 -27.07 -81.19 0 0 -27.06 -54.13 0 0 -27.06 -81.19 0 0 -27.07 -81.19 0 0 -27.06 -108.25 0 0 -27.07 -108.26 0 0 -27.05 -81.19 0 0 -27.07 -108.26 0 0 -27.06 -135.32 0 0 -27.07 -189.44 0 0 -27.06 -405.95 0 0 -27.06 -162.38 0 0 27.06z"/>
                                                                    <path class="fil0" d="M6169.03 5182.57l27.06 0 0 27.06 -27.06 0 0 108.26 -27.07 0 0 108.25 -27.06 0 0 54.12 -27.06 0 0 81.2 -27.07 0 0 27.06 -27.06 0 0 54.13 -27.07 0 0 54.13 -27.06 0 0 27.05 -27.06 0 0 27.07 -27.07 0 0 27.07 -27.06 0 0 27.06 -27.07 0 0 27.07 -27.05 0 0 27.05 -27.07 0 0 27.07 -27.06 0 0 27.06 -27.07 0 0 27.07 -27.07 0 0 27.06 -27.05 0 0 27.06 -27.07 0 0 27.07 -54.13 0 0 27.06 -54.12 0 0 27.07 -54.13 0 0 27.05 -54.12 0 0 27.07 -81.2 0 0 27.07 -108.25 0 0 27.06 -433.02 0 0 -27.06 -81.19 0 0 -27.07 -108.26 0 0 -27.07 -54.12 0 0 -27.05 -81.19 0 0 -27.07 -27.06 0 0 -27.06 -54.13 0 0 -27.07 -27.07 0 0 -27.06 -54.12 0 0 -27.06 -27.07 0 0 -27.07 -27.06 0 0 -27.06 -27.07 0 0 -27.07 -27.05 0 0 -27.05 -27.07 0 0 -27.07 -27.06 0 0 -27.06 -27.07 0 0 -27.07 -27.06 0 0 -27.07 -27.06 0 0 -27.05 -27.07 0 0 -54.13 -27.06 0 0 -54.13 -27.07 0 0 -54.13 -27.06 0 0 -54.13 -27.06 0 0 -81.19 -27.07 0 0 -108.25 -27.06 0 0 -162.38 -27.06 0 0 -162.38 27.06 0 0 -135.32 27.06 0 0 -108.25 27.07 0 0 -81.2 27.06 0 0 -54.12 27.06 0 0 -54.13 27.07 0 0 -54.12 27.06 0 0 -54.13 27.07 0 0 -27.07 27.06 0 0 -54.12 27.06 0 0 -27.07 27.07 0 0 -27.06 27.06 0 0 -27.07 27.07 0 0 -27.05 27.05 0 0 -27.07 27.07 0 0 -27.06 27.06 0 0 -27.07 27.07 0 0 -27.06 27.07 0 0 -27.06 54.12 0 0 -27.07 27.06 0 0 -27.06 54.13 0 0 -27.07 54.13 0 0 -27.06 54.13 0 0 -27.06 54.12 0 0 -27.07 135.32 0 0 -27.06 81.19 0 0 -27.06 27.06 0 0 27.06 54.13 0 0 -27.06 216.51 0 0 27.06 108.25 0 0 27.06 81.19 0 0 27.07 81.2 0 0 27.06 54.12 0 0 27.06 54.13 0 0 27.07 27.06 0 0 27.06 54.13 0 0 27.07 54.13 0 0 27.06 27.05 0 0 27.06 27.07 0 0 27.07 27.07 0 0 27.06 27.06 0 0 27.07 27.07 0 0 27.05 27.05 0 0 27.07 27.07 0 0 27.06 27.06 0 0 27.07 27.07 0 0 54.12 27.06 0 0 27.07 27.06 0 0 54.13 27.07 0 0 54.12 27.06 0 0 27.07 27.07 0 0 54.13 27.06 0 0 81.18 27.06 0 0 81.19 27.07 0 0 162.39 27.06 0 0 135.32 -27.06 0 0 108.25zm-162.39 -1434.37l27.07 0 0 -54.13 27.06 0 0 -27.06 27.07 0 0 -27.06 27.06 0 0 -27.07 54.13 0 0 -27.06 135.31 0 0 27.06 54.13 0 0 27.07 54.13 0 0 54.12 27.06 0 0 54.13 27.06 0 0 108.26 -27.06 0 0 54.12 -27.06 0 0 54.13 -27.07 0 0 27.06 -27.06 0 0 27.06 -54.13 0 0 27.07 -162.38 0 0 -27.07 -27.06 0 0 -27.06 -27.06 0 0 -27.06 -27.07 0 0 -27.07 -27.06 0 0 -81.18 -27.07 0 0 -108.26zm-1271.98 -676.59l-838.97 0 0 27.07 -324.77 0 0 27.06 -81.18 0 0 27.07 -54.13 0 0 27.05 -54.13 0 0 27.07 -27.06 0 0 27.06 -54.13 0 0 27.07 -27.06 0 0 27.06 -27.07 0 0 27.06 -27.06 0 0 27.07 -27.07 0 0 54.13 -27.05 0 0 27.06 -27.07 0 0 54.13 -27.06 0 0 81.18 -27.07 0 0 108.26 -27.06 0 0 866.03 -27.06 0 0 1623.82 27.06 0 0 324.76 27.06 0 0 54.13 27.07 0 0 81.18 27.06 0 0 54.13 27.07 0 0 27.06 27.05 0 0 27.07 27.07 0 0 27.06 27.06 0 0 27.07 27.07 0 0 27.06 27.06 0 0 27.06 27.06 0 0 27.07 27.07 0 0 27.06 54.13 0 0 27.07 27.06 0 0 27.05 135.31 0 0 27.07 2949.93 0 0 -27.07 108.25 0 0 -27.05 54.13 0 0 -27.07 54.13 0 0 -27.06 27.06 0 0 -27.07 27.07 0 0 -27.06 27.06 0 0 -27.06 27.06 0 0 -27.07 27.07 0 0 -27.06 27.06 0 0 -54.13 27.07 0 0 -54.13 27.05 0 0 -54.12 27.07 0 0 -54.13 27.06 0 0 -108.25 27.07 0 0 -297.71 -27.07 0 0 -1813.25 27.07 0 0 -216.51 -27.07 0 0 -460.08 -27.06 0 0 -81.19 -27.07 0 0 -54.12 -27.05 0 0 -54.13 -27.07 0 0 -54.13 -27.06 0 0 -27.06 -27.07 0 0 -27.07 -27.06 0 0 -27.06 -27.06 0 0 -27.06 -27.07 0 0 -27.07 -27.06 0 0 -27.06 -54.13 0 0 -27.07 -54.13 0 0 -27.05 -54.12 0 0 -27.07 -81.19 0 0 -27.06 -216.51 0 0 -27.07 -216.51 0 0 -27.06 -1326.11 0 0 27.06z"/>
                                                                    <polygon class="fil0" points="4842.91,4262.4 4761.72,4262.4 4761.72,4289.47 4680.53,4289.47 4680.53,4316.53 4626.41,4316.53 4626.41,4343.6 4599.34,4343.6 4599.34,4370.67 4545.21,4370.67 4545.21,4397.72 4518.15,4397.72 4518.15,4424.79 4491.09,4424.79 4491.09,4451.85 4464.02,4451.85 4464.02,4478.92 4436.96,4478.92 4436.96,4505.98 4409.89,4505.98 4409.89,4533.04 4382.84,4533.04 4382.84,4587.17 4355.77,4587.17 4355.77,4641.29 4328.7,4641.29 4328.7,4668.36 4301.64,4668.36 4301.64,4722.49 4274.57,4722.49 4274.57,4776.61 4247.52,4776.61 4247.52,4884.87 4220.45,4884.87 4220.45,5182.57 4247.52,5182.57 4247.52,5317.89 4274.57,5317.89 4274.57,5372.01 4301.64,5372.01 4301.64,5426.14 4328.7,5426.14 4328.7,5480.26 4355.77,5480.26 4355.77,5507.33 4382.84,5507.33 4382.84,5561.46 4409.89,5561.46 4409.89,5588.52 4436.96,5588.52 4436.96,5615.58 4464.02,5615.58 4464.02,5642.65 4491.09,5642.65 4491.09,5669.71 4518.15,5669.71 4518.15,5696.78 4545.21,5696.78 4545.21,5723.83 4599.34,5723.83 4599.34,5750.9 4626.41,5750.9 4626.41,5777.97 4680.53,5777.97 4680.53,5805.03 4734.66,5805.03 4734.66,5832.1 4869.98,5832.1 4869.98,5859.15 5194.74,5859.15 5194.74,5832.1 5330.06,5832.1 5330.06,5805.03 5411.25,5805.03 5411.25,5777.97 5465.38,5777.97 5465.38,5750.9 5519.5,5750.9 5519.5,5723.83 5546.56,5723.83 5546.56,5696.78 5600.69,5696.78 5600.69,5669.71 5627.75,5669.71 5627.75,5642.65 5654.82,5642.65 5654.82,5615.58 5681.88,5615.58 5681.88,5561.46 5708.95,5561.46 5708.95,5534.39 5736,5534.39 5736,5480.26 5763.07,5480.26 5763.07,5453.21 5790.14,5453.21 5790.14,5399.07 5817.2,5399.07 5817.2,5317.89 5844.27,5317.89 5844.27,5209.63 5871.32,5209.63 5871.32,4884.87 5844.27,4884.87 5844.27,4776.61 5817.2,4776.61 5817.2,4695.42 5790.14,4695.42 5790.14,4641.29 5763.07,4641.29 5763.07,4587.17 5736,4587.17 5736,4560.11 5708.95,4560.11 5708.95,4505.98 5681.88,4505.98 5681.88,4478.92 5654.82,4478.92 5654.82,4451.85 5627.75,4451.85 5627.75,4424.79 5600.69,4424.79 5600.69,4397.72 5546.56,4397.72 5546.56,4370.67 5519.5,4370.67 5519.5,4343.6 5465.38,4343.6 5465.38,4316.53 5411.25,4316.53 5411.25,4289.47 5357.12,4289.47 5357.12,4262.4 5248.86,4262.4 5248.86,4235.35 4842.91,4235.35 "/>
                                                                    </g>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-center items-center mb-2 mt-5 fade-scroll text-white">
                                <div class="flex justify-center items-center text-[90px] md:text-[110px]">
                                    <h1 style="font-family: 'Sacramento', cursive;">&</h1>
                                </div>
                            </div>
                            <div class="flex justify-center">
                                <div>
                                    <div class="flex justify-center items-center">
                                        <div class="p-2">
                                            <div class="opacity-0 fade-scroll text-white flex justify-center mt-5">
                                                <h1 style="font-family: 'Sacramento', cursive;" class="text-4xl md:text-8xl">{{$undangan->nama_mempelai_wanita}}</h1>
                                            </div>
                                            <div class="opacity-0 fade-scroll text-white mt-3 flex justify-center items-center text-[12px] md:text-[18px] text-center">
                                                @if ($undangan->nama_ayah_wanita != '-' && $undangan->nama_ibu_wanita != '-' && $undangan->anak_ke <= 0)
                                                    <p>Putri {{$anak_ke}} dari Bapak {{$undangan->nama_ayah_wanita}} dan Ibu {{$undangan->nama_ibu_wanita}}</p>
                                                @endif
                                            </div>
                                            <div class="flex justify-center items-center mt-5 mb-5 fade-scroll">
                                                <div class=" w-48 h-72 md:w-64 md:h-64 rounded-full overflow-hidden ring-[14px] ring-white/40 shadow-2xl">
                                                    <img src="{{ asset('storage/'.$images->foto_mempelai_wanita) }}" class="w-full h-full object-cover object-center" alt="mempelai perempuan">
                                                </div>
                                            </div>
                                            <div class="mt-2">
                                                <div class="flex justify-center items-center fade-scroll">
                                                    @if ($undangan->fb_mempelai_wanita != '-')
                                                        <div class=" w-5 h-5 md:w-10 md:h-10 rounded-full overflow-hidden ring-2 ring-white/40 shadow-2xl text-white">
                                                            <a href="https://www.facebook.com/{{ $undangan->fb_mempelai_wanita }}" target="_blank" rel="noopener noreferrer" class="w-5 h-5">
                                                                <?xml version="1.0" encoding="UTF-8"?>
                                                                <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                                                                <!-- Creator: CorelDRAW 2020 (64-Bit Evaluation Version) -->
                                                                <svg class="w-full h-full object-cover object-center" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="100mm" height="100mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                                                    viewBox="0 0 10000 10000"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    xmlns:xodm="http://www.corel.com/coreldraw/odm/2003">
                                                                    <defs>
                                                                    <style type="text/css">
                                                                    <![CDATA[
                                                                        .fil0 {fill:currentColor}
                                                                    ]]>
                                                                    </style>
                                                                    </defs>
                                                                    <g id="Layer_x0020_1">
                                                                    <metadata id="CorelCorpID_0Corel-Layer"/>
                                                                    <path class="fil0" d="M5439.34 3476.12l0 533.84 803.7 0c-1.24,56.21 -25.93,242.54 -29.37,322.62 -3.63,84.37 -25.54,234.37 -29.33,322.65 -3.17,73.63 -17.56,145.71 -17.56,222.97l-727.44 0 0 2604.7 -1038.36 0 0 -2581.24c0,-13.51 -4.08,-17.6 -17.6,-17.6l-522.11 0 0 -874.1 539.71 0 0 -703.97c0,-155.07 26.22,-323.79 70.33,-434.18 100.35,-251.12 276.1,-410.5 535.94,-484.81 131.28,-37.55 278.24,-66.58 443.82,-66.58l791.97 0 0 897.57 -492.78 0c-88.53,0 -186.77,4.37 -238.26,43.33 -55.47,41.99 -72.66,120.49 -72.66,214.8zm-4417.44 1319.95c0,380.03 23.57,689.04 114.96,1052.46 62.72,249.44 147.33,512.36 262.45,740.73 14.81,29.4 26.98,52.4 41.14,82.05 129.88,272.11 298.92,527.01 489.4,760.15l58.55 70.51c13.33,13.99 14.87,17.92 26.66,32 11.02,13.16 20.72,19.63 31.74,32.8l448.89 431.07c179.24,156.33 385.13,288.74 593.07,404.22 112.23,62.33 214.84,114.12 336.38,168.14 474.26,210.78 904.29,295.58 1416.13,337.94 38.35,3.18 83.81,-1.06 123.08,0.12 39.09,1.17 74.33,8.72 123.03,6.09l234.57 -11.83c225.37,0.61 632.27,-87.02 849.46,-147.84 63.45,-17.75 126.41,-39.52 191.18,-61.08 65.01,-21.63 121.9,-43.63 183.83,-68.43 109.26,-43.75 240.63,-97.38 342.19,-156.44l164 -88.26c53.61,-28.99 105.34,-62.33 157.26,-95 126.1,-79.36 245.38,-167.67 362.33,-259.52l137.45 -114.79c14.54,-11.14 20.1,-17.12 33.67,-30.88l401.32 -414.12c111.25,-137.73 223.73,-278.12 314.05,-430.98 62.48,-105.75 128.95,-210.6 183.74,-320.78 492.24,-989.89 574.86,-2077.02 226.58,-3130.48 -46.5,-140.66 -98.72,-272.67 -162.14,-401.04 -7.56,-15.3 -11.47,-27.88 -19.45,-45.09 -97.12,-209.61 -238.68,-445.42 -376.04,-627.12l-342.13 -408.77c-31.89,-31.86 -56.89,-67.11 -92.86,-94.87 -34.92,-26.96 -62.13,-63.93 -94.92,-92.81 -13.47,-11.87 -18.6,-13.06 -32.34,-26.33 -190.25,-183.72 -463.4,-376.6 -688.84,-502.05 -70.69,-39.33 -173.35,-101.14 -244.81,-130.64 -34.82,-14.36 -54.85,-27.37 -88,-41.05l-172.68 -73.72c-186.96,-74.73 -378.1,-132.87 -574.61,-182.15 -130.21,-32.66 -274.78,-57.92 -422.44,-76.22 -34.34,-4.25 -71.63,-7.26 -110.8,-12.39 -114.05,-14.93 -244.81,-15.55 -359.57,-21.75 -44.89,-2.42 -82.12,2.65 -117.66,5.59 -38.88,3.21 -83.52,-1.85 -122.92,0.28l-113.93 9.26c-40.95,6 -77.07,5.17 -118.22,10.84 -293.99,40.52 -585.88,88.17 -864.84,191.12l-141.68 51.92c-126.03,46.55 -314.75,124.07 -428.5,193.34 -79.22,48.23 -165.88,86.32 -242.95,138.37 -172.59,116.54 -352.89,227.01 -505.35,368.75l-99.85 87.87c-11.91,11.78 -19.88,21.17 -32.08,32.45l-278.8 284.38c-126.4,135.86 -246.34,307.46 -348.69,460.89 -67.39,101.03 -132.57,209.3 -186.55,317.96 -6.61,13.3 -11.56,24.39 -20.09,38.59 -9.69,16.17 -14.89,23.33 -22.7,41.82l-117.26 258.19c-26.6,61.64 -45.8,118.97 -69.59,182.66 -95.27,254.95 -158.22,527.83 -197.61,805.57 -20.41,143.94 -36.21,307.84 -36.21,468.3z"/>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    @endif
                                                    @if ($undangan->ig_mempelai_wanita != '-')
                                                        <div class=" w-5 h-5 md:w-10 md:h-10 rounded-full overflow-hidden ring-2 ring-white/40 shadow-2xl ml-2 text-white">
                                                            <a href="https://www.instagram.com/{{ $undangan->ig_mempelai_wanita }}" target="_blank" rel="noopener noreferrer" class="w-5 h-5">
                                                                <?xml version="1.0" encoding="UTF-8"?>
                                                                <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                                                                <!-- Creator: CorelDRAW 2020 (64-Bit Evaluation Version) -->
                                                                <svg class="w-full h-full object-cover object-center" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="100mm" height="100mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                                                    viewBox="0 0 10000 10000"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    xmlns:xodm="http://www.corel.com/coreldraw/odm/2003">
                                                                    <defs>
                                                                    <style type="text/css">
                                                                    <![CDATA[
                                                                        .fil0 {fill:currentColor}
                                                                    ]]>
                                                                    </style>
                                                                    </defs>
                                                                    <g id="Layer_x0020_1">
                                                                    <metadata id="CorelCorpID_0Corel-Layer"/>
                                                                    <g id="_2778592936208">
                                                                    <path class="fil0" d="M7278.63 5723.83l27.07 0 0 460.09 -27.07 0 0 189.44 -27.06 0 0 162.39 -27.07 0 0 81.18 -27.06 0 0 54.13 -27.06 0 0 54.13 -27.07 0 0 54.13 -27.06 0 0 27.06 -27.07 0 0 54.13 -27.06 0 0 27.06 -27.06 0 0 27.07 -27.07 0 0 27.05 -27.06 0 0 27.07 -27.07 0 0 27.06 -27.05 0 0 27.07 -27.07 0 0 27.06 -27.06 0 0 27.06 -54.13 0 0 27.07 -27.06 0 0 27.06 -54.13 0 0 27.07 -81.19 0 0 27.06 -54.13 0 0 27.06 -81.19 0 0 27.07 -162.38 0 0 27.06 -2652.23 0 0 -27.06 -108.25 0 0 -27.07 -108.25 0 0 -27.06 -81.19 0 0 -27.06 -54.13 0 0 -27.07 -54.13 0 0 -27.06 -27.06 0 0 -27.07 -54.13 0 0 -27.06 -27.07 0 0 -27.06 -27.05 0 0 -27.07 -27.07 0 0 -27.06 -27.06 0 0 -27.07 -27.07 0 0 -27.05 -27.06 0 0 -27.07 -54.13 0 0 -54.13 -27.06 0 0 -27.06 -27.07 0 0 -54.13 -27.06 0 0 -54.13 -27.06 0 0 -54.12 -27.07 0 0 -54.13 -27.06 0 0 -108.25 -27.07 0 0 -1623.81 -27.05 0 0 -1163.74 27.05 0 0 -135.32 27.07 0 0 -81.18 27.06 0 0 -81.19 27.07 0 0 -54.13 27.06 0 0 -54.13 27.06 0 0 -27.06 27.07 0 0 -54.13 27.06 0 0 -27.07 27.07 0 0 -27.05 27.06 0 0 -27.07 27.06 0 0 -27.06 27.07 0 0 -27.07 27.06 0 0 -27.06 27.07 0 0 -27.06 27.05 0 0 -27.07 27.07 0 0 -27.06 54.13 0 0 -27.07 27.06 0 0 -27.06 81.19 0 0 -27.06 54.13 0 0 -27.07 81.19 0 0 -27.06 135.32 0 0 -27.07 378.88 0 0 -27.05 784.85 0 0 27.05 27.06 0 0 -27.05 54.13 0 0 27.05 27.06 0 0 -27.05 27.07 0 0 27.05 54.12 0 0 -27.05 54.13 0 0 27.05 27.07 0 0 -27.05 81.18 0 0 27.05 378.89 0 0 -27.05 108.26 0 0 27.05 757.78 0 0 27.07 81.19 0 0 27.06 81.19 0 0 27.07 81.19 0 0 27.06 54.12 0 0 27.06 54.13 0 0 27.07 54.13 0 0 27.06 27.06 0 0 27.07 27.07 0 0 27.06 54.13 0 0 27.06 27.05 0 0 27.07 27.07 0 0 27.06 27.06 0 0 27.07 27.07 0 0 54.12 27.06 0 0 27.06 27.06 0 0 27.07 27.07 0 0 54.12 27.06 0 0 54.13 27.07 0 0 54.13 27.06 0 0 81.19 27.06 0 0 81.19 27.07 0 0 108.25 27.06 0 0 270.64 27.07 0 0 514.21 -27.07 0 0 1244.91zm-2300.4 -4519.6l-405.95 0 0 27.06 -189.44 0 0 27.07 -135.32 0 0 27.06 -108.26 0 0 27.07 -81.19 0 0 27.05 -108.26 0 0 27.07 -81.18 0 0 27.06 -81.2 0 0 27.07 -81.19 0 0 27.06 -54.12 0 0 27.06 -81.2 0 0 27.07 -54.12 0 0 27.06 -54.13 0 0 27.07 -54.12 0 0 27.05 -54.13 0 0 27.07 -54.13 0 0 27.07 -54.13 0 0 27.06 -54.13 0 0 27.07 -27.05 0 0 27.05 -54.13 0 0 27.07 -54.13 0 0 27.06 -27.06 0 0 27.07 -54.13 0 0 27.06 -27.07 0 0 27.06 -54.12 0 0 27.07 -27.07 0 0 27.06 -54.13 0 0 27.07 -27.05 0 0 27.06 -27.07 0 0 27.06 -54.13 0 0 27.07 -27.06 0 0 27.06 -27.06 0 0 27.06 -27.07 0 0 27.06 -27.06 0 0 27.07 -27.07 0 0 27.06 -54.12 0 0 27.07 -27.07 0 0 27.06 -27.06 0 0 27.06 -27.06 0 0 27.07 -27.06 0 0 27.06 -27.07 0 0 27.06 -27.06 0 0 27.07 -27.07 0 0 27.06 -27.06 0 0 27.07 -27.06 0 0 27.06 -27.07 0 0 27.06 -27.06 0 0 27.06 -27.06 0 0 54.13 -27.07 0 0 27.06 -27.06 0 0 27.07 -27.07 0 0 27.06 -27.06 0 0 54.13 -27.06 0 0 27.06 -27.06 0 0 27.07 -27.07 0 0 27.06 -27.06 0 0 54.12 -27.06 0 0 27.07 -27.07 0 0 54.13 -27.06 0 0 27.06 -27.07 0 0 54.13 -54.12 0 0 81.19 -27.07 0 0 27.06 -27.06 0 0 54.13 -27.07 0 0 54.12 -27.05 0 0 54.13 -54.13 0 0 54.13 -27.07 0 0 81.19 -27.06 0 0 27.07 -27.06 0 0 81.19 -27.07 0 0 27.06 -27.06 0 0 108.25 -27.07 0 0 54.13 -27.06 0 0 54.13 -27.06 0 0 108.25 -27.07 0 0 54.13 -27.06 0 0 108.25 -27.07 0 0 54.13 -27.05 0 0 135.32 -27.07 0 0 135.31 -27.06 0 0 162.39 -27.07 0 0 162.37 -27.06 0 0 27.07 27.06 0 0 27.06 -27.06 0 0 676.59 27.06 0 0 243.57 27.07 0 0 135.32 27.06 0 0 135.32 27.07 0 0 135.32 27.05 0 0 81.18 27.07 0 0 135.32 27.06 0 0 54.13 27.07 0 0 81.19 27.06 0 0 108.26 27.06 0 0 54.13 27.07 0 0 54.12 27.06 0 0 81.19 27.07 0 0 54.13 27.06 0 0 81.19 27.06 0 0 54.13 27.07 0 0 27.06 27.06 0 0 54.12 27.07 0 0 54.13 27.05 0 0 27.07 27.07 0 0 27.06 27.06 0 0 27.06 27.07 0 0 54.13 27.06 0 0 54.13 27.06 0 0 27.06 27.07 0 0 54.13 27.06 0 0 54.12 27.07 0 0 27.07 27.06 0 0 27.06 27.06 0 0 27.07 27.07 0 0 27.06 27.06 0 0 27.06 27.06 0 0 27.07 27.06 0 0 54.13 27.07 0 0 27.06 27.06 0 0 54.13 27.07 0 0 27.06 27.06 0 0 27.06 27.06 0 0 27.06 27.07 0 0 27.07 27.06 0 0 27.06 54.13 0 0 27.07 27.06 0 0 54.12 27.07 0 0 27.07 27.06 0 0 27.06 54.12 0 0 27.06 27.07 0 0 27.07 27.06 0 0 27.06 27.06 0 0 27.07 27.07 0 0 27.06 54.13 0 0 27.06 27.06 0 0 27.06 27.06 0 0 27.07 27.07 0 0 27.06 27.06 0 0 27.06 27.07 0 0 27.07 54.12 0 0 27.06 54.13 0 0 27.07 27.06 0 0 27.06 54.13 0 0 27.06 27.06 0 0 27.07 54.13 0 0 27.06 54.13 0 0 27.07 27.06 0 0 27.05 54.12 0 0 27.07 54.13 0 0 27.06 54.13 0 0 27.07 54.13 0 0 27.06 27.06 0 0 27.06 81.19 0 0 27.07 27.07 0 0 27.06 81.18 0 0 27.07 54.13 0 0 27.06 54.13 0 0 27.06 81.19 0 0 27.07 81.19 0 0 27.06 81.19 0 0 27.07 108.25 0 0 27.05 81.2 0 0 27.07 135.32 0 0 27.06 108.25 0 0 27.07 135.32 0 0 27.06 433.01 0 0 27.06 54.13 0 0 -27.06 270.63 0 0 27.06 108.26 0 0 -27.06 108.26 0 0 -27.06 216.5 0 0 -27.07 135.32 0 0 -27.06 162.38 0 0 -27.07 81.19 0 0 -27.05 108.26 0 0 -27.07 81.18 0 0 -27.06 81.2 0 0 -27.07 54.12 0 0 -27.06 81.19 0 0 -27.06 81.2 0 0 -27.07 54.12 0 0 -27.06 54.13 0 0 -27.07 54.12 0 0 -27.06 54.13 0 0 -27.06 54.13 0 0 -27.07 27.06 0 0 -27.06 81.2 0 0 -27.07 27.05 0 0 -27.05 54.13 0 0 -27.07 27.07 0 0 -27.06 54.12 0 0 -27.07 27.07 0 0 -27.06 54.13 0 0 -27.06 54.12 0 0 -27.07 27.07 0 0 -27.06 27.06 0 0 -27.07 54.12 0 0 -27.06 27.07 0 0 -27.06 27.06 0 0 -27.07 54.13 0 0 -27.06 27.06 0 0 -27.06 27.07 0 0 -27.06 27.06 0 0 -27.07 27.07 0 0 -27.06 27.06 0 0 -27.07 54.13 0 0 -27.06 27.06 0 0 -27.06 27.06 0 0 -27.07 27.06 0 0 -27.06 27.07 0 0 -27.06 27.06 0 0 -27.07 27.07 0 0 -27.06 27.06 0 0 -27.07 27.06 0 0 -54.12 27.07 0 0 -27.06 27.06 0 0 -27.07 27.06 0 0 -27.06 27.07 0 0 -27.06 27.06 0 0 -27.07 27.07 0 0 -27.06 27.06 0 0 -27.07 27.06 0 0 -54.12 27.06 0 0 -27.07 27.07 0 0 -27.06 27.06 0 0 -54.12 27.06 0 0 -27.07 27.07 0 0 -27.06 27.06 0 0 -54.13 27.07 0 0 -27.06 27.06 0 0 -54.13 27.06 0 0 -27.07 27.07 0 0 -54.12 27.06 0 0 -27.07 27.07 0 0 -54.13 27.05 0 0 -54.12 27.07 0 0 -54.13 27.06 0 0 -27.06 27.07 0 0 -54.13 27.06 0 0 -54.13 27.06 0 0 -54.12 27.07 0 0 -81.19 27.06 0 0 -54.13 27.07 0 0 -81.19 27.06 0 0 -54.13 27.06 0 0 -81.19 27.07 0 0 -81.19 27.06 0 0 -81.19 27.07 0 0 -108.25 27.05 0 0 -108.26 27.07 0 0 -108.25 27.06 0 0 -135.32 27.07 0 0 -216.5 27.06 0 0 -838.97 -27.06 0 0 -216.52 -27.07 0 0 -135.32 -27.06 0 0 -135.31 -27.07 0 0 -108.26 -27.05 0 0 -108.25 -27.07 0 0 -81.19 -27.06 0 0 -81.19 -27.07 0 0 -54.13 -27.06 0 0 -81.19 -27.06 0 0 -54.13 -27.07 0 0 -54.12 -27.06 0 0 -81.19 -27.07 0 0 -54.13 -27.06 0 0 -27.06 -27.06 0 0 -54.13 -27.07 0 0 -54.13 -27.06 0 0 -54.13 -27.07 0 0 -27.05 -27.05 0 0 -54.13 -27.07 0 0 -54.13 -27.06 0 0 -27.06 -27.07 0 0 -54.13 -27.06 0 0 -27.07 -27.06 0 0 -54.12 -27.07 0 0 -27.07 -27.06 0 0 -54.13 -27.07 0 0 -27.05 -27.06 0 0 -54.13 -27.06 0 0 -27.07 -27.07 0 0 -27.06 -27.06 0 0 -27.06 -27.06 0 0 -27.07 -27.06 0 0 -27.06 -27.07 0 0 -54.13 -27.06 0 0 -27.06 -27.07 0 0 -27.07 -27.06 0 0 -54.12 -27.06 0 0 -27.06 -27.07 0 0 -27.07 -27.06 0 0 -27.06 -27.06 0 0 -27.07 -54.13 0 0 -27.06 -27.07 0 0 -27.06 -27.06 0 0 -27.07 -27.06 0 0 -27.06 -27.06 0 0 -27.06 -27.07 0 0 -27.07 -27.06 0 0 -27.06 -27.06 0 0 -27.07 -54.13 0 0 -27.06 -27.07 0 0 -27.06 -27.06 0 0 -27.06 -27.06 0 0 -27.07 -54.13 0 0 -27.06 -27.07 0 0 -27.06 -27.05 0 0 -27.07 -54.13 0 0 -27.06 -27.07 0 0 -27.07 -27.06 0 0 -27.06 -54.13 0 0 -27.06 -27.06 0 0 -27.07 -54.13 0 0 -27.06 -27.06 0 0 -27.07 -54.13 0 0 -27.05 -54.12 0 0 -27.07 -27.07 0 0 -27.06 -54.13 0 0 -27.07 -54.12 0 0 -27.07 -54.13 0 0 -27.05 -54.13 0 0 -27.07 -54.13 0 0 -27.06 -54.12 0 0 -27.07 -81.19 0 0 -27.06 -54.13 0 0 -27.06 -81.19 0 0 -27.07 -81.19 0 0 -27.06 -108.25 0 0 -27.07 -108.26 0 0 -27.05 -81.19 0 0 -27.07 -108.26 0 0 -27.06 -135.32 0 0 -27.07 -189.44 0 0 -27.06 -405.95 0 0 -27.06 -162.38 0 0 27.06z"/>
                                                                    <path class="fil0" d="M6169.03 5182.57l27.06 0 0 27.06 -27.06 0 0 108.26 -27.07 0 0 108.25 -27.06 0 0 54.12 -27.06 0 0 81.2 -27.07 0 0 27.06 -27.06 0 0 54.13 -27.07 0 0 54.13 -27.06 0 0 27.05 -27.06 0 0 27.07 -27.07 0 0 27.07 -27.06 0 0 27.06 -27.07 0 0 27.07 -27.05 0 0 27.05 -27.07 0 0 27.07 -27.06 0 0 27.06 -27.07 0 0 27.07 -27.07 0 0 27.06 -27.05 0 0 27.06 -27.07 0 0 27.07 -54.13 0 0 27.06 -54.12 0 0 27.07 -54.13 0 0 27.05 -54.12 0 0 27.07 -81.2 0 0 27.07 -108.25 0 0 27.06 -433.02 0 0 -27.06 -81.19 0 0 -27.07 -108.26 0 0 -27.07 -54.12 0 0 -27.05 -81.19 0 0 -27.07 -27.06 0 0 -27.06 -54.13 0 0 -27.07 -27.07 0 0 -27.06 -54.12 0 0 -27.06 -27.07 0 0 -27.07 -27.06 0 0 -27.06 -27.07 0 0 -27.07 -27.05 0 0 -27.05 -27.07 0 0 -27.07 -27.06 0 0 -27.06 -27.07 0 0 -27.07 -27.06 0 0 -27.07 -27.06 0 0 -27.05 -27.07 0 0 -54.13 -27.06 0 0 -54.13 -27.07 0 0 -54.13 -27.06 0 0 -54.13 -27.06 0 0 -81.19 -27.07 0 0 -108.25 -27.06 0 0 -162.38 -27.06 0 0 -162.38 27.06 0 0 -135.32 27.06 0 0 -108.25 27.07 0 0 -81.2 27.06 0 0 -54.12 27.06 0 0 -54.13 27.07 0 0 -54.12 27.06 0 0 -54.13 27.07 0 0 -27.07 27.06 0 0 -54.12 27.06 0 0 -27.07 27.07 0 0 -27.06 27.06 0 0 -27.07 27.07 0 0 -27.05 27.05 0 0 -27.07 27.07 0 0 -27.06 27.06 0 0 -27.07 27.07 0 0 -27.06 27.07 0 0 -27.06 54.12 0 0 -27.07 27.06 0 0 -27.06 54.13 0 0 -27.07 54.13 0 0 -27.06 54.13 0 0 -27.06 54.12 0 0 -27.07 135.32 0 0 -27.06 81.19 0 0 -27.06 27.06 0 0 27.06 54.13 0 0 -27.06 216.51 0 0 27.06 108.25 0 0 27.06 81.19 0 0 27.07 81.2 0 0 27.06 54.12 0 0 27.06 54.13 0 0 27.07 27.06 0 0 27.06 54.13 0 0 27.07 54.13 0 0 27.06 27.05 0 0 27.06 27.07 0 0 27.07 27.07 0 0 27.06 27.06 0 0 27.07 27.07 0 0 27.05 27.05 0 0 27.07 27.07 0 0 27.06 27.06 0 0 27.07 27.07 0 0 54.12 27.06 0 0 27.07 27.06 0 0 54.13 27.07 0 0 54.12 27.06 0 0 27.07 27.07 0 0 54.13 27.06 0 0 81.18 27.06 0 0 81.19 27.07 0 0 162.39 27.06 0 0 135.32 -27.06 0 0 108.25zm-162.39 -1434.37l27.07 0 0 -54.13 27.06 0 0 -27.06 27.07 0 0 -27.06 27.06 0 0 -27.07 54.13 0 0 -27.06 135.31 0 0 27.06 54.13 0 0 27.07 54.13 0 0 54.12 27.06 0 0 54.13 27.06 0 0 108.26 -27.06 0 0 54.12 -27.06 0 0 54.13 -27.07 0 0 27.06 -27.06 0 0 27.06 -54.13 0 0 27.07 -162.38 0 0 -27.07 -27.06 0 0 -27.06 -27.06 0 0 -27.06 -27.07 0 0 -27.07 -27.06 0 0 -81.18 -27.07 0 0 -108.26zm-1271.98 -676.59l-838.97 0 0 27.07 -324.77 0 0 27.06 -81.18 0 0 27.07 -54.13 0 0 27.05 -54.13 0 0 27.07 -27.06 0 0 27.06 -54.13 0 0 27.07 -27.06 0 0 27.06 -27.07 0 0 27.06 -27.06 0 0 27.07 -27.07 0 0 54.13 -27.05 0 0 27.06 -27.07 0 0 54.13 -27.06 0 0 81.18 -27.07 0 0 108.26 -27.06 0 0 866.03 -27.06 0 0 1623.82 27.06 0 0 324.76 27.06 0 0 54.13 27.07 0 0 81.18 27.06 0 0 54.13 27.07 0 0 27.06 27.05 0 0 27.07 27.07 0 0 27.06 27.06 0 0 27.07 27.07 0 0 27.06 27.06 0 0 27.06 27.06 0 0 27.07 27.07 0 0 27.06 54.13 0 0 27.07 27.06 0 0 27.05 135.31 0 0 27.07 2949.93 0 0 -27.07 108.25 0 0 -27.05 54.13 0 0 -27.07 54.13 0 0 -27.06 27.06 0 0 -27.07 27.07 0 0 -27.06 27.06 0 0 -27.06 27.06 0 0 -27.07 27.07 0 0 -27.06 27.06 0 0 -54.13 27.07 0 0 -54.13 27.05 0 0 -54.12 27.07 0 0 -54.13 27.06 0 0 -108.25 27.07 0 0 -297.71 -27.07 0 0 -1813.25 27.07 0 0 -216.51 -27.07 0 0 -460.08 -27.06 0 0 -81.19 -27.07 0 0 -54.12 -27.05 0 0 -54.13 -27.07 0 0 -54.13 -27.06 0 0 -27.06 -27.07 0 0 -27.07 -27.06 0 0 -27.06 -27.06 0 0 -27.06 -27.07 0 0 -27.07 -27.06 0 0 -27.06 -54.13 0 0 -27.07 -54.13 0 0 -27.05 -54.12 0 0 -27.07 -81.19 0 0 -27.06 -216.51 0 0 -27.07 -216.51 0 0 -27.06 -1326.11 0 0 27.06z"/>
                                                                    <polygon class="fil0" points="4842.91,4262.4 4761.72,4262.4 4761.72,4289.47 4680.53,4289.47 4680.53,4316.53 4626.41,4316.53 4626.41,4343.6 4599.34,4343.6 4599.34,4370.67 4545.21,4370.67 4545.21,4397.72 4518.15,4397.72 4518.15,4424.79 4491.09,4424.79 4491.09,4451.85 4464.02,4451.85 4464.02,4478.92 4436.96,4478.92 4436.96,4505.98 4409.89,4505.98 4409.89,4533.04 4382.84,4533.04 4382.84,4587.17 4355.77,4587.17 4355.77,4641.29 4328.7,4641.29 4328.7,4668.36 4301.64,4668.36 4301.64,4722.49 4274.57,4722.49 4274.57,4776.61 4247.52,4776.61 4247.52,4884.87 4220.45,4884.87 4220.45,5182.57 4247.52,5182.57 4247.52,5317.89 4274.57,5317.89 4274.57,5372.01 4301.64,5372.01 4301.64,5426.14 4328.7,5426.14 4328.7,5480.26 4355.77,5480.26 4355.77,5507.33 4382.84,5507.33 4382.84,5561.46 4409.89,5561.46 4409.89,5588.52 4436.96,5588.52 4436.96,5615.58 4464.02,5615.58 4464.02,5642.65 4491.09,5642.65 4491.09,5669.71 4518.15,5669.71 4518.15,5696.78 4545.21,5696.78 4545.21,5723.83 4599.34,5723.83 4599.34,5750.9 4626.41,5750.9 4626.41,5777.97 4680.53,5777.97 4680.53,5805.03 4734.66,5805.03 4734.66,5832.1 4869.98,5832.1 4869.98,5859.15 5194.74,5859.15 5194.74,5832.1 5330.06,5832.1 5330.06,5805.03 5411.25,5805.03 5411.25,5777.97 5465.38,5777.97 5465.38,5750.9 5519.5,5750.9 5519.5,5723.83 5546.56,5723.83 5546.56,5696.78 5600.69,5696.78 5600.69,5669.71 5627.75,5669.71 5627.75,5642.65 5654.82,5642.65 5654.82,5615.58 5681.88,5615.58 5681.88,5561.46 5708.95,5561.46 5708.95,5534.39 5736,5534.39 5736,5480.26 5763.07,5480.26 5763.07,5453.21 5790.14,5453.21 5790.14,5399.07 5817.2,5399.07 5817.2,5317.89 5844.27,5317.89 5844.27,5209.63 5871.32,5209.63 5871.32,4884.87 5844.27,4884.87 5844.27,4776.61 5817.2,4776.61 5817.2,4695.42 5790.14,4695.42 5790.14,4641.29 5763.07,4641.29 5763.07,4587.17 5736,4587.17 5736,4560.11 5708.95,4560.11 5708.95,4505.98 5681.88,4505.98 5681.88,4478.92 5654.82,4478.92 5654.82,4451.85 5627.75,4451.85 5627.75,4424.79 5600.69,4424.79 5600.69,4397.72 5546.56,4397.72 5546.56,4370.67 5519.5,4370.67 5519.5,4343.6 5465.38,4343.6 5465.38,4316.53 5411.25,4316.53 5411.25,4289.47 5357.12,4289.47 5357.12,4262.4 5248.86,4262.4 5248.86,4235.35 4842.91,4235.35 "/>
                                                                    </g>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div> 
        <div class="w-full flex justify-center items-center">
            <div class="relative bg-cover1 w-full md:w-6/12 h-screen overflow-hidden z-10">
               <div class="daun-jatuh-wrapper absolute inset-0 z-0 pointer-events-none overflow-hidden">
                    @for ($i = 0; $i < 25; $i++)
                        <span class="daun-jatuh" style="
                            --i: {{ rand(5,35) }};
                            --delay: {{ rand(0,10) }}s;
                            --durasi: {{ rand(8,15) }}s;
                            --posisi: {{ rand(0,100) }}%;
                        "></span>
                    @endfor
                </div>
                <div class="kupu-wrapper absolute inset-0 pointer-events-none z-10">
                    
                    <img src="/images/kupu-kupu.gif" class="kupu kupu1">
                    <img src="/images/kupu-kupu.gif" class="kupu kupu2">
                    <img src="/images/kupu-kupu.gif" class="kupu kupu3">

                </div>
                <div class="absolute -bottom-10 -right-10 w-46 h-46 md:w-64 md:h-64 muncul"
                    style="animation-delay: 0s;">
                    <div class="janur w-full h-full opacity-65 angin"></div>
                </div>

                <div class="absolute -bottom-10 -left-10 w-46 h-46 md:w-64 md:h-64 muncul"
                    style="animation-delay: 0.5s;">
                    <div class="janur w-full h-full opacity-65 scale-x-[-1] angin2"></div>
                </div>
                <div class="absolute bottom-50 -right-32 md:-right-48 w-52 h-52 md:w-80 md:h-80 muncul"
                    style="animation-delay: 1s;">
                    <div class="pohon1 w-full h-full opacity-65 rotate-300 angin"></div>
                </div>

                <div class="absolute bottom-50 -left-32 md:-left-48 w-52 h-52 md:w-80 md:h-80 muncul"
                    style="animation-delay: 1.3s;">
                    <div class="pohon1 w-full h-full opacity-65 scale-x-[-1] rotate-45 angin2"></div>
                </div>
                <div class="absolute bottom-70 -right-32 md:-right-48 w-52 h-52 md:w-80 md:h-80 muncul"
                    style="animation-delay: 1.6s;">
                    <div class="pohon2 w-full h-full opacity-65 rotate-300 angin"></div>
                </div>

                <div class="absolute bottom-70 -left-32 md:-left-48 w-52 h-52 md:w-80 md:h-80 muncul"
                    style="animation-delay: 1.9s;">
                    <div class="pohon2 w-full h-full opacity-65 scale-x-[-1] rotate-45 angin2"></div>
                </div>
                <div class="absolute -top-20 -right-44 md:-right-64 w-52 h-52 md:w-80 md:h-80 muncul"
                    style="animation-delay: 2.2s;">
                    <div class="pohon4 w-full h-full opacity-65 rotate-230 angin"></div>
                </div>

                <div class="absolute -top-20 -left-44 md:-left-64 w-52 h-52 md:w-80 md:h-80 muncul"
                    style="animation-delay: 2.5s;">
                    <div class="pohon4 w-full h-full opacity-65 scale-x-[-1] rotate-130 angin2"></div>
                </div>
                <<div class="absolute -top-56 md:-top-96 -right-36 md:-right-64 w-52 h-52 md:w-96 md:h-96 muncul"
                    style="animation-delay: 2.8s;">
                    <div class="pohon3 w-full h-full rotate-230 angin"></div>
                </div>

                <div class="absolute -top-56 md:-top-96 -left-36 md:-left-64 w-52 h-52 md:w-96 md:h-96 muncul"
                    style="animation-delay: 3.1s;">
                    <div class="pohon3 w-full h-full scale-x-[-1] rotate-130 angin2"></div>
                </div>
                
                <div class="flex justify-center items-center w-full h-screen text-center text-red-900">
                    <div class="grid grid-cols-1 gap-1.5 w-10/12">
                        <div class="rounded-xl p-2 shadow-2xl fade-scroll bg-red-300 opacity-15">
                            <h1 style="font-family: 'Sacramento', cursive; font-size: 30px;">Akad Nikah</h1>
                            <p class="text-[12px] md:text-lg">{{ \Carbon\Carbon::parse($undangan->tgl_akad)->locale('id')->translatedFormat('l, d F Y') }}</p>
                            <p class="text-[12px] md:text-lg">Pukul {{ \Carbon\Carbon::parse($undangan->tgl_akad)->locale('id')->translatedFormat('H:i') }} {{$timezone}} - Pukul {{ \Carbon\Carbon::parse($undangan->tgl_resepsi)->locale('id')->translatedFormat('H:i') }} {{$timezone}}</p>
                            <p class="text-[12px]">Tempat : {{$undangan->alamat_akad}}</p>
                            
                            <div class="flex justify-center items-center">
                                <a href="{{$undangan->maps_akad}}" class="mt-1 px-0.5 py-1.5 w-8/12 rounded-xl bg-white flex justify-center items-center">
                                    <i data-lucide="map-minus" class="w-5 h-5 mr-2 text-red-900"></i>
                                    <span class="text-red-900">Buka Google Lokasi</span>
                                </a>
                            </div>

                        </div>
                        <div class="rounded-xl p-2 shadow-2xl mt-5 mb-5 fade-scroll bg-red-300 opacity-15">
                            <h1 style="font-family: 'Sacramento', cursive; font-size: 30px;">Resepsi</h1>
                            <p class="text-[12px] md:text-lg">{{ \Carbon\Carbon::parse($undangan->tgl_resepsi)->locale('id')->translatedFormat('l, d F Y') }}</p>
                            <p class="text-[12px] md:text-lg">Pukul {{ \Carbon\Carbon::parse($undangan->tgl_resepsi)->locale('id')->translatedFormat('H:i') }} {{$timezone}} - Selesai</p>
                            <p class="text-[12px]">Tempat : {{$undangan->alamat_resepsi}}</p>
                            
                            <div class="flex justify-center items-center">
                                <a href="{{$undangan->maps_resepsi}}" class="mt-1 px-0.5 py-1.5 w-8/12 rounded-xl bg-white flex justify-center items-center">
                                    <i data-lucide="map-minus" class="w-5 h-5 mr-2 text-red-900"></i>
                                    <span class="text-red-900">Buka Google Lokasi</span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <div class="w-full flex justify-center items-center">
            <div class="relative bg-cover1 w-full md:w-6/12 h-[900px] overflow-hidden z-10">
               <div class="daun-jatuh-wrapper absolute inset-0 z-0 pointer-events-none overflow-hidden">
                    @for ($i = 0; $i < 25; $i++)
                        <span class="daun-jatuh" style="
                            --i: {{ rand(5,35) }};
                            --delay: {{ rand(0,10) }}s;
                            --durasi: {{ rand(8,15) }}s;
                            --posisi: {{ rand(0,100) }}%;
                        "></span>
                    @endfor
                </div>
                <div class="kupu-wrapper absolute inset-0 pointer-events-none z-10">
                    
                    <img src="/images/kupu-kupu.gif" class="kupu kupu1">
                    <img src="/images/kupu-kupu.gif" class="kupu kupu2">
                    <img src="/images/kupu-kupu.gif" class="kupu kupu3">

                </div>
                <div class="absolute -bottom-10 -right-10 w-46 h-46 md:w-64 md:h-64 muncul"
                    style="animation-delay: 0s;">
                    <div class="janur w-full h-full opacity-65 angin"></div>
                </div>

                <div class="absolute -bottom-10 -left-10 w-46 h-46 md:w-64 md:h-64 muncul"
                    style="animation-delay: 0.5s;">
                    <div class="janur w-full h-full opacity-65 scale-x-[-1] angin2"></div>
                </div>
                <div class="absolute bottom-50 -right-32 md:-right-48 w-52 h-52 md:w-80 md:h-80 muncul"
                    style="animation-delay: 1s;">
                    <div class="pohon1 w-full h-full opacity-65 rotate-300 angin"></div>
                </div>

                <div class="absolute bottom-50 -left-32 md:-left-48 w-52 h-52 md:w-80 md:h-80 muncul"
                    style="animation-delay: 1.3s;">
                    <div class="pohon1 w-full h-full opacity-65 scale-x-[-1] rotate-45 angin2"></div>
                </div>
                <div class="absolute bottom-70 -right-32 md:-right-48 w-52 h-52 md:w-80 md:h-80 muncul"
                    style="animation-delay: 1.6s;">
                    <div class="pohon2 w-full h-full opacity-65 rotate-300 angin"></div>
                </div>

                <div class="absolute bottom-70 -left-32 md:-left-48 w-52 h-52 md:w-80 md:h-80 muncul"
                    style="animation-delay: 1.9s;">
                    <div class="pohon2 w-full h-full opacity-65 scale-x-[-1] rotate-45 angin2"></div>
                </div>
                <div class="absolute -top-20 -right-44 md:-right-64 w-52 h-52 md:w-80 md:h-80 muncul"
                    style="animation-delay: 2.2s;">
                    <div class="pohon4 w-full h-full opacity-65 rotate-230 angin"></div>
                </div>

                <div class="absolute -top-20 -left-44 md:-left-64 w-52 h-52 md:w-80 md:h-80 muncul"
                    style="animation-delay: 2.5s;">
                    <div class="pohon4 w-full h-full opacity-65 scale-x-[-1] rotate-130 angin2"></div>
                </div>
                <<div class="absolute -top-56 md:-top-96 -right-36 md:-right-64 w-52 h-52 md:w-96 md:h-96 muncul"
                    style="animation-delay: 2.8s;">
                    <div class="pohon3 w-full h-full rotate-230 angin"></div>
                </div>

                <div class="absolute -top-56 md:-top-96 -left-36 md:-left-64 w-52 h-52 md:w-96 md:h-96 muncul"
                    style="animation-delay: 3.1s;">
                    <div class="pohon3 w-full h-full scale-x-[-1] rotate-130 angin2"></div>
                </div>
                
                <div class="flex justify-center items-center w-full h-screen pt-10 pb-10">
                    <div class="overflow-y-auto max-h-screen px-4 min-h-0">
                        <h1 style="font-family: 'Sacramento', cursive; font-size: 34px;" class="text-center text-white fade-scroll">Our Story</h1>

                        <div class="relative border-l-4 border-red-300 pl-6 space-y-4 ml-2 fade-scroll">

                            <!-- Item -->
                            <div class="timeline-item opacity-0 translate-y-10 transition-all duration-700">
                                <div class="flex justify-start mr-2">
                                    <div class="w-12 h-12 rounded-full bg-red-300 flex text-white justify-center items-center mr-3"><i data-lucide="heart"></i></div>
                                    <div class="rounded-xl w-full p-2 shadow-2xl bg-red-300 text-white text-xs">
                                        <p class="underline">{{ \Carbon\Carbon::parse($stories->tgl_stori_1)->locale('id')->translatedFormat('Y') }}</p>
                                        <p>{{$stories->story_1}}</p>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="timeline-item opacity-0 translate-y-10 transition-all duration-700">
                                <div class="flex justify-start mr-2">
                                    <div class="w-12 h-12 rounded-full bg-red-300 flex text-white justify-center items-center mr-3"><i data-lucide="heart"></i></div>
                                    <div class="rounded-xl w-full p-2 shadow-2xl bg-red-300 text-white text-xs">
                                        <p class="underline">{{ \Carbon\Carbon::parse($stories->tgl_stori_2)->locale('id')->translatedFormat('Y') }}</p>
                                        <p>{{$stories->story_2}}</p>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="timeline-item opacity-0 translate-y-10 transition-all duration-700">
                                <div class="flex justify-start mr-2">
                                    <div class="w-12 h-12 rounded-full bg-red-300 flex text-white justify-center items-center mr-3"><i data-lucide="heart"></i></div>
                                    <div class="rounded-xl w-full p-2 shadow-2xl bg-red-300 text-white text-xs">
                                        <p class="underline">{{ \Carbon\Carbon::parse($stories->tgl_stori_3)->locale('id')->translatedFormat('Y') }}</p>
                                        <p>{{$stories->story_3}}</p>
                                    </div>
                                    
                                </div>
                            </div>

                            @if ($stories->story_4 != '-')
                                <div class="timeline-item opacity-0 translate-y-10 transition-all duration-700">
                                    <div class="flex justify-start mr-2">
                                        <div class="w-12 h-12 rounded-full bg-red-300 flex text-white justify-center items-center mr-3"><i data-lucide="heart"></i></div>
                                        <div class="rounded-xl w-full p-2 shadow-2xl bg-red-300 text-white text-xs">
                                            <p class="underline">{{ \Carbon\Carbon::parse($stories->tgl_stori_4)->locale('id')->translatedFormat('Y') }}</p>
                                            <p>{{$stories->story_4}}</p>
                                        </div>
                                        
                                    </div>
                                </div>
                            @endif
                             @if ($stories->story_5 != '-')
                                <div class="timeline-item opacity-0 translate-y-10 transition-all duration-700">
                                    <div class="flex justify-start mr-2">
                                        <div class="w-12 h-12 rounded-full bg-red-300 flex text-white justify-center items-center mr-3"><i data-lucide="heart"></i></div>
                                        <div class="rounded-xl w-full p-2 shadow-2xl bg-red-300 text-white text-xs">
                                            <p class="underline">{{ \Carbon\Carbon::parse($stories->tgl_stori_4)->locale('id')->translatedFormat('Y') }}</p>
                                            <p>{{$stories->story_5}}</p>
                                        </div>
                                        
                                    </div>
                                </div>
                            @endif
                             @if ($stories->story_6 != '-')
                                <div class="timeline-item opacity-0 translate-y-10 transition-all duration-700">
                                    <div class="flex justify-start mr-2">
                                        <div class="w-12 h-12 rounded-full bg-red-300 flex text-white justify-center items-center mr-3"><i data-lucide="heart"></i></div>
                                        <div class="rounded-xl w-full p-2 shadow-2xl bg-red-300 text-white text-xs">
                                            <p class="underline">{{ \Carbon\Carbon::parse($stories->tgl_stori_4)->locale('id')->translatedFormat('Y') }}</p>
                                            <p>{{$stories->story_6}}</p>
                                        </div>
                                        
                                    </div>
                                </div>
                            @endif
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full h-screen flex justify-center ">
            <div class="relative w-full h-screen md:w-6/12 bg-red-900">

                <!-- SWIPER -->
                <div class="swiper mySwiper overflow-hidden">
                    <div class="swiper-wrapper">
                        @foreach ($images->gallery as $image)
                            <div class="swiper-slide flex justify-center items-center bg-transparent">
                                <img src="{{ asset('storage/'.$image) }}"
                                    class="w-full h-full object-contain"
                                    loading="lazy">
                            </div>
                        @endforeach
                    </div>

                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

                <!-- 🔥 OVERLAY ATAS -->
                <div class="pointer-events-none absolute top-0 left-0 w-full h-48 z-10 fade-top"></div>

                <!-- 🔥 OVERLAY BAWAH -->
                <div class="pointer-events-none absolute bottom-0 left-0 w-full h-48 z-10 fade-bottom"></div>

            </div>
        </div>
        <div class="w-full flex justify-center">
            <div class="relative w-full md:w-6/12 min-h-screen z-10 rounded-bl-full rounded-br-full rounded-tl-full rounded-tr-full" style="background-color: rgb(134, 22, 22)">

                <!-- TITLE -->
                <div class="flex justify-center items-center mt-24 mb-5 text-white fade-scroll">
                    <h1 style="font-family: 'Sacramento', cursive; font-size: 34px;">
                        Our Gallery
                    </h1>
                </div>

                <!-- GRID -->
                <div class="grid grid-cols-2 gap-4 px-4 mt-8 mb-32">

                    @foreach ($gallery as $img)

                        @if ($img['orientation'] == 'landscape')
                            <div class="col-span-2 fade-scroll">
                                <img src="{{ asset('storage/'.$img['path']) }}"
                                    class="w-full h-64 object-cover rounded-xl">
                            </div>
                        @else
                            <div class="col-span-1 fade-scroll">
                                <img src="{{ asset('storage/'.$img['path']) }}"
                                    class="w-full h-64 object-cover rounded-xl">
                            </div>
                        @endif

                    @endforeach

                </div>

            </div>
        </div>
        <div class="flex justify-center fade-scroll items-center text-red-900">
            <div class="bg-red-300 w-full md:w-6/12">
                <div class="flex justify-center items-center"><i data-lucide="gift" class="w-10 h-10 mb-2 mt-10"></i></div>
                <div class="flex justify-center items-center"><h1 style="font-family: 'Sacramento', cursive; font-size: 34px;">Wedding Gift</h1></div>
            </div>
        </div>
        @php
            $dompet_digital = json_decode($undangan->dompet_digital, true);
            // dd('dompet_digital');
        @endphp
        <div class="w-full flex justify-center items-center">  
            <div class="grid grid-cols-1 md:grid-cols-2 w-full md:w-6/12 gap-2 bg-red-300 p-4">
                @foreach ($dompet_digital ?? [] as $dompet)
                    <div class="w-full h-56 fade-scroll md:h-80 relative max-h-56 md:max-h-80 rounded-lg bg-kartu-atm">
                        <div class="absolute top-7 md:top-[70px] right-0 mr-5">
                            <h1 class="text-white text-xl font-bold md:-mt-5">{{ $dompet['nama_bank'] }}</h1>
                        </div>
                        <div class="absolute bottom-7 left-0 ml-4 mb-2">
                            <h1 class="norek-text text-[18px] md:text-lg text-white font-semibold leading-tight">
                                {{$dompet['no_rek']}}
                            </h1>
                            <h1 class="md:text-lg text-[18px] text-white font-semibold leading-tight">{{$dompet['an_nama']}}</h1>
                            <p class="text-xs status-message"></p>
                        </div>
                        <div class="absolute bottom-0 right-0 mr-4 mb-2">
                            <button onclick="copyNorek(this)" class="bg-white mt-2 flex opacity-50 p-[3px] rounded-lg text-red-900">
                                <i data-lucide="copy" class="w-5 h-5 mr-2 text-red-900"></i>Copy
                            </button>
                        </div>
                    </div>
                @endforeach
                
                <div class="w-full fade-scroll md:h-auto bg-red-900 shadow-2xl p-4 rounded-lg">

                    <!-- ICON -->
                    <div class="flex justify-center items-center text-center mt-2">
                        <i data-lucide="gift" class="w-10 h-10 mb-2 mt-2 text-white"></i>
                    </div>

                    <!-- TITLE -->
                    <div class="flex justify-center items-center text-center mt-1 mb-2 text-white">
                        <h1 class="text-xl font-bold">Kirim Hadiah</h1>
                    </div>

                    <!-- DATA -->
                    <div id="data-alamat" class="space-y-2 text-sm text-white">

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
                            class="bg-gray-300 flex items-center p-2 rounded-lg text-red-900">
                            <i data-lucide="copy" class="w-5 h-5 mr-2"></i>
                            Copy
                        </button>
                    </div>

                </div>
            </div>
        </div>
        <div class="flex justify-center items-center">
            <div class="w-full md:w-6/12 bg-red-300">
                <div class="flex justify-center items-center mt-5 fade-scroll">
                    <h1 style="font-family: 'Sacramento', cursive; font-size: 34px;">Kirim Pesan</h1>
                </div>
                <div class="w-full flex justify-center items-center fade-scroll">
                    <form action="{{route('kirim_pesan')}}" method="post">
                        @csrf
                        <div class="w-full p-2">
                            <label>Nama</label>
                            <input type="hidden" name="slug" value="{{$undangan->slug}}" class="w-full bg-white border-red-500 outline-1 decoration-0 hover:border-2 hover:border-red-500 py-1.5 px-3 rounded-lg">
                            <input type="hidden" name="kode_pesan" value="{{$undangan->kode_pesan}}" class="w-full bg-white border-red-500 outline-1 decoration-0 hover:border-2 hover:border-red-500 py-1.5 px-3 rounded-lg">
                            <input type="text" name="nama" class="w-full bg-white border-red-500 outline-1 decoration-0 hover:border-2 hover:border-red-500 py-1.5 px-3 rounded-lg">
                        </div>
                        <div class="w-full p-2">
                            <label>Pesan</label>
                            <textarea  class="w-full bg-white border-red-500 outline-1 decoration-0 hover:border-2 hover:border-red-500 py-1.5 px-3 rounded-lg" name="pesan"></textarea>
                        </div>
                        <div class="w-full p-2">
                            <button type="submit" class="py-1.5 px-4 rounded-xl bg-white text-red-900">Kirim</button>
                        </div>
                    </form>
                </div>
                @foreach ($pesan as $message)
                    <div class="flex justify-center items-center fade-scroll">
                        <div class="mt-3 grid grid-cols-4 md:w-4/12 w-full ml-10 mr-10 md:ml-3 md:mr-3 bg-red-900 p-2 rounded-xl">
                            <div class="flex justify-center items-center p-1 bg-white rounded-full w-14 h-14">
                                <i data-lucide="circle-user-round" class="w-13 h-13"></i>
                            </div>
                            <div class="col-span-3 text-xs md:text-sm">
                                <p class="border-b-2 border-white text-xl font-bold text-white">{{$message->nama}}</p>
                                <p class="text-white">{{$message->pesan}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="p-3">{{ $pesan->links() }}</div>
                <div class="flex justify-center items-center fade-scroll p-2">
                    <div class="mt-4 bg-red-900 rounded-xl shadow-2xl p-3 w-full md:w-6/12">
                        <div class="flex justify-center items-center text-center text-white">
                            Mari bantu kami mempersiapkan acara menjadi lebih baik dengan mengisi formulir RSVP dibawah ini
                        </div>
                        <div class="flex justify-center items-center mt-2">
                            <button onclick="openModal()" class="py-1.5 px-4 rounded-xl bg-white text-red-900">Konfirmasi Kehadiran</button>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-center text-center fade-scroll mt-4 mb-4 bg-red-900 rounded-xl p-2 mr-2 ml-2">
                    <div class="md:w-6/12 w-full text-white">
                        <p>
                            Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir
                        </p>
                        <p class="mt-6">
                            (Q.S Ar Rum : 21)
                        </p>
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

                <!-- Overlay warna lembut -->
                <div class="absolute inset-0 bg-red-400/40"></div>

                <!-- Foto utama -->
                <div class="relative z-10 flex flex-col justify-center items-center 
                            w-full h-full text-center px-6">

                    <div class="w-72 h-72 md:w-80 md:h-80 rounded-full overflow-hidden 
                                ring-8 ring-white/40 shadow-2xl fade-scroll">
                        <img src="{{ asset('storage/'.$images->foto_cover) }}"
                            class="w-full h-full object-cover object-center">
                    </div>

                    <div class="mt-8 max-w-md fade-scroll text-white">
                        <span class="block">
                            Atas kehadiran dan doa restu dari Bapak/Ibu/Saudara/I sekalian,
                            kami mengucapkan Terima Kasih.
                        </span>
                        <p class="mt-2" style="font-family: 'Sacramento', cursive; font-size: 24px;">Wassalamualaikum Wr. Wb.</p>
                        <p class="mt-4">Kami yang berbahagia</p>
                        <p class="font-semibold" style="font-family: 'Sacramento', cursive; font-size: 34px;"> {{$undangan->judul_undangan}}</p>
                    </div>

                </div>
            </div>
        </div>
        <div class="flex justify-center items-center">
            <footer class="bg-red-300 text-center py-10 px-5 shadow-inner w-full md:w-8/12">
    
                <!-- Made With Love -->
                <div class="text-white text-sm md:text-base flex justify-center items-center gap-2 mb-3">
                    <span>Made With</span>
                    <span class="text-white text-lg animate-pulse">❤</span>
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
                <h2 class="mt-2 text-lg md:text-xl font-semibold text-white">
                    Invitin-Aja
                </h2>

                <!-- Tagline -->
                <p class="text-white text-sm md:text-base mt-2">
                    Percayakan undangan anda kepada kami
                </p>

                <!-- Button WhatsApp -->
                <div class="mt-6">
                    <a href="https://wa.me/62895610143232" target="_blank"
                    class="inline-block bg-red-600 hover:bg-red-700 text-white text-sm md:text-base px-6 py-3 rounded-full shadow-md transition duration-300">
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
        <span class="absolute top-5 right-5 text-white text-3xl cursor-pointer" onclick="tutupModal()">&times;</span>
        
        <img id="modalImage" class="max-w-[90%] max-h-[90%] rounded-lg shadow-lg">
    </div>
    <!-- Control Music -->
    <div class="fixed bottom-50 right-1 z-50">
        <button id="musicBtn"
            class="flex items-center rounded-full bg-white/80 p-1 shadow-lg hover:scale-105 transition">

            <!-- Icon -->
            <svg id="musicIcon" xmlns="http://www.w3.org/2000/svg"
                class="w-6 h-6 text-red-600" fill="currentColor"
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
                <h2 class="text-lg font-semibold text-red-700">Konfirmasi Kehadiran</h2>
                <button onclick="closeModal()" class="text-red-500 hover:text-red-700 text-xl">&times;</button>
            </div>
            <form action="{{route('konfirmasi_kehadiran')}}" method="post">
                @csrf
                <div class="w-full p-2">
                    <label>Nama</label>
                    <input type="hidden" name="slug" value="{{$undangan->slug}}" class="w-full bg-red-200 border-none decoration-0 hover:border-2 hover:border-red-500 py-1.5 px-3 rounded-lg">
                    <input type="hidden" name="kode_pesan" value="{{$undangan->kode_pesan}}" class="w-full bg-red-200 border-none decoration-0 hover:border-2 hover:border-red-500 py-1.5 px-3 rounded-lg">
                    <input type="text" name="nama" class="w-full bg-red-200 border-none decoration-0 hover:border-2 hover:border-red-500 py-1.5 px-3 rounded-lg">
                </div>
                <div class="w-full p-2">
                    <label>Konfirmasi</label>
                    <select name="konfirmasi_kehadiran" class="w-full bg-red-200 border-none decoration-0 hover:border-2 hover:border-red-500 py-1.5 px-3 rounded-lg">
                        <option>Ya, Saya Akan Hadir</option>
                        <option>Maaf, Saya Tidak Bisa Hadirr</option>
                    </select>
                </div>
                <div class="w-full p-2">
                    <button type="submit" class="py-1.5 px-4 rounded-xl bg-red-300 hover:bg-red-500 text-red-100">Kirim</button>
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
        AOS.init({
        duration: 1000,
        once: true,
        easing: 'ease-in-out'
        });
    </script>
</body>

</html>