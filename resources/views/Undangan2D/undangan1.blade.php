<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Undangan Nikah') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">

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
            background-image: url('/images/bgcover1.png');
            background-repeat: no-repeat;
            background-size: cover;
        }

        .bg-cover-akhir {
            background-image: url('/images/foto-gallery-2.jpeg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 50%;
        }

        .bunga {
            background-image: url('/images/daun1.png');
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


    </style>

</head>
<body class="overflow-x-hidden lock-scroll">
    <section id="cover">
        <div class="w-full flex justify-center">
            <div class="relative bg-cover1 w-full md:w-8/12 h-screen overflow-hidden">

                <!-- DAUN TOP -->
                <div
                    class="
                        absolute top-0 left-0
                        bunga
                        w-[220px] h-[220px]
                        sm:w-[280px] sm:h-[280px]
                        md:w-[380px] md:h-[380px]
                        -translate-y-1/3 md:-translate-y-1/2
                    "
                    style="animation-name: angin-top;"
                ></div>

                <!-- DAUN BOTTOM -->
                <div
                    class="
                        absolute bottom-0 right-0
                        bunga
                        w-[220px] h-[220px]
                        sm:w-[280px] sm:h-[280px]
                        md:w-[380px] md:h-[380px]
                        translate-y-1/3 md:translate-y-1/2
                    "
                    style="animation-name: angin-bottom;"
                ></div>
                <div class="w-full h-screen flex justify-center items-center">
                    <div>
                        <div class="w-full flex justify-center items-center opacity-0 animate-fadeCover">
                            <h1 class="text-gray-600 mt-4">HAPPY WEDDING</h1>
                        </div>
                        <div class="w-full flex justify-center items-center opacity-0 animate-fadeCover">
                            <h1 class="text-gray-600" style="font-family: 'Great Vibes', cursive; font-size: 64px;">
                                Wedding Of
                            </h1>
                        </div>
                        <div class="w-full flex justify-center items-center">
                            <img src="{{ asset('/images/foto_cover.gif') }}" alt="foto cover" class="w-72 h-72 opacity-0 animate-fadeCover">
                        </div>
                        <div class="w-full flex justify-center items-center opacity-0 animate-fadeCover">
                            <h1 class="text-gray-600" style="font-family: 'Great Vibes', cursive; font-size: 64px;">
                                Sururul & Rizki
                            </h1>
                        </div>
                        <div class="w-full flex justify-center items-center opacity-0 animate-fadeCover">
                            <div>
                                <div class="flex justify-center items-center">
                                    <p class="text-gray-600 text-lg">Kepada Yth. Bapak/Ibu/Saudara/i</p>
                                </div>
                                <div class="flex justify-center items-center">
                                    <p class="text-blue-800 text-xl font-bold">Nama Tamu</p>
                                </div>
                                <div class="flex justify-center items-center text-center">
                                    <p class="text-gray-600 text-sm">
                                        *Mohon maaf apabila ada kesalahan pada
                                        penulisan nama dan gelar
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 mb-5 w-full flex justify-center items-center opacity-0 animate-fadeCover">
                            <a href="#isi_undangan" id="btnBuka" class="bg-blue-400 hover:bg-blue-300 p-3 rounded-lg flex justify-center items-center">
                                <i data-lucide="mail-open" class="w-5 h-5 mr-2"></i>
                                <span class="text-gray-600">Buka Undangan</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="isi_undangan" class="hidden">
        <div class="w-full flex justify-center items-center">
            <div class="relative bg-cover1 w-full md:w-8/12 h-screen overflow-hidden">
                <!-- DAUN TOP -->
                <div
                    class="
                        absolute top-0 left-0
                        bunga
                        w-[220px] h-[220px]
                        sm:w-[280px] sm:h-[280px]
                        md:w-[380px] md:h-[380px]
                        -translate-y-1/3 md:-translate-y-1/2
                    "
                    style="animation-name: angin-top;"
                ></div>

                <!-- DAUN BOTTOM -->
                <div
                    class="
                        absolute bottom-0 right-0
                        bunga
                        w-[220px] h-[220px]
                        sm:w-[280px] sm:h-[280px]
                        md:w-[380px] md:h-[380px]
                        translate-y-1/3 md:translate-y-1/2
                    "
                    style="animation-name: angin-bottom;"
                ></div>
                <div class="w-full h-screen flex justify-center items-center">
                    <div>
                        <div class="opacity-0 fade-scroll flex justify-center items-center">
                            <h1 class="text-gray-600" style="font-family: 'Great Vibes', cursive; font-size: 24px;">
                                The Wedding Of
                            </h1>
                        </div>
                        <div class="opacity-0 fade-scroll flex justify-center items-center">
                            <h1 class="text-gray-600" style="font-family: 'Great Vibes', cursive; font-size: 64px;">
                                Sururul & Rizki
                            </h1>
                        </div>
                        <div class="opacity-0 fade-scroll flex justify-center items-center">
                            <h1 class="text-gray-600 text-xl">
                                Senin, 20 Agutus 2026
                            </h1>
                        </div>
                        <div class="flex justify-center items-center mt-20">
                             <!-- countdown container -->
                            <div id="countdown" class="mt-6"></div>
                            <div class="grid grid-cols-4 gap-4">
                                <div class="opacity-0 fade-scroll bg-blue-700 scale-anim w-18 h-18 p-1 font-bold text-white rounded-tl-xl rounded-br-xl flex justify-center items-center">
                                    <div class="flex justify-center items-center">
                                        <div>
                                            <p id="days">0</p>
                                            <p>Days</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="opacity-0 fade-scroll bg-blue-700 scale-anim w-18 h-18 p-1 font-bold text-white rounded-tl-xl rounded-br-xl flex justify-center items-center">
                                    <div class="flex justify-center items-center">
                                        <div>
                                            <p id="hours">0</p>
                                            <p>Jam</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="opacity-0 fade-scroll bg-blue-700 scale-anim w-18 h-18 p-1 font-bold text-white rounded-tl-xl rounded-br-xl flex justify-center items-center">
                                    <div class="flex justify-center items-center">
                                        <div>
                                            <p id="minutes">0</p>
                                            <p>Menit</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="opacity-0 fade-scroll bg-blue-700 scale-anim w-18 h-18 p-1 font-bold text-white rounded-tl-xl rounded-br-xl flex justify-center items-center">
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
                            <div class="opacity-0 fade-scroll bg-blue-600 rounded-xl p-3 text-white font-bold">
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
            <div class="relative bg-cover1 w-full md:w-8/12 h-screen overflow-hidden">
                <!-- DAUN TOP -->
                <div
                    class="
                        absolute top-0 left-0
                        bunga
                        w-[220px] h-[220px]
                        sm:w-[280px] sm:h-[280px]
                        md:w-[380px] md:h-[380px]
                        -translate-y-1/3 md:-translate-y-1/2
                    "
                    style="animation-name: angin-top;"
                ></div>

                <!-- DAUN BOTTOM -->
                <div
                    class="
                        absolute bottom-0 right-0
                        bunga
                        w-[220px] h-[220px]
                        sm:w-[280px] sm:h-[280px]
                        md:w-[380px] md:h-[380px]
                        translate-y-1/3 md:translate-y-1/2
                    "
                    style="animation-name: angin-bottom;"
                ></div>
                <div class="opacity-0 fade-scroll flex justify-center mt-10">
                    <h1 style="font-family: 'Great Vibes', cursive; font-size: 30px;">Assalamualaikum Wr. Wb</h1>
                </div>
                 <div class="opacity-0 fade-scroll flex justify-center items-center text-center mt-5 mb-3">
                    <p class="w-10/12 text-xs md:text-sm">Dengan memohon Rahmat dan Ridho Allah SWT, Kami bermaksud mengundang Bapak/Ibu/Saudara/i untuk hadir dalam pernikahan kami</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-5">
                    <div class="col-span-2">
                        <div class="flex justify-center">
                            <div>
                                <div class="flex justify-center items-center">
                                    <div class="opacity-0 fade-scroll w-36 md:w-64 h-46 md:h-80 rounded-b-full rounded-t-full bg-green-500 opacity-65 p-0.5">
                                        <img src="{{ asset('/images/cewe korea.jpeg') }}" class="w-36 md:w-64 h-46 md:h-80 rounded-b-full rounded-t-full" alt="mempelai perempuan">
                                    </div>
                                </div>
                                <div class="flex justify-center items-center">
                                    <div class="mt-6">
                                        <div class="opacity-0 fade-scroll flex justify-center">
                                            <h1 style="font-family: 'Great Vibes', cursive; font-size: 34px;">Sururul Hafizhah</h1>
                                        </div>
                                        <div class="opacity-0 fade-scroll flex justify-center items-center text-center mt-1">
                                            <p>Putri Pertama dari Bapak Yusuf Ali dan Ibu Nurbaya</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="opacity-0 fade-scroll flex justify-center items-center -mb-10">
                            <h1 style="font-family: 'Great Vibes', cursive; font-size: 74px;">&</h1>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex justify-center">
                            <div>
                                <div class="flex justify-center items-center">
                                    <div class="p-2">
                                        <div class="opacity-0 fade-scroll flex justify-center">
                                            <h1 style="font-family: 'Great Vibes', cursive; font-size: 34px;">Rizki Ahmad Wahyu</h1>
                                        </div>
                                        <div class="opacity-0 fade-scroll flex justify-center items-center text-center mt-1 mb-5">
                                            <p>Putra Pertama dari Bapak Amin Ali dan Ibu Fatimah</p>
                                        </div>  
                                    </div>
                                </div>
                                <div class="flex justify-center items-center">
                                    <div class="opacity-0 fade-scroll w-36 md:w-64 h-46 md:h-80 rounded-b-full rounded-t-full bg-green-500 opacity-65 p-0.5">
                                        <img src="{{ asset('/images/cowo korea.jpeg') }}" class="w-36 md:w-64 h-46 md:h-80 rounded-b-full rounded-t-full" alt="mempelai perempuan">
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <div class="w-full flex justify-center items-center">
            <div class="relative bg-cover1 w-full md:w-8/12 h-screen overflow-hidden">
                <!-- DAUN TOP -->
                <div
                    class="
                        absolute top-0 left-0
                        bunga
                        w-[220px] h-[220px]
                        sm:w-[280px] sm:h-[280px]
                        md:w-[380px] md:h-[380px]
                        -translate-y-1/3 md:-translate-y-1/2
                    "
                    style="animation-name: angin-top;"
                ></div>

                <!-- DAUN BOTTOM -->
                <div
                    class="
                        absolute bottom-0 right-0
                        bunga
                        w-[220px] h-[220px]
                        sm:w-[280px] sm:h-[280px]
                        md:w-[380px] md:h-[380px]
                        translate-y-1/3 md:translate-y-1/2
                    "
                    style="animation-name: angin-bottom;"
                ></div>
                <div class="flex justify-center items-center mt-10 text-center">
                    <div class="grid grid-cols-1 gap-1.5 w-10/12 opacity-10 fade-scroll">
                        <div class="rounded-xl p-2 shadow-2xl">
                            <h1 style="font-family: 'Great Vibes', cursive; font-size: 34px;">Akad Nikah</h1>
                            <p class="text-md md:text-lg">Sabtu, 27 Mei 2026</p>
                            <p class="text-md md:text-lg">Pukul 08.00 WIB - Selesai</p>
                            <p class="text-lg md:text-xl text-blue-900 mt-2 mb-2">BERTEMPAT DI</p>
                            <p class="text-md md:text-lg">Kediaman Mempelai Wanita Cangkuang RT. 2 RW. 2 Desa Cangkuang Kec. Cangkuang, Kab. Bandung</p>
                            
                            <div class="flex justify-center items-center">
                                <a href="" class="mt-5 px-2 py-4 w-8/12 rounded-xl bg-blue-400 flex justify-center items-center">
                                    <i data-lucide="map-minus" class="w-5 h-5 mr-2"></i>
                                    <span class="text-gray-600">Buka Google Lokasi</span>
                                </a>
                            </div>

                        </div>
                        <div class="rounded-xl p-2 shadow-2xl mt-5 mb-5">
                            <h1 style="font-family: 'Great Vibes', cursive; font-size: 34px;">Resepsi</h1>
                            <p class="text-md md:text-lg">Sabtu, 27 Mei 2026</p>
                            <p class="text-md md:text-lg">Pukul 10.00 WIB - Selesai</p>
                            <p class="text-lg md:text-xl text-blue-900 mt-2 mb-2">BERTEMPAT DI</p>
                            <p class="text-md md:text-lg">Kediaman Mempelai Wanita Cangkuang RT. 2 RW. 2 Desa Cangkuang Kec. Cangkuang, Kab. Bandung</p>
                            
                            <div class="flex justify-center items-center">
                                <a href="" class="mt-5 px-2 py-4 w-8/12 rounded-xl bg-blue-400 flex justify-center items-center">
                                    <i data-lucide="map-minus" class="w-5 h-5 mr-2"></i>
                                    <span class="text-gray-600">Buka Google Lokasi</span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <div class="w-full flex justify-center items-center">
            <div class="relative bg-cover1 w-full md:w-8/12 h-screen overflow-hidden">
                <!-- DAUN TOP -->
                <div
                    class="
                        absolute top-0 left-0
                        bunga
                        w-[220px] h-[220px]
                        sm:w-[280px] sm:h-[280px]
                        md:w-[380px] md:h-[380px]
                        -translate-y-1/3 md:-translate-y-1/2
                    "
                    style="animation-name: angin-top;"
                ></div>

                <!-- DAUN BOTTOM -->
                <div
                    class="
                        absolute bottom-0 right-0
                        bunga
                        w-[220px] h-[220px]
                        sm:w-[280px] sm:h-[280px]
                        md:w-[380px] md:h-[380px]
                        translate-y-1/3 md:translate-y-1/2
                    "
                    style="animation-name: angin-bottom;"
                ></div>
                <div class="max-w-4xl mx-auto py-20">
                    <h1 style="font-family: 'Great Vibes', cursive; font-size: 34px;" class="text-center">Our Story</h1>

                    <div class="relative border-l-4 border-blue-500 pl-8 space-y-16 ml-2">

                        <!-- Item -->
                        <div class="timeline-item opacity-0 translate-y-10 transition-all duration-700">
                            <div class="flex justify-start mr-2">
                                <div class="w-12 h-12 rounded-full bg-blue-400 flex text-gray-100 justify-center items-center mr-3"><i data-lucide="heart"></i></div>
                                <div class="rounded-xl w-full p-2 shadow-2xl bg-white opacity-40 text-xs">
                                    <p>2021</p>
                                    <p>Awal bertemu di aula kampus saat acara masa orientasi kampus</p>
                                </div>
                                
                            </div>
                        </div>

                        <div class="timeline-item opacity-0 translate-y-10 transition-all duration-700">
                            <div class="flex justify-start mr-2">
                                <div class="w-12 h-12 rounded-full bg-blue-400 flex text-gray-100 justify-center items-center mr-3"><i data-lucide="heart"></i></div>
                                <div class="rounded-xl w-full p-2 shadow-2xl bg-white opacity-40 text-xs">
                                    <p>2022</p>
                                    <p>hubungan jarak jauh karena peoject kampus</p>
                                </div>
                                
                            </div>
                        </div>

                        <div class="timeline-item opacity-0 translate-y-10 transition-all duration-700">
                            <div class="flex justify-start mr-2">
                                <div class="w-12 h-12 rounded-full bg-blue-400 flex text-gray-100 justify-center items-center mr-3"><i data-lucide="heart"></i></div>
                                <div class="rounded-xl w-full p-2 shadow-2xl bg-white opacity-40 text-xs">
                                    <p>2024</p>
                                    <p>kita berdua memutuskan untuk tunangan dan memantapkan hati</p>
                                </div>
                                
                            </div>
                        </div>

                        <div class="timeline-item opacity-0 translate-y-10 transition-all duration-700">
                            <div class="flex justify-start mr-2">
                                <div class="w-12 h-12 rounded-full bg-blue-400 flex text-gray-100 justify-center items-center mr-3"><i data-lucide="heart"></i></div>
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
        <div class="flex justify-center items-center mt-5 mb-5">
            <h1 style="font-family: 'Great Vibes', cursive; font-size: 34px;">Our Gallery</h1>
        </div>
        <div class="w-full flex justify-center items-center bg-white text-center">  
            <div class="grid grid-cols-1 md:grid-cols-2 mt-3 w-full md:w-8/12 gap-1">
                
                <div class="w-full flex justify-center items-center max-h-64 rounded-lg">
                    <img src="{{asset('/images/foto-gallery.jpeg')}}" alt="foto-gallery">
                </div>
                <div class="w-full flex justify-center items-center max-h-64 rounded-lg">
                    <img src="{{asset('/images/foto-gallery-1.jpeg')}}" alt="foto-gallery">
                </div>
                <div class="w-full flex justify-center items-center max-h-64 rounded-lg">
                    <img src="{{asset('/images/foto-gallery-2.jpeg')}}" alt="foto-gallery">
                </div>
                <div class="w-full flex justify-center items-center max-h-64 rounded-lg">
                    <img src="{{asset('/images/foto-gallery-3.jpeg')}}" alt="foto-gallery">
                </div>
            </div>
        </div>
        <div class="flex justify-center items-center ">
            <div class="bg-green-300 w-full md:w-8/12">
                <div class="flex justify-center items-center"><i data-lucide="gift" class="w-10 h-10 mb-2 mt-10"></i></div>
                <div class="flex justify-center items-center"><h1 style="font-family: 'Great Vibes', cursive; font-size: 34px;">Wedding Gift</h1></div>
            </div>
        </div>
        <div class="w-full flex justify-center items-center">  
            <div class="grid grid-cols-1 md:grid-cols-2 w-full md:w-8/12 gap-2 bg-green-300 p-4">
                <div class="w-full h-64 relative max-h-64 rounded-lg bg-kartu-atm">
                    <div class="absolute top-[50px] right-0 mr-4">
                        <h1 class="text-white text-xl font-bold">Bank BRI</h1>
                    </div>
                    <div class="absolute bottom-0 left-0 ml-4 mb-2">
                        <h1 id="norek_1" class="text-lg font-semibold leading-tight">0978 8900 2890 12</h1>
                        <h1 class="text-lg font-semibold leading-tight">Sururul Hafizhah</h1>
                        <p class="text-xs" id="message1"></p>
                        <button onclick="copy_no_rek1()" class="bg-white opacity-50 p-[3px] rounded-lg">Salin No Rek</button>
                    </div>
                </div>
                <div class="w-full h-64 relative max-h-64 rounded-lg bg-kartu-atm">
                    <div class="absolute top-[50px] right-0 mr-4">
                        <h1 class="text-white text-xl font-bold">Bank BCA</h1>
                    </div>
                    <div class="absolute bottom-0 left-0 ml-4 mb-2">
                        <h1 id="norek_2" class="text-lg font-semibold leading-tight">0978 8900 168</h1>
                        <h1 class="text-lg font-semibold leading-tight">Sururul Hafizhah</h1>
                        <p class="text-xs" id="message2"></p>
                        <button onclick="copy_no_rek2()" class="bg-white opacity-50 p-[3px] rounded-lg">Salin No Rek</button>
                    </div>
                </div>
                <div class="w-full h-64 bg-white shadow-2xl p-2 max-h-64 rounded-lg">
                    <div class="flex justify-center items-center text-center mt-2">
                        <i data-lucide="gift" class="w-10 h-10 mb-2 mt-5"></i>
                    </div>
                    <div class="flex justify-center items-center text-center mt-2 mb-2">
                        <h1 class="text-xl font-bold">Kirim Hadiah</h1>
                    </div>
                    <div id="data-alamat">
                        <div class="flex leading-tight">
                            <table>
                                 <thead >
                                    <th class="w-16 text-left">Nama</th>
                                    <th >:</th>
                                    <th >Sururul Hafizhah</th>

                                </thead>
                            </table>
                        </div>
                         <div class="flex leading-tight">
                            <table>
                                <thead>
                                    <th class="w-16 text-left">Alamat</th>
                                    <th>:</th>
                                    <th>Balongan Indramayu Jawa Barat Indonesia</th>

                                </thead>
                            </table>
                        </div>
                    </div>
                    <div>
                        <button onclick="copy_alamat()" class="bg-gray-400 opacity-50 p-[3px] rounded-lg mt-2">Salin Alamat</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center items-center">
            <div class="w-full md:w-8/12 bg-green-300">
                <div class="flex justify-center items-center mt-5">
                    <h1 style="font-family: 'Great Vibes', cursive; font-size: 34px;">Kirim Pesan</h1>
                </div>
                <div class="w-full flex justify-center items-center">
                    <form action="" method="post">
                        @csrf
                        <div class="w-full p-2">
                            <label>Nama</label>
                            <input type="text" name="nama" class="w-full bg-white border-none decoration-0 hover:border-2 hover:border-blue-500 py-1.5 px-3 rounded-lg">
                        </div>
                        <div class="w-full p-2">
                            <label>Pesan</label>
                            <textarea  class="w-full bg-white border-none decoration-0 hover:border-2 hover:border-blue-500 py-1.5 px-3 rounded-lg" name="pesan"></textarea>
                        </div>
                    </form>
                </div>
                <div class="flex justify-center items-center">
                    <div class="mt-3 grid grid-cols-4 md:w-4/12 w-full ml-10 mr-10 md:ml-3 md:mr-3">
                        <div class="flex justify-center items-center p-1 bg-white rounded-full w-14 h-14">
                            <i data-lucide="circle-user-round" class="w-13 h-13"></i>
                        </div>
                        <div class="col-span-3 text-xs md:text-sm">
                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt autem, incidunt sint laborum esse commodi est temporibus aspernatur, adipisci porro!</span>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-center">
                    <div class="mt-4 bg-white rounded-xl shadow-2xl p-3 w-full md:w-6/12">
                        <div class="flex justify-center items-center text-center">
                            Mari bantu kami mempersiapkan acara menjadi lebih baik dengan mengisi formulir RSVP dibawah ini
                        </div>
                        <div class="flex justify-center items-center mt-2">
                            <button onclick="openModal()" class="py-1.5 px-4 rounded-xl bg-blue-300 hover:bg-blue-500 text-gray-200">Konfirmasi Kehadiran</button>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-center text-center">
                    <div class="md:w-6/12 w-full p-3">
                        <p>
                            Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu isteri-isteri dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya diantaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum yang berfikir.
                        </p>
                        <p class="mt-6">
                            (Q.S Ar Rum : 21)
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center items-center">
            <div class="relative bg-cover-akhir w-full md:w-8/12 h-screen">
                <div class="absolute w-full bottom-0 h-[70%] opacity-30 bg-white">
                    
                </div>
            </div>
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
                <h2 class="text-lg font-semibold text-gray-700">Konfirmasi Kehadiran</h2>
                <button onclick="closeModal()" class="text-gray-500 hover:text-gray-700 text-xl">&times;</button>
            </div>
            <form action="{{route('admin.store')}}" method="post">
                @csrf
                <div class="w-full p-2">
                    <label>Nama</label>
                    <input type="text" name="nama" class="w-full bg-gray-200 border-none decoration-0 hover:border-2 hover:border-blue-500 py-1.5 px-3 rounded-lg">
                </div>
                <div class="w-full p-2">
                    <label>Konfirmasi</label>
                    <select class="w-full bg-gray-200 border-none decoration-0 hover:border-2 hover:border-blue-500 py-1.5 px-3 rounded-lg">
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

</html>