<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Undangan Nikah') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">

    <script src="https://unpkg.com/lucide@latest"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .lock-scroll {
        overflow: hidden;
        height: 100vh;
        }
        .bg-cover1 {
            background-image: url('/images/coverundangan1.png');
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
            background-image: url('/images/bunda-daun.png');
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
            background-image: url('/images/kartu_atm.png');
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

        .animate-fadeCover {
            animation: fadeCover 1.6s ease-out forwards;
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
            animation: fade-scroll 1.6s ease-out forwards;
        }

        .bubble-wrapper {
            width: 100%;
            height: 100vh;
            overflow: hidden;
            pointer-events: none;
            top: 0;
            left: 0;
            z-index: 1;
        }

        .bubble-wrapper span {
            position: absolute;
            bottom: -100px;
            left: calc(-15% + var(--i) * 3%);
            width: calc(20px + var(--i) * 1px);
            height: calc(20px + var(--i) * 1px);
            border-radius: 50%;
            
            background: radial-gradient(circle at 30% 30%, 
                rgba(255,255,255,0.9),
                rgba(173,216,230,0.4),
                rgba(186,85,211,0.3)
            );

            box-shadow:
                inset -5px -5px 10px rgba(0,0,0,0.1),
                inset 5px 5px 15px rgba(255,255,255,0.7),
                0 0 10px rgba(173,216,230,0.4);

            animation: rise calc(150s / var(--i)) linear infinite;
        }

        .bubble-wrapper span::before {
            content: '';
            position: absolute;
            top: 8px;
            left: 8px;
            width: 30%;
            height: 30%;
            background: rgba(255,255,255,0.7);
            border-radius: 50%;
        }

        @keyframes rise {
            0% {
                transform: translateY(0) translateX(0) scale(0.8);
                opacity: 0;
            }
            20% {
                opacity: 1;
            }
            50% {
                transform: translateY(-50vh) translateX(15px);
            }
            100% {
                transform: translateY(-110vh) translateX(-15px) scale(1.2);
                opacity: 0;
            }
        }
        @media (max-width: 768px) {
            .bubble-wrapper span {
                width: calc(10px + var(--i) * 0.5px);
                height: calc(10px + var(--i) * 0.5px);
            }
        }

    </style>

</head>
@if ($undangan !== null)
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
<body class="overflow-x-hidden lock-scroll">
    <section id="cover">
        <div class="w-full flex justify-center">
            <div class="relative bg-cover1 w-full md:w-6/12 h-screen overflow-hidden z-10">
                <div class="bubble-wrapper absolute inset-0 z-0 pointer-events-none">
                    @for ($i = 0; $i < 25; $i++)
                        <span style="--i:{{ rand(5,35) }};"></span>
                    @endfor
                </div>

                {{-- Daun Bottom --}}
                <div class="absolute -bottom-15 -left-15 bunga w-72 h-72 md:w-96 md:h-96 opacity-70 rotate-180"
                    style="animation-name: angin-top; animation-delay: 0.5s;"></div>
                <div class="absolute -bottom-15 -right-15 bunga w-72 h-72 md:w-96 md:h-96 opacity-70 -scale-y-[1]"
                    style="animation-name: angin-top; animation-delay: 0.5s;"></div>
               
                <div class="w-full h-screen flex justify-center items-center">
                    <div>
                        <div class="w-full flex justify-center items-center opacity-0 animate-fadeCover">
                            <h1 class="text-yellow-600 mt-5">HAPPY WEDDING</h1>
                        </div>
                        <div class="w-full flex justify-center items-center opacity-0 animate-fadeCover">
                            <h1 class="text-yellow-600" style="font-family: 'Sacramento', cursive; font-size: 44px;">
                                Wedding Of
                            </h1>
                        </div>
                        <div class="w-full flex justify-center items-center">
                            <div class="w-56 h-56 md:w-80 md:h-80 rounded-full overflow-hidden 
                                ring-8 ring-white/40 shadow-2xl">
                                <img src="{{ asset('storage/'.$images->foto_cover) }}"
                                    class="w-full h-full object-cover object-center">
                            </div>
                        </div>
                        <div class="w-full flex justify-center items-center opacity-0 animate-fadeCover">
                            <h1 class="text-yellow-600" style="font-family: 'Sacramento', cursive; font-size: 44px;">
                                 {{$undangan->nama_mempelai_wanita}} &  {{$undangan->nama_mempelai_pria}}
                            </h1>
                        </div>
                        <div class="w-full flex justify-center items-center opacity-0 animate-fadeCover">
                            <div>
                                <div class="flex justify-center items-center">
                                    <p class="text-yellow-600 text-lg">Kepada Yth. Bapak/Ibu/Saudara/i</p>
                                </div>
                                <div class="flex justify-center items-center">
                                    <p class="text-yellow-800 text-xl font-bold">{{$tamu}}</p>
                                </div>
                                <div class="flex justify-center items-center text-center">
                                    <p class="text-yellow-600 text-sm">
                                        *Mohon maaf apabila ada kesalahan pada
                                        penulisan nama dan gelar
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 mb-5 w-full flex justify-center items-center opacity-0 animate-fadeCover">
                            <a href="#isi_undangan" id="btnBuka" class="bg-yellow-400 hover:bg-yellow-300 p-3 rounded-lg flex justify-center items-center">
                                <i data-lucide="mail-open" class="w-5 h-5 mr-2"></i>
                                <span class="text-yellow-600">Buka Undangan</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="isi_undangan" class="hidden">
        <div class="w-full flex justify-center items-center">
            <div class="relative bg-cover1 w-full md:w-6/12 h-screen overflow-hidden z-10">
                <div class="bubble-wrapper absolute inset-0 z-0 pointer-events-none">
                    @for ($i = 0; $i < 25; $i++)
                        <span style="--i:{{ rand(5,35) }};"></span>
                    @endfor
                </div>
               

                {{-- Daun Bottom --}}
                {{-- Daun Bottom --}}
                <div class="absolute -bottom-15 -left-15 bunga w-72 h-72 md:w-96 md:h-96 opacity-70 rotate-180"
                    style="animation-name: angin-top; animation-delay: 0.5s;"></div>
                <div class="absolute -bottom-15 -right-15 bunga w-72 h-72 md:w-96 md:h-96 opacity-70 -scale-y-[1]"
                    style="animation-name: angin-top; animation-delay: 0.5s;"></div>
                <div class="w-full h-screen flex justify-center items-center">
                    <div>
                        <div class="opacity-0 fade-scroll flex justify-center items-center">
                            <h1 class="text-yellow-600" style="font-family: 'Sacramento', cursive; font-size: 24px;">
                                The Wedding Of
                            </h1>
                        </div>
                        <div class="opacity-0 fade-scroll flex justify-center items-center">
                            <h1 class="text-yellow-600" style="font-family: 'Sacramento', cursive; font-size: 44px;">
                                {{$undangan->nama_mempelai_wanita}} &  {{$undangan->nama_mempelai_pria}}
                            </h1>
                        </div>
                        <div class="opacity-0 fade-scroll flex justify-center items-center">
                            <div class="grid grid-cols-3 gap-3 leading-tight">
                                <div class="text-xl md:text-3xl font-extrabold flex justify-center items-center">
                                    {{ \Carbon\Carbon::parse($undangan->tgl_akad)->locale('id')->translatedFormat('l') }}
                                </div>
                                <div class="text-sm md:text-xl font-extrabold border-r-2 border-l-2 border-yellow-800 p-4">
                                    <div class="flex justify-center items-center">
                                        {{ \Carbon\Carbon::parse($undangan->tgl_akad)->locale('id')->translatedFormat('d') }}
                                    </div>
                                    <div class="flex justify-center items-center">
                                        {{ \Carbon\Carbon::parse($undangan->tgl_akad)->locale('id')->translatedFormat('F') }}
                                    </div>
                                </div>
                                <div class="text-xl md:text-3xl font-extrabold flex justify-center items-center">
                                    {{ \Carbon\Carbon::parse($undangan->tgl_akad)->locale('id')->translatedFormat('Y') }}
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center items-center">
                             <!-- countdown container -->
                            <div>
                                <div id="countdown" class="mt-2 flex justify-center items-center text-xl md:text-3xl font-bold"></div>
                                    <div class="grid grid-cols-4 gap-4">
                                        <div class="opacity-0 fade-scroll bg-yellow-700 scale-anim w-18 h-18 p-1 font-bold text-white rounded-tl-xl rounded-br-xl flex justify-center items-center">
                                            <div class="flex justify-center items-center">
                                                <div>
                                                    <p id="days">0</p>
                                                    <p>Days</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="opacity-0 fade-scroll bg-yellow-700 scale-anim w-18 h-18 p-1 font-bold text-white rounded-tl-xl rounded-br-xl flex justify-center items-center">
                                            <div class="flex justify-center items-center">
                                                <div>
                                                    <p id="hours">0</p>
                                                    <p>Jam</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="opacity-0 fade-scroll bg-yellow-700 scale-anim w-18 h-18 p-1 font-bold text-white rounded-tl-xl rounded-br-xl flex justify-center items-center">
                                            <div class="flex justify-center items-center">
                                                <div>
                                                    <p id="minutes">0</p>
                                                    <p>Menit</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="opacity-0 fade-scroll bg-yellow-700 scale-anim w-18 h-18 p-1 font-bold text-white rounded-tl-xl rounded-br-xl flex justify-center items-center">
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
                            <div class="opacity-0 fade-scroll bg-yellow-600 rounded-xl p-3 text-white font-bold">
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
            <div class="relative bg-cover1 w-full md:w-6/12 h-screen overflow-hidden z-10">
                <div class="bubble-wrapper absolute inset-0 z-0 pointer-events-none">
                    @for ($i = 0; $i < 25; $i++)
                        <span style="--i:{{ rand(5,35) }};"></span>
                    @endfor
                </div>
               

                {{-- Daun Bottom --}}
                {{-- Daun Bottom --}}
                <div class="absolute -bottom-15 -left-15 bunga w-72 h-72 md:w-96 md:h-96 opacity-70 rotate-180"
                    style="animation-name: angin-top; animation-delay: 0.5s;"></div>
                <div class="absolute -bottom-15 -right-15 bunga w-72 h-72 md:w-96 md:h-96 opacity-70 -scale-y-[1]"
                    style="animation-name: angin-top; animation-delay: 0.5s;"></div>
                <div class="flex justify-center items-center w-full h-screen">
                    <div>
                         <div class="opacity-0 fade-scroll flex justify-center">
                            <img src="{{asset('/images/asset_undangan3.png')}}" alt="" class="w-24">
                        </div>
                        <div class="opacity-0 fade-scroll flex justify-center -mt-5">
                            <h1 style="font-family: 'Sacramento', cursive; font-size: 18px;">Assalamualaikum Wr. Wb</h1>
                        </div>
                        <div class="opacity-0 fade-scroll flex justify-center items-center text-center mt-2 mb-2">
                            <p class="w-10/12 text-[8px] md:text-sm">Dengan memohon Rahmat dan Ridho Allah SWT, Kami bermaksud mengundang Bapak/Ibu/Saudara/i untuk hadir dalam pernikahan kami</p>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-7">
                            <div class="col-span-3">
                                <div class="flex justify-center">
                                    <div>
                                        <div class="flex justify-center items-center">
                                            <div class="fade-scroll w-36 h-36 md:w-64 md:h-64 rounded-full overflow-hidden ring-[14px] ring-white/40 shadow-2xl">
                                                <img src="{{ asset('storage/'.$images->foto_mempelai_wanita) }}" class="w-full h-full object-cover object-center" alt="mempelai perempuan">
                                            </div>
                                        </div>
                                        <div class="flex justify-center items-center">
                                            <div class="mt-6">
                                                <div class="opacity-0 fade-scroll flex justify-center">
                                                    <h1 style="font-family: 'Sacramento', cursive; font-size: 20px;">{{$undangan->nama_mempelai_wanita}}</h1>
                                                </div>
                                                <div class="opacity-0 fade-scroll flex justify-center items-center text-[8px] text-center">
                                                    <p>Putri {{$anak_ke}} dari Bapak {{$undangan->nama_ayah_wanita}} dan Ibu {{$undangan->nama_ibu_wanita}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="flex justify-center items-center mb-5">
                                <div class="opacity-0 fade-scroll flex justify-center items-center -mb-10 text-4xl md:text-8xl">
                                    <h1 style="font-family: 'Sacramento', cursive;">&</h1>
                                </div>
                            </div>
                            <div class="col-span-3">
                                <div class="flex justify-center">
                                    <div>
                                        <div class="flex justify-center items-center">
                                            <div class="p-2">
                                                <div class="opacity-0 fade-scroll flex justify-center">
                                                    <h1 style="font-family: 'Sacramento', cursive; font-size: 20px;">{{$undangan->nama_mempelai_pria}}</h1>
                                                </div>
                                                <div class="opacity-0 fade-scroll flex justify-center items-center text-[8px] text-center mb-5">
                                                    <p>Putra {{$anak_ke}} dari Bapak {{$undangan->nama_ayah_pria}} dan Ibu {{$undangan->nama_ibu_pria}}</p>
                                                </div>  
                                            </div>
                                        </div>
                                        <div class="flex justify-center items-center">
                                            <div class="fade-scroll w-36 h-36 md:w-64 md:h-64 rounded-full overflow-hidden ring-[14px] ring-white/40 shadow-2xl">
                                                <img src="{{ asset('storage/'.$images->foto_mempelai_pria) }}" class="w-full h-full object-cover object-center" alt="mempelai perempuan">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <div class="w-full flex justify-center items-center">
            <div class="relative bg-cover1 w-full md:w-6/12 h-screen overflow-hidden z-10">
                <div class="bubble-wrapper absolute inset-0 z-0 pointer-events-none">
                    @for ($i = 0; $i < 25; $i++)
                        <span style="--i:{{ rand(5,35) }};"></span>
                    @endfor
                </div>
               

                {{-- Daun Bottom --}}
                {{-- Daun Bottom --}}
                <div class="absolute -bottom-15 -left-15 bunga w-72 h-72 md:w-96 md:h-96 opacity-70 rotate-180"
                    style="animation-name: angin-top; animation-delay: 0.5s;"></div>
                <div class="absolute -bottom-15 -right-15 bunga w-72 h-72 md:w-96 md:h-96 opacity-70 -scale-y-[1]"
                    style="animation-name: angin-top; animation-delay: 0.5s;"></div>
                <div class="flex justify-center items-center w-full h-screen text-center">
                    <div class="grid grid-cols-1 gap-1.5 w-10/12">
                        <div class="rounded-xl p-2 shadow-2xl fade-scroll">
                            <h1 style="font-family: 'Sacramento', cursive; font-size: 30px;">Akad Nikah</h1>
                            <p class="text-[9px] md:text-lg">{{ \Carbon\Carbon::parse($undangan->tgl_akad)->locale('id')->translatedFormat('l, d F Y') }}</p>
                            <p class="text-[9px] md:text-lg">Pukul {{ \Carbon\Carbon::parse($undangan->tgl_akad)->locale('id')->translatedFormat('H:i') }} {{$timezone}} - Selesai</p>
                            <p class="text-lg md:text-xl text-yellow-900 mt-2 mb-2">BERTEMPAT DI</p>
                            <p class="text-[9px] md:text-lg">{{$undangan->alamat_akad}}</p>
                            
                            <div class="flex justify-center items-center">
                                <a href="{{$undangan->maps_akad}}" class="mt-1 px-0.5 py-1.5 w-8/12 rounded-xl bg-yellow-400 flex justify-center items-center">
                                    <i data-lucide="map-minus" class="w-5 h-5 mr-2"></i>
                                    <span class="text-yellow-600">Buka Google Lokasi</span>
                                </a>
                            </div>

                        </div>
                        <div class="rounded-xl p-2 shadow-2xl mt-5 mb-5 fade-scroll">
                            <h1 style="font-family: 'Sacramento', cursive; font-size: 30px;">Resepsi</h1>
                            <p class="text-[9px] md:text-lg">{{ \Carbon\Carbon::parse($undangan->tgl_resepsi)->locale('id')->translatedFormat('l, d F Y') }}</p>
                            <p class="text-[9px] md:text-lg">Pukul {{ \Carbon\Carbon::parse($undangan->tgl_resepsi)->locale('id')->translatedFormat('H:i') }} {{$timezone}} - Selesai</p>
                            <p class="text-lg md:text-xl text-yellow-900 mt-2 mb-2">BERTEMPAT DI</p>
                            <p class="text-[9px] md:text-lg">{{$undangan->alamat_resepsi}}</p>
                            
                            <div class="flex justify-center items-center">
                                <a href="{{$undangan->maps_resepsi}}" class="mt-1 px-0.5 py-1.5 w-8/12 rounded-xl bg-yellow-400 flex justify-center items-center">
                                    <i data-lucide="map-minus" class="w-5 h-5 mr-2"></i>
                                    <span class="text-yellow-600">Buka Google Lokasi</span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <div class="w-full flex justify-center items-center">
            <div class="relative bg-cover1 w-full md:w-6/12 min-h-screen flex flex-col overflow-hidden z-10">
                <div class="bubble-wrapper absolute inset-0 z-0 pointer-events-none">
                    @for ($i = 0; $i < 25; $i++)
                        <span style="--i:{{ rand(5,35) }};"></span>
                    @endfor
                </div>
               

                {{-- Daun Bottom --}}
                {{-- Daun Bottom --}}
                <div class="absolute -bottom-15 -left-15 bunga w-72 h-72 md:w-96 md:h-96 opacity-70 rotate-180"
                    style="animation-name: angin-top; animation-delay: 0.5s;"></div>
                <div class="absolute -bottom-15 -right-15 bunga w-72 h-72 md:w-96 md:h-96 opacity-70 -scale-y-[1]"
                    style="animation-name: angin-top; animation-delay: 0.5s;"></div>
                <div class="flex justify-center items-center w-full h-screen pt-10 pb-10">
                    <div class="overflow-y-auto max-h-screen px-4 min-h-0">
                        <h1 style="font-family: 'Sacramento', cursive; font-size: 34px;" class="text-center">Our Story</h1>

                        <div class="relative border-l-4 border-yellow-500 pl-6 space-y-4 ml-2">

                            <!-- Item -->
                            <div class="timeline-item opacity-0 translate-y-10 transition-all duration-700">
                                <div class="flex justify-start mr-2">
                                    <div class="w-12 h-12 rounded-full bg-yellow-400 flex text-yellow-100 justify-center items-center mr-3"><i data-lucide="heart"></i></div>
                                    <div class="rounded-xl w-full p-2 shadow-2xl bg-white opacity-40 text-xs">
                                        <p>{{ \Carbon\Carbon::parse($stories->tgl_stori_1)->locale('id')->translatedFormat('Y') }}</p>
                                        <p>{{$stories->story_1}}</p>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="timeline-item opacity-0 translate-y-10 transition-all duration-700">
                                <div class="flex justify-start mr-2">
                                    <div class="w-12 h-12 rounded-full bg-yellow-400 flex text-yellow-100 justify-center items-center mr-3"><i data-lucide="heart"></i></div>
                                    <div class="rounded-xl w-full p-2 shadow-2xl bg-white opacity-40 text-xs">
                                        <p>{{ \Carbon\Carbon::parse($stories->tgl_stori_2)->locale('id')->translatedFormat('Y') }}</p>
                                        <p>{{$stories->story_2}}</p>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="timeline-item opacity-0 translate-y-10 transition-all duration-700">
                                <div class="flex justify-start mr-2">
                                    <div class="w-12 h-12 rounded-full bg-yellow-400 flex text-yellow-100 justify-center items-center mr-3"><i data-lucide="heart"></i></div>
                                    <div class="rounded-xl w-full p-2 shadow-2xl bg-white opacity-40 text-xs">
                                        <p>{{ \Carbon\Carbon::parse($stories->tgl_stori_3)->locale('id')->translatedFormat('Y') }}</p>
                                        <p>{{$stories->story_3}}</p>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="timeline-item opacity-0 translate-y-10 transition-all duration-700">
                                <div class="flex justify-start mr-2">
                                    <div class="w-12 h-12 rounded-full bg-yellow-400 flex text-yellow-100 justify-center items-center mr-3"><i data-lucide="heart"></i></div>
                                    <div class="rounded-xl w-full p-2 shadow-2xl bg-white opacity-40 text-xs">
                                        <p>{{ \Carbon\Carbon::parse($stories->tgl_stori_4)->locale('id')->translatedFormat('Y') }}</p>
                                        <p>{{$stories->story_4}}</p>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="timeline-item opacity-0 translate-y-10 transition-all duration-700">
                                <div class="flex justify-start mr-2">
                                    <div class="w-12 h-12 rounded-full bg-yellow-400 flex text-yellow-100 justify-center items-center mr-3"><i data-lucide="heart"></i></div>
                                    <div class="rounded-xl w-full p-2 shadow-2xl bg-white opacity-40 text-xs">
                                        <p>{{ \Carbon\Carbon::parse($stories->tgl_stori_5)->locale('id')->translatedFormat('Y') }}</p>
                                        <p>{{$stories->story_5}}</p>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="timeline-item opacity-0 translate-y-10 transition-all duration-700">
                                <div class="flex justify-start mr-2">
                                    <div class="w-12 h-12 rounded-full bg-yellow-400 flex text-yellow-100 justify-center items-center mr-3"><i data-lucide="heart"></i></div>
                                    <div class="rounded-xl w-full p-2 shadow-2xl bg-white opacity-40 text-xs">
                                        <p>{{ \Carbon\Carbon::parse($stories->tgl_stori_6)->locale('id')->translatedFormat('Y') }}</p>
                                        <p>{{$stories->story_6}}</p>
                                    </div>
                                    
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <div class="flex justify-center items-center mt-5 mb-5 ">
            <h1 style="font-family: 'Sacramento', cursive; font-size: 34px;">Our Gallery</h1>
        </div>
        <div class="w-full flex justify-center items-center bg-white text-center mt-3">  
            <div class="grid grid-cols-1 md:grid-cols-2 w-full md:w-6/12 gap-3">
                @foreach ($images->gallery as $image)
                    <div class="w-full fade-scroll flex justify-center items-center h-64 rounded-lg overflow-hidden">
                        <img src="{{ asset('storage/'.$image) }}"
                            class="max-w-full max-h-full object-contain object-center"
                            alt="foto-gallery">
                    </div>
                    
                @endforeach
                
            </div>
        </div>
        <div class="flex justify-center items-center ">
            <div class="bg-white w-full md:w-6/12">
                <div class="flex justify-center items-center"><i data-lucide="gift" class="w-10 h-10 mb-2 mt-10"></i></div>
                <div class="flex justify-center items-center"><h1 style="font-family: 'Sacramento', cursive; font-size: 34px;">Wedding Gift</h1></div>
            </div>
        </div>
        <div class="w-full flex justify-center items-center">  
            <div class="grid grid-cols-1 md:grid-cols-2 w-full md:w-6/12 gap-2 bg-white p-4">
                <div class="w-full h-56 fade-scroll md:h-80 relative max-h-56 md:max-h-80 rounded-lg bg-kartu-atm">
                    <div class="absolute top-8 md:top-[70px] right-0 mr-4">
                        <h1 class="text-white text-xl font-bold md:-mt-5">{{$undangan->nama_bank}}</h1>
                    </div>
                    <div class="absolute bottom-0 left-0 ml-4 mb-2">
                        <h1 id="norek_1" class="text-xs md:text-lg text-white font-semibold leading-tight">{{$undangan->no_rek_bank}}</h1>
                        <h1 class="md:text-lg text-xs text-white font-semibold leading-tight">{{$undangan->an_bank}}</h1>
                        <p class="text-xs" id="message1"></p>
                        <button onclick="copy_no_rek1()" class="bg-white opacity-50 p-[3px] rounded-lg">Salin No Rek</button>
                    </div>
                </div>
                <div class="w-full h-56 fade-scroll md:h-80 relative max-h-56 md:max-h-80 rounded-lg bg-kartu-atm">
                    <div class="absolute top-8 md:top-[70px] right-0 mr-4">
                        <h1 class="text-white text-xl font-bold md:-mt-5">{{$undangan->nama_ewalet}}</h1>
                    </div>
                    <div class="absolute bottom-0 left-0 ml-4 mb-2">
                        <h1 id="norek_2" class="text-xs md:text-lg text-white font-semibold leading-tight">{{$undangan->no_ewalet}}</h1>
                        <h1 class="md:text-lg text-xs text-white font-semibold leading-tight">{{$undangan->an_ewalet}}</h1>
                        <p class="text-xs" id="message2"></p>
                        <button onclick="copy_no_rek2()" class="bg-white opacity-50 p-[3px] rounded-lg">Salin No Rek</button>
                    </div>
                </div>
                <div class="w-full h-56 fade-scroll md:h-80 bg-white shadow-2xl p-2 max-h-56 md:max-h-80 rounded-lg">
                    <div class="flex justify-center items-center text-center mt-2">
                        <i data-lucide="gift" class="w-10 h-10 mb-2 mt-5"></i>
                    </div>
                    <div class="flex justify-center items-center text-center mt-2 mb-2">
                        <h1 class="text-xl font-bold">Kirim Hadiah</h1>
                    </div>
                    <div id="data-alamat">
                        <div class="flex leading-tight text-xs md:text-sm">
                            <table>
                                 <thead >
                                    <th class="w-16 text-left">Nama</th>
                                    <th class="w-5">:</th>
                                    <th class="text-left leading-tight">{{$undangan->nama_mempelai_wanita}}</th>

                                </thead>
                            </table>
                        </div>
                         <div class="flex leading-tight text-xs md:text-sm">
                            <table>
                                <thead>
                                    <th class="w-16 text-left">Alamat</th>
                                    <th class="w-5">:</th>
                                    <th class="text-left leading-tight ">{{$undangan->alamat_kirim_hadiah}}</th>

                                </thead>
                            </table>
                        </div>
                    </div>
                    <div>
                        <button onclick="copy_alamat()" class="bg-yellow-400 opacity-50 p-[3px] rounded-lg mt-2">Salin Alamat</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center items-center">
            <div class="w-full md:w-6/12 bg-white">
                <div class="flex justify-center items-center mt-5 fade-scroll">
                    <h1 style="font-family: 'Sacramento', cursive; font-size: 34px;">Kirim Pesan</h1>
                </div>
                <div class="w-full flex justify-center items-center fade-scroll">
                    <form action="{{route('kirim_pesan')}}" method="post">
                        @csrf
                        <div class="w-full p-2">
                            <label>Nama</label>
                            <input type="hidden" name="slug" value="{{$undangan->slug}}" class="w-full bg-white border-yellow-500 outline-1 decoration-0 hover:border-2 hover:border-yellow-500 py-1.5 px-3 rounded-lg">
                            <input type="hidden" name="kode_pesan" value="{{$undangan->kode_pesan}}" class="w-full bg-white border-yellow-500 outline-1 decoration-0 hover:border-2 hover:border-yellow-500 py-1.5 px-3 rounded-lg">
                            <input type="text" name="nama" class="w-full bg-white border-yellow-500 outline-1 decoration-0 hover:border-2 hover:border-yellow-500 py-1.5 px-3 rounded-lg">
                        </div>
                        <div class="w-full p-2">
                            <label>Pesan</label>
                            <textarea  class="w-full bg-white border-yellow-500 outline-1 decoration-0 hover:border-2 hover:border-yellow-500 py-1.5 px-3 rounded-lg" name="pesan"></textarea>
                        </div>
                        <div class="w-full p-2">
                            <button type="submit" class="py-1.5 px-4 rounded-xl bg-yellow-300 hover:bg-yellow-500 text-yellow-100">Kirim</button>
                        </div>
                    </form>
                </div>
                @foreach ($pesan as $message)
                    <div class="flex justify-center items-center fade-scroll">
                        <div class="mt-3 grid grid-cols-4 md:w-4/12 w-full ml-10 mr-10 md:ml-3 md:mr-3">
                            <div class="flex justify-center items-center p-1 bg-white rounded-full w-14 h-14">
                                <i data-lucide="circle-user-round" class="w-13 h-13"></i>
                            </div>
                            <div class="col-span-3 text-xs md:text-sm">
                                <p class="border-b-2 border-black text-xl font-bold">{{$message->nama}}</p>
                                <p>{{$message->pesan}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="p-3">{{ $pesan->links() }}</div>
                <div class="flex justify-center items-center fade-scroll">
                    <div class="mt-4 bg-white rounded-xl shadow-2xl p-3 w-full md:w-6/12">
                        <div class="flex justify-center items-center text-center">
                            Mari bantu kami mempersiapkan acara menjadi lebih baik dengan mengisi formulir RSVP dibawah ini
                        </div>
                        <div class="flex justify-center items-center mt-2">
                            <button onclick="openModal()" class="py-1.5 px-4 rounded-xl bg-yellow-300 hover:bg-yellow-500 text-yellow-200">Konfirmasi Kehadiran</button>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-center text-center fade-scroll">
                    <div class="md:w-6/12 w-full p-3">
                        <p>
                            Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu istri-istri dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya diantaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum yang berfikir.
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
                <img src="{{ asset('storage/'.$images->foto_cover) }}"
                    class="absolute inset-0 w-full h-full object-cover fade-scroll">

                <!-- Background Blur 50% Bawah -->
                <img src="{{ asset('storage/'.$images->foto_cover) }}"
                    class="absolute bottom-0 w-full h-3/12 object-cover blur-2xl scale-150">

                <!-- Overlay warna lembut -->
                <div class="absolute inset-0 bg-yellow-200/40"></div>

                <!-- Foto utama -->
                <div class="relative z-10 flex flex-col justify-center items-center 
                            w-full h-full text-center px-6">

                    <div class="w-72 h-72 md:w-80 md:h-80 rounded-full overflow-hidden 
                                ring-8 ring-white/40 shadow-2xl">
                        <img src="{{ asset('storage/'.$images->foto_cover) }}"
                            class="w-full h-full object-cover object-center">
                    </div>

                    <div class="mt-8 max-w-md fade-scroll">
                        <span class="block">
                            Atas kehadiran dan doa restu dari Bapak/Ibu/Saudara/I sekalian,
                            kami mengucapkan Terima Kasih.
                        </span>
                        <p class="mt-2" style="font-family: 'Sacramento', cursive; font-size: 28px;">Wassalamualaikum Wr. Wb.</p>
                        <p class="mt-4">Kami yang berbahagia</p>
                        <p class="font-semibold" style="font-family: 'Sacramento', cursive; font-size: 34px;">{{$undangan->nama_mempelai_wanita}} & {{$undangan->nama_mempelai_pria}}</p>
                    </div>

                </div>
            </div>
        </div>

    {{-- music --}}
    <!-- Audio -->
    <audio id="bgMusic" loop>
       <source src="{{ asset('storage/soundtrack/'.$images->soundtrack) }}" type="audio/mpeg">
    </audio>

    <!-- Control Music -->
    <div class="fixed bottom-6 left-1/2 -translate-x-1/2 z-50">
        <button id="musicBtn"
            class="flex items-center gap-2 bg-white/80 backdrop-blur-md px-5 py-3 rounded-full shadow-lg hover:scale-105 transition">

            <!-- Icon -->
            <svg id="musicIcon" xmlns="http://www.w3.org/2000/svg"
                class="w-6 h-6 text-yellow-600" fill="currentColor"
                viewBox="0 0 24 24">
                <path d="M8 5v14l11-7z"/>
            </svg>

            <span class="text-sm font-medium">Play Backsound</span>
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
                <h2 class="text-lg font-semibold text-yellow-700">Konfirmasi Kehadiran</h2>
                <button onclick="closeModal()" class="text-yellow-500 hover:text-yellow-700 text-xl">&times;</button>
            </div>
            <form action="{{route('konfirmasi_kehadiran')}}" method="post">
                @csrf
                <div class="w-full p-2">
                    <label>Nama</label>
                    <input type="hidden" name="slug" value="{{$undangan->slug}}" class="w-full bg-yellow-200 border-none decoration-0 hover:border-2 hover:border-yellow-500 py-1.5 px-3 rounded-lg">
                    <input type="hidden" name="kode_pesan" value="{{$undangan->kode_pesan}}" class="w-full bg-yellow-200 border-none decoration-0 hover:border-2 hover:border-yellow-500 py-1.5 px-3 rounded-lg">
                    <input type="text" name="nama" class="w-full bg-yellow-200 border-none decoration-0 hover:border-2 hover:border-yellow-500 py-1.5 px-3 rounded-lg">
                </div>
                <div class="w-full p-2">
                    <label>Konfirmasi</label>
                    <select name="konfirmasi_kehadiran" class="w-full bg-yellow-200 border-none decoration-0 hover:border-2 hover:border-yellow-500 py-1.5 px-3 rounded-lg">
                        <option>Ya, Saya Akan Hadir</option>
                        <option>Maaf, Saya Tidak Bisa Hadirr</option>
                    </select>
                </div>
                <div class="w-full p-2">
                    <button type="submit" class="py-1.5 px-4 rounded-xl bg-yellow-300 hover:bg-yellow-500 text-yellow-100">Kirim</button>
                </div>
            </form>
        </div>
    </div>
    
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
        function copy_no_rek1(){
            const norek1 = document.getElementById('norek_1').innerText;

            navigator.clipboard.writeText(norek1).then(() => {
                document.getElementById("message1").innerText = "No Rek Berhasil Disalin!";
            }).catch(err => {
                document.getElementById("message1").innerText = "No Rek Gagal Disalin!";
            });
        }

        function copy_no_rek2(){
            const norek2 = document.getElementById('norek_2').innerText;

            navigator.clipboard.writeText(norek2).then(() => {
                document.getElementById("message2").innerText = "No Rek Berhasil Disalin!";
            }).catch(err => {
                document.getElementById("message2").innerText = "No Rek Gagal Disalin!";
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
        const targetDate = new Date("{{ \Carbon\Carbon::parse($undangan->tgl_akad)->locale('id')->translatedFormat('l, d F Y') }}").getTime();

        const countdown = setInterval(() => {
            const now = new Date().getTime();
            const distance = targetDate - now;

            if (distance < 0) {
                clearInterval(countdown);
                document.getElementById("countdown").innerHTML =
                    "Acara telah dimulai 🎉";
                return;
            }

            document.getElementById("days").innerText =
                Math.floor(distance / (1000 * 60 * 60 * 24));
            document.getElementById("hours").innerText =
                Math.floor((distance / (1000 * 60 * 60)) % 24);
            document.getElementById("minutes").innerText =
                Math.floor((distance / (1000 * 60)) % 60);
            document.getElementById("seconds").innerText =
                Math.floor((distance / 1000) % 60);
        }, 1000);
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const elements = document.querySelectorAll(".fade-scroll");

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
        AOS.init({
        disable: 'mobile'
        });
    </script>

</body> 
@else
<body class="overflow-x-hidden lock-scroll">
    <section id="cover">
        <div class="w-full flex justify-center">
            <div class="relative bg-cover1 w-full md:w-6/12 h-screen overflow-hidden z-10">
                <div class="bubble-wrapper absolute inset-0 z-0 pointer-events-none">
                    @for ($i = 0; $i < 25; $i++)
                        <span style="--i:{{ rand(5,35) }};"></span>
                    @endfor
                </div>

                {{-- Daun Bottom --}}
                <div class="absolute -bottom-15 -left-15 bunga w-72 h-72 md:w-96 md:h-96 opacity-70 rotate-180"
                    style="animation-name: angin-top; animation-delay: 0.5s;"></div>
                <div class="absolute -bottom-15 -right-15 bunga w-72 h-72 md:w-96 md:h-96 opacity-70 -scale-y-[1]"
                    style="animation-name: angin-top; animation-delay: 0.5s;"></div>
               
                <div class="w-full h-screen flex justify-center items-center">
                    <div>
                        <div class="w-full flex justify-center items-center opacity-0 animate-fadeCover">
                            <h1 class="text-yellow-600 mt-4">HAPPY WEDDING</h1>
                        </div>
                        <div class="w-full flex justify-center items-center opacity-0 animate-fadeCover">
                            <h1 class="text-yellow-600" style="font-family: 'Sacramento', cursive; font-size: 44px;">
                                Wedding Of
                            </h1>
                        </div>
                        <div class="w-full flex justify-center items-center">
                            <img src="{{ asset('/images/foto_cover.gif') }}" alt="foto cover" class="w-72 h-72 opacity-0 animate-fadeCover">
                        </div>
                        <div class="w-full flex justify-center items-center opacity-0 animate-fadeCover">
                            <h1 class="text-yellow-600" style="font-family: 'Sacramento', cursive; font-size: 44px;">
                                Sururul & Rizki
                            </h1>
                        </div>
                        <div class="w-full flex justify-center items-center opacity-0 animate-fadeCover">
                            <div>
                                <div class="flex justify-center items-center">
                                    <p class="text-yellow-600 text-lg">Kepada Yth. Bapak/Ibu/Saudara/i</p>
                                </div>
                                <div class="flex justify-center items-center">
                                    <p class="text-yellow-800 text-xl font-bold">Nama Tamu</p>
                                </div>
                                <div class="flex justify-center items-center text-center">
                                    <p class="text-yellow-600 text-sm">
                                        *Mohon maaf apabila ada kesalahan pada
                                        penulisan nama dan gelar
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 mb-5 w-full flex justify-center items-center opacity-0 animate-fadeCover">
                            <a href="#isi_undangan" id="btnBuka" class="bg-yellow-400 hover:bg-yellow-300 p-3 rounded-lg flex justify-center items-center">
                                <i data-lucide="mail-open" class="w-5 h-5 mr-2"></i>
                                <span class="text-yellow-600">Buka Undangan</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="isi_undangan" class="hidden">
        <div class="w-full flex justify-center items-center">
            <div class="relative bg-cover1 w-full md:w-6/12 h-screen overflow-hidden z-10">
                <div class="bubble-wrapper absolute inset-0 z-0 pointer-events-none">
                    @for ($i = 0; $i < 25; $i++)
                        <span style="--i:{{ rand(5,35) }};"></span>
                    @endfor
                </div>
               

                {{-- Daun Bottom --}}
                {{-- Daun Bottom --}}
                <div class="absolute -bottom-15 -left-15 bunga w-72 h-72 md:w-96 md:h-96 opacity-70 rotate-180"
                    style="animation-name: angin-top; animation-delay: 0.5s;"></div>
                <div class="absolute -bottom-15 -right-15 bunga w-72 h-72 md:w-96 md:h-96 opacity-70 -scale-y-[1]"
                    style="animation-name: angin-top; animation-delay: 0.5s;"></div>
                <div class="w-full h-screen flex justify-center items-center">
                    <div>
                        <div class="opacity-0 fade-scroll flex justify-center items-center">
                            <h1 class="text-yellow-600" style="font-family: 'Sacramento', cursive; font-size: 24px;">
                                The Wedding Of
                            </h1>
                        </div>
                        <div class="opacity-0 fade-scroll flex justify-center items-center">
                            <h1 class="text-yellow-600" style="font-family: 'Sacramento', cursive; font-size: 44px;">
                                Sururul & Rizki
                            </h1>
                        </div>
                        <div class="opacity-0 fade-scroll flex justify-center items-center">
                            <div class="grid grid-cols-3 gap-3 leading-tight">
                                <div class="text-xl md:text-3xl font-extrabold flex justify-center items-center">
                                    <p>Senin</p>
                                </div>
                                <div class="text-sm md:text-xl font-extrabold border-r-2 border-l-2 border-yellow-800 p-4">
                                    <div class="flex justify-center items-center">
                                        <p>28</p>
                                    </div>
                                    <div class="flex justify-center items-center">
                                        <p>Oktober</p>
                                    </div>
                                </div>
                                <div class="text-xl md:text-3xl font-extrabold flex justify-center items-center">
                                    <p>2026</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center items-center mt-20">
                             <!-- countdown container -->
                            <div id="countdown" class="mt-6"></div>
                            <div class="grid grid-cols-4 gap-4">
                                <div class="opacity-0 fade-scroll bg-yellow-700 scale-anim w-18 h-18 p-1 font-bold text-white rounded-tl-xl rounded-br-xl flex justify-center items-center">
                                    <div class="flex justify-center items-center">
                                        <div>
                                            <p id="days">0</p>
                                            <p>Days</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="opacity-0 fade-scroll bg-yellow-700 scale-anim w-18 h-18 p-1 font-bold text-white rounded-tl-xl rounded-br-xl flex justify-center items-center">
                                    <div class="flex justify-center items-center">
                                        <div>
                                            <p id="hours">0</p>
                                            <p>Jam</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="opacity-0 fade-scroll bg-yellow-700 scale-anim w-18 h-18 p-1 font-bold text-white rounded-tl-xl rounded-br-xl flex justify-center items-center">
                                    <div class="flex justify-center items-center">
                                        <div>
                                            <p id="minutes">0</p>
                                            <p>Menit</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="opacity-0 fade-scroll bg-yellow-700 scale-anim w-18 h-18 p-1 font-bold text-white rounded-tl-xl rounded-br-xl flex justify-center items-center">
                                    <div class="flex justify-center items-center">
                                        <div>
                                            <p id="seconds">0</p>
                                            <p>Detik</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center items-center mt-10">
                            <div class="opacity-0 fade-scroll bg-yellow-600 rounded-xl p-3 text-white font-bold">
                                <a class="flex justify-center items-center" href="https://www.google.com/calendar/render?action=TEMPLATE&text=The+Wedding+of+Fulan+%26+Fulanah&details=The+Wedding+of+Fulan+%26+Fulanah%3Cbr%3EFriday%2C+20+October+2023+Pukul+17%3A51%3Cbr%3EKediaman+Mempelai+Wanita%0D%0AJl.+Jend.+Sudirman+No.+116%0D%0ABandung+-+Jabar&dates=20231020T175100/20231020T175100&location=https://maps.app.goo.gl/EBR6nMWSjvmpzqVKA&ctz=Asia%2FJakarta" target="_blank" rel="noopener noreferrer">
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
            <div class="relative bg-cover1 w-full md:w-6/12 h-screen overflow-hidden z-10">
                <div class="bubble-wrapper absolute inset-0 z-0 pointer-events-none">
                    @for ($i = 0; $i < 25; $i++)
                        <span style="--i:{{ rand(5,35) }};"></span>
                    @endfor
                </div>
               

                {{-- Daun Bottom --}}
                {{-- Daun Bottom --}}
                <div class="absolute -bottom-15 -left-15 bunga w-72 h-72 md:w-96 md:h-96 opacity-70 rotate-180"
                    style="animation-name: angin-top; animation-delay: 0.5s;"></div>
                <div class="absolute -bottom-15 -right-15 bunga w-72 h-72 md:w-96 md:h-96 opacity-70 -scale-y-[1]"
                    style="animation-name: angin-top; animation-delay: 0.5s;"></div>
                <div class="opacity-0 fade-scroll flex justify-center mt-10 md:mt-32">
                    <h1 style="font-family: 'Sacramento', cursive; font-size: 28px;">Assalamualaikum Wr. Wb</h1>
                </div>
                 <div class="opacity-0 fade-scroll flex justify-center items-center text-center mt-2 mb-2">
                    <p class="w-10/12 text-xs md:text-sm">Dengan memohon Rahmat dan Ridho Allah SWT, Kami bermaksud mengundang Bapak/Ibu/Saudara/i untuk hadir dalam pernikahan kami</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-7 md:mt-16 mt-0.5">
                    <div class="col-span-3">
                        <div class="flex justify-center">
                            <div>
                                <div class="flex justify-center items-center">
                                    <div class="fade-scroll w-44 h-44 md:w-64 md:h-64 rounded-full overflow-hidden ring-[14px] ring-white/40 shadow-2xl">
                                        <img src="{{ asset('/images/cewe korea.jpeg') }}" class="w-full h-full object-cover object-center" alt="mempelai perempuan">
                                    </div>
                                </div>
                                <div class="flex justify-center items-center">
                                    <div class="mt-6">
                                        <div class="opacity-0 fade-scroll flex justify-center">
                                            <h1 style="font-family: 'Sacramento', cursive; font-size: 34px;">Sururul Hafizhah</h1>
                                        </div>
                                        <div class="opacity-0 fade-scroll flex justify-center items-center text-xs text-center">
                                            <p>Putri Pertama dari Bapak Yusuf Ali dan Ibu Nurbaya</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="flex justify-center items-center mb-5">
                        <div class="opacity-0 fade-scroll flex justify-center items-center -mb-10 text-4xl md:text-8xl">
                            <h1 style="font-family: 'Sacramento', cursive;">&</h1>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="flex justify-center">
                            <div>
                                <div class="flex justify-center items-center">
                                    <div class="p-2">
                                        <div class="opacity-0 fade-scroll flex justify-center">
                                            <h1 style="font-family: 'Sacramento', cursive; font-size: 34px;">Rizki Ahmad Wahyu</h1>
                                        </div>
                                        <div class="opacity-0 fade-scroll flex justify-center items-center text-xs text-center mb-5">
                                            <p>Putra Pertama dari Bapak Amin Ali dan Ibu Fatimah</p>
                                        </div>  
                                    </div>
                                </div>
                                <div class="flex justify-center items-center">
                                    <div class="fade-scroll w-44 h-44 md:w-64 md:h-64 rounded-full overflow-hidden ring-[14px] ring-white/40 shadow-2xl">
                                        <img src="{{ asset('/images/cowo korea.jpeg') }}" class="w-full h-full object-cover object-center" alt="mempelai perempuan">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <div class="w-full flex justify-center items-center">
            <div class="relative bg-cover1 w-full md:w-6/12 h-screen overflow-hidden z-10">
                <div class="bubble-wrapper absolute inset-0 z-0 pointer-events-none">
                    @for ($i = 0; $i < 25; $i++)
                        <span style="--i:{{ rand(5,35) }};"></span>
                    @endfor
                </div>
               

                {{-- Daun Bottom --}}
                {{-- Daun Bottom --}}
                <div class="absolute -bottom-15 -left-15 bunga w-72 h-72 md:w-96 md:h-96 opacity-70 rotate-180"
                    style="animation-name: angin-top; animation-delay: 0.5s;"></div>
                <div class="absolute -bottom-15 -right-15 bunga w-72 h-72 md:w-96 md:h-96 opacity-70 -scale-y-[1]"
                    style="animation-name: angin-top; animation-delay: 0.5s;"></div>
                <div class="flex justify-center items-center mt-24 text-center">
                    <div class="grid grid-cols-1 gap-1.5 w-10/12">
                        <div class="rounded-xl p-2 shadow-2xl fade-scroll">
                            <h1 style="font-family: 'Sacramento', cursive; font-size: 34px;">Akad Nikah</h1>
                            <p class="text-md md:text-lg">Sabtu, 27 Mei 2026</p>
                            <p class="text-md md:text-lg">Pukul 08.00 WIB - Selesai</p>
                            <p class="text-lg md:text-xl text-yellow-900 mt-2 mb-2">BERTEMPAT DI</p>
                            <p class="text-md md:text-lg">Kediaman Mempelai Wanita Cangkuang RT. 2 RW. 2 Desa Cangkuang Kec. Cangkuang, Kab. Bandung</p>
                            
                            <div class="flex justify-center items-center">
                                <a href="" class="mt-5 px-2 py-4 w-8/12 rounded-xl bg-yellow-400 flex justify-center items-center">
                                    <i data-lucide="map-minus" class="w-5 h-5 mr-2"></i>
                                    <span class="text-yellow-600">Buka Google Lokasi</span>
                                </a>
                            </div>

                        </div>
                        <div class="rounded-xl p-2 shadow-2xl mt-5 mb-5 fade-scroll">
                            <h1 style="font-family: 'Sacramento', cursive; font-size: 34px;">Resepsi</h1>
                            <p class="text-md md:text-lg">Sabtu, 27 Mei 2026</p>
                            <p class="text-md md:text-lg">Pukul 10.00 WIB - Selesai</p>
                            <p class="text-lg md:text-xl text-yellow-900 mt-2 mb-2">BERTEMPAT DI</p>
                            <p class="text-md md:text-lg">Kediaman Mempelai Wanita Cangkuang RT. 2 RW. 2 Desa Cangkuang Kec. Cangkuang, Kab. Bandung</p>
                            
                            <div class="flex justify-center items-center">
                                <a href="" class="mt-5 px-2 py-4 w-8/12 rounded-xl bg-yellow-400 flex justify-center items-center">
                                    <i data-lucide="map-minus" class="w-5 h-5 mr-2"></i>
                                    <span class="text-yellow-600">Buka Google Lokasi</span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <div class="w-full flex justify-center items-center">
            <div class="relative bg-cover1 w-full md:w-6/12 h-screen overflow-hidden z-10">
                <div class="bubble-wrapper absolute inset-0 z-0 pointer-events-none">
                    @for ($i = 0; $i < 25; $i++)
                        <span style="--i:{{ rand(5,35) }};"></span>
                    @endfor
                </div>
               

                {{-- Daun Bottom --}}
                {{-- Daun Bottom --}}
                <div class="absolute -bottom-15 -left-15 bunga w-72 h-72 md:w-96 md:h-96 opacity-70 rotate-180"
                    style="animation-name: angin-top; animation-delay: 0.5s;"></div>
                <div class="absolute -bottom-15 -right-15 bunga w-72 h-72 md:w-96 md:h-96 opacity-70 -scale-y-[1]"
                    style="animation-name: angin-top; animation-delay: 0.5s;"></div>
                <div class="max-w-4xl mx-auto py-20">
                    <h1 style="font-family: 'Sacramento', cursive; font-size: 34px;" class="text-center">Our Story</h1>

                    <div class="relative border-l-4 border-yellow-500 pl-8 space-y-16 ml-2">

                        <!-- Item -->
                        <div class="timeline-item opacity-0 translate-y-10 transition-all duration-700">
                            <div class="flex justify-start mr-2">
                                <div class="w-12 h-12 rounded-full bg-yellow-400 flex text-yellow-100 justify-center items-center mr-3"><i data-lucide="heart"></i></div>
                                <div class="rounded-xl w-full p-2 shadow-2xl bg-white opacity-40 text-xs">
                                    <p>2021</p>
                                    <p>Awal bertemu di aula kampus saat acara masa orientasi kampus</p>
                                </div>
                                
                            </div>
                        </div>

                        <div class="timeline-item opacity-0 translate-y-10 transition-all duration-700">
                            <div class="flex justify-start mr-2">
                                <div class="w-12 h-12 rounded-full bg-yellow-400 flex text-yellow-100 justify-center items-center mr-3"><i data-lucide="heart"></i></div>
                                <div class="rounded-xl w-full p-2 shadow-2xl bg-white opacity-40 text-xs">
                                    <p>2022</p>
                                    <p>hubungan jarak jauh karena peoject kampus</p>
                                </div>
                                
                            </div>
                        </div>

                        <div class="timeline-item opacity-0 translate-y-10 transition-all duration-700">
                            <div class="flex justify-start mr-2">
                                <div class="w-12 h-12 rounded-full bg-yellow-400 flex text-yellow-100 justify-center items-center mr-3"><i data-lucide="heart"></i></div>
                                <div class="rounded-xl w-full p-2 shadow-2xl bg-white opacity-40 text-xs">
                                    <p>2024</p>
                                    <p>kita berdua memutuskan untuk tunangan dan memantapkan hati</p>
                                </div>
                                
                            </div>
                        </div>

                        <div class="timeline-item opacity-0 translate-y-10 transition-all duration-700">
                            <div class="flex justify-start mr-2">
                                <div class="w-12 h-12 rounded-full bg-yellow-400 flex text-yellow-100 justify-center items-center mr-3"><i data-lucide="heart"></i></div>
                                <div class="rounded-xl w-full p-2 shadow-2xl bg-white opacity-40 text-xs">
                                    <p>2025</p>
                                    <p>kita disatukan dan seluruh alam menjadi saksinya</p>
                                </div>
                                
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div> 
        <div class="flex justify-center items-center mt-5 mb-5 ">
            <h1 style="font-family: 'Sacramento', cursive; font-size: 34px;">Our Gallery</h1>
        </div>
        <div class="w-full flex justify-center items-center bg-white text-center mt-3">  
            <div class="grid grid-cols-1 md:grid-cols-2 w-full md:w-6/12 gap-3">
                <div class="w-full fade-scroll flex justify-center items-center h-64 rounded-lg overflow-hidden">
                    <img src="{{ asset('images/foto-gallery.jpeg') }}"
                        class="max-w-full max-h-full object-contain object-center"
                        alt="foto-gallery">
                </div>
                <div class="w-full fade-scroll flex justify-center items-center h-64 rounded-lg overflow-hidden">
                    <img src="{{ asset('images/foto-gallery-1.jpeg') }}"
                        class="max-w-full max-h-full object-contain object-center"
                        alt="foto-gallery">
                </div>
                <div class="w-full fade-scroll flex justify-center items-center h-64 rounded-lg overflow-hidden">
                    <img src="{{ asset('images/foto-gallery-2.jpeg') }}"
                        class="max-w-full max-h-full object-contain object-center"
                        alt="foto-gallery">
                </div>
                <div class="w-full fade-scroll flex justify-center items-center h-64 rounded-lg overflow-hidden">
                    <img src="{{ asset('images/foto-gallery-3.jpeg') }}"
                        class="max-w-full max-h-full object-contain object-center"
                        alt="foto-gallery">
                </div>
                
            </div>
        </div>
        <div class="flex justify-center items-center ">
            <div class="bg-white w-full md:w-6/12">
                <div class="flex justify-center items-center"><i data-lucide="gift" class="w-10 h-10 mb-2 mt-10"></i></div>
                <div class="flex justify-center items-center"><h1 style="font-family: 'Sacramento', cursive; font-size: 34px;">Wedding Gift</h1></div>
            </div>
        </div>
        <div class="w-full flex justify-center items-center">  
            <div class="grid grid-cols-1 md:grid-cols-2 w-full md:w-6/12 gap-2 bg-white p-4">
                <div class="w-full h-56 fade-scroll md:h-80 relative max-h-56 md:max-h-80 rounded-lg bg-kartu-atm">
                    <div class="absolute top-8 md:top-[70px] right-0 mr-4">
                        <h1 class="text-white text-xl font-bold md:-mt-5">Bank BRI</h1>
                    </div>
                    <div class="absolute bottom-0 left-0 ml-4 mb-2">
                        <h1 id="norek_1" class="text-xs md:text-lg text-white font-semibold leading-tight">0978 8900 2890 12</h1>
                        <h1 class="md:text-lg text-xs text-white font-semibold leading-tight">Sururul Hafizhah</h1>
                        <p class="text-xs" id="message1"></p>
                        <button onclick="copy_no_rek1()" class="bg-white opacity-50 p-[3px] rounded-lg">Salin No Rek</button>
                    </div>
                </div>
                <div class="w-full h-56 fade-scroll md:h-80 relative max-h-56 md:max-h-80 rounded-lg bg-kartu-atm">
                    <div class="absolute top-8 md:top-[70px] right-0 mr-4">
                        <h1 class="text-white text-xl font-bold md:-mt-5">Bank BCA</h1>
                    </div>
                    <div class="absolute bottom-0 left-0 ml-4 mb-2">
                        <h1 id="norek_2" class="text-xs md:text-lg text-white font-semibold leading-tight">0978 8900 168</h1>
                        <h1 class="md:text-lg text-xs text-white font-semibold leading-tight">Sururul Hafizhah</h1>
                        <p class="text-xs" id="message2"></p>
                        <button onclick="copy_no_rek2()" class="bg-white opacity-50 p-[3px] rounded-lg">Salin No Rek</button>
                    </div>
                </div>
                <div class="w-full h-56 fade-scroll md:h-80 bg-white shadow-2xl p-2 max-h-56 md:max-h-80 rounded-lg">
                    <div class="flex justify-center items-center text-center mt-2">
                        <i data-lucide="gift" class="w-10 h-10 mb-2 mt-5"></i>
                    </div>
                    <div class="flex justify-center items-center text-center mt-2 mb-2">
                        <h1 class="text-xl font-bold">Kirim Hadiah</h1>
                    </div>
                    <div id="data-alamat">
                        <div class="flex leading-tight text-xs md:text-sm">
                            <table>
                                 <thead >
                                    <th class="w-16 text-left">Nama</th>
                                    <th class="w-5">:</th>
                                    <th class="text-left leading-tight">Sururul Hafizhah</th>

                                </thead>
                            </table>
                        </div>
                         <div class="flex leading-tight text-xs md:text-sm">
                            <table>
                                <thead>
                                    <th class="w-16 text-left">Alamat</th>
                                    <th class="w-5">:</th>
                                    <th class="text-left leading-tight ">Balongan City New Indramayu Jawa Barat Indonesia</th>

                                </thead>
                            </table>
                        </div>
                    </div>
                    <div>
                        <button onclick="copy_alamat()" class="bg-yellow-400 opacity-50 p-[3px] rounded-lg mt-2">Salin Alamat</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center items-center">
            <div class="w-full md:w-6/12 bg-white">
                <div class="flex justify-center items-center mt-5 fade-scroll">
                    <h1 style="font-family: 'Sacramento', cursive; font-size: 34px;">Kirim Pesan</h1>
                </div>
                <div class="w-full flex justify-center items-center fade-scroll">
                    <form action="" method="post">
                        @csrf
                        <div class="w-full p-2">
                            <label>Nama</label>
                            <input type="text" name="nama" class="w-full bg-white border-yellow-500 outline-1 decoration-0 hover:border-2 hover:border-yellow-500 py-1.5 px-3 rounded-lg">
                        </div>
                        <div class="w-full p-2">
                            <label>Pesan</label>
                            <textarea  class="w-full bg-white border-yellow-500 outline-1 decoration-0 hover:border-2 hover:border-yellow-500 py-1.5 px-3 rounded-lg" name="pesan"></textarea>
                        </div>
                        <div class="w-full p-2">
                            <button type="submit" class="py-1.5 px-4 rounded-xl bg-yellow-300 hover:bg-yellow-500 text-yellow-100">Kirim</button>
                        </div>
                    </form>
                </div>
                <div class="flex justify-center items-center fade-scroll">
                    <div class="mt-3 grid grid-cols-4 md:w-4/12 w-full ml-10 mr-10 md:ml-3 md:mr-3">
                        <div class="flex justify-center items-center p-1 bg-white rounded-full w-14 h-14">
                            <i data-lucide="circle-user-round" class="w-13 h-13"></i>
                        </div>
                        <div class="col-span-3 text-xs md:text-sm">
                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt autem, incidunt sint laborum esse commodi est temporibus aspernatur, adipisci porro!</span>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-center fade-scroll">
                    <div class="mt-4 bg-white rounded-xl shadow-2xl p-3 w-full md:w-6/12">
                        <div class="flex justify-center items-center text-center">
                            Mari bantu kami mempersiapkan acara menjadi lebih baik dengan mengisi formulir RSVP dibawah ini
                        </div>
                        <div class="flex justify-center items-center mt-2">
                            <button onclick="openModal()" class="py-1.5 px-4 rounded-xl bg-yellow-300 hover:bg-yellow-500 text-yellow-200">Konfirmasi Kehadiran</button>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-center text-center fade-scroll">
                    <div class="md:w-6/12 w-full p-3">
                        <p>
                            Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu istri-istri dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya diantaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum yang berfikir.
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
                <img src="{{ asset('images/foto-gallery-1.jpeg') }}"
                    class="absolute inset-0 w-full h-full object-cover fade-scroll">

                <!-- Background Blur 50% Bawah -->
                <img src="{{ asset('images/foto-gallery-1.jpeg') }}"
                    class="absolute bottom-0 w-full h-3/12 object-cover blur-2xl scale-150">

                <!-- Overlay warna lembut -->
                <div class="absolute inset-0 bg-yellow-200/40"></div>

                <!-- Foto utama -->
                <div class="relative z-10 flex flex-col justify-center items-center 
                            w-full h-full text-center px-6">

                    <div class="w-72 h-72 md:w-80 md:h-80 rounded-full overflow-hidden 
                                ring-8 ring-white/40 shadow-2xl">
                        <img src="{{ asset('images/foto-gallery-1.jpeg') }}"
                            class="w-full h-full object-cover object-center">
                    </div>

                    <div class="mt-8 max-w-md fade-scroll">
                        <span class="block">
                            Atas kehadiran dan doa restu dari Bapak/Ibu/Saudara/I sekalian,
                            kami mengucapkan Terima Kasih.
                        </span>
                        <p class="mt-2" style="font-family: 'Sacramento', cursive; font-size: 28px;">Wassalamualaikum Wr. Wb.</p>
                        <p class="mt-4">Kami yang berbahagia</p>
                        <p class="font-semibold" style="font-family: 'Sacramento', cursive; font-size: 34px;">Sururul & Rizki</p>
                    </div>

                </div>
            </div>
        </div>

    {{-- music --}}
    <!-- Audio -->
    <audio id="bgMusic" loop>
        <source src="{{ asset('music/Married Life.mp3') }}" type="audio/mpeg">
    </audio>

    <!-- Control Music -->
    <div class="fixed bottom-6 left-1/2 -translate-x-1/2 z-50">
        <button id="musicBtn"
            class="flex items-center gap-2 bg-white/80 backdrop-blur-md px-5 py-3 rounded-full shadow-lg hover:scale-105 transition">

            <!-- Icon -->
            <svg id="musicIcon" xmlns="http://www.w3.org/2000/svg"
                class="w-6 h-6 text-yellow-600" fill="currentColor"
                viewBox="0 0 24 24">
                <path d="M8 5v14l11-7z"/>
            </svg>

            <span class="text-sm font-medium">Play Backsound</span>
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
                <h2 class="text-lg font-semibold text-yellow-700">Konfirmasi Kehadiran</h2>
                <button onclick="closeModal()" class="text-yellow-500 hover:text-yellow-700 text-xl">&times;</button>
            </div>
            <form action="{{route('admin.store')}}" method="post">
                @csrf
                <div class="w-full p-2">
                    <label>Nama</label>
                    <input type="text" name="nama" class="w-full bg-yellow-200 border-none decoration-0 hover:border-2 hover:border-yellow-500 py-1.5 px-3 rounded-lg">
                </div>
                <div class="w-full p-2">
                    <label>Konfirmasi</label>
                    <select class="w-full bg-yellow-200 border-none decoration-0 hover:border-2 hover:border-yellow-500 py-1.5 px-3 rounded-lg">
                        <option>Ya, Saya Akan Hadir</option>
                        <option>Maaf, Saya Tidak Bisa Hadirr</option>
                    </select>
                </div>
            </form>
        </div>
    </div>
    

    
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
        function copy_no_rek1(){
            const norek1 = document.getElementById('norek_1').innerText;

            navigator.clipboard.writeText(norek1).then(() => {
                document.getElementById("message1").innerText = "No Rek Berhasil Disalin!";
            }).catch(err => {
                document.getElementById("message1").innerText = "No Rek Gagal Disalin!";
            });
        }

        function copy_no_rek2(){
            const norek2 = document.getElementById('norek_2').innerText;

            navigator.clipboard.writeText(norek2).then(() => {
                document.getElementById("message2").innerText = "No Rek Berhasil Disalin!";
            }).catch(err => {
                document.getElementById("message2").innerText = "No Rek Gagal Disalin!";
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
        const targetDate = new Date("2026-12-31 08:00:00").getTime();

        const countdown = setInterval(() => {
            const now = new Date().getTime();
            const distance = targetDate - now;

            if (distance < 0) {
                clearInterval(countdown);
                document.getElementById("countdown").innerHTML =
                    "Acara telah dimulai 🎉";
                return;
            }

            document.getElementById("days").innerText =
                Math.floor(distance / (1000 * 60 * 60 * 24));
            document.getElementById("hours").innerText =
                Math.floor((distance / (1000 * 60 * 60)) % 24);
            document.getElementById("minutes").innerText =
                Math.floor((distance / (1000 * 60)) % 60);
            document.getElementById("seconds").innerText =
                Math.floor((distance / 1000) % 60);
        }, 1000);
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const elements = document.querySelectorAll(".fade-scroll");

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
        AOS.init({
        disable: 'mobile'
        });
    </script>


</body>
@endif
</html>