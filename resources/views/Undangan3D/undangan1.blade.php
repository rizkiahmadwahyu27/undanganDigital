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
                            <h1 class="text-gray-600">HAPPY WEDDING</h1>
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
                                <div class="flex justify-center items-center">
                                    <p class="text-gray-600 text-sm">
                                        *Mohon maaf apabila ada kesalahan pada
                                        penulisan nama dan gelar
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-10 w-full flex justify-center items-center opacity-0 animate-fadeCover">
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
                        <div data-aos="fade-up" class="flex justify-center items-center">
                            <h1 class="text-gray-600" style="font-family: 'Great Vibes', cursive; font-size: 24px;">
                                The Wedding Of
                            </h1>
                        </div>
                        <div data-aos="fade-up" class="flex justify-center items-center">
                            <h1 class="text-gray-600" style="font-family: 'Great Vibes', cursive; font-size: 64px;">
                                Sururul & Rizki
                            </h1>
                        </div>
                        <div data-aos="fade-up" class="flex justify-center items-center">
                            <h1 class="text-gray-600 text-xl">
                                Senin, 20 Agutus 2026
                            </h1>
                        </div>
                        <div class="flex justify-center items-center mt-20">
                             <!-- countdown container -->
                            <div id="countdown" class="mt-6"></div>
                            <div class="grid grid-cols-4 gap-4">
                                <div data-aos="fade-up" class="bg-blue-700 scale-anim w-18 h-18 p-1 font-bold text-white rounded-tl-xl rounded-br-xl flex justify-center items-center">
                                    <div class="flex justify-center items-center">
                                        <div>
                                            <p id="days">0</p>
                                            <p>Days</p>
                                        </div>
                                    </div>
                                </div>
                                <div data-aos="fade-up" class="bg-blue-700 scale-anim w-18 h-18 p-1 font-bold text-white rounded-tl-xl rounded-br-xl flex justify-center items-center">
                                    <div class="flex justify-center items-center">
                                        <div>
                                            <p id="hours">0</p>
                                            <p>Jam</p>
                                        </div>
                                    </div>
                                </div>
                                <div data-aos="fade-up" class="bg-blue-700 scale-anim w-18 h-18 p-1 font-bold text-white rounded-tl-xl rounded-br-xl flex justify-center items-center">
                                    <div class="flex justify-center items-center">
                                        <div>
                                            <p id="minutes">0</p>
                                            <p>Menit</p>
                                        </div>
                                    </div>
                                </div>
                                <div data-aos="fade-up" class="bg-blue-700 scale-anim w-18 h-18 p-1 font-bold text-white rounded-tl-xl rounded-br-xl flex justify-center items-center">
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
                            <div data-aos="fade-up" class="bg-blue-600 rounded-xl p-3 text-white font-bold">
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
                <div data-aos="fade-up" class="flex justify-center mt-10">
                    <h1 style="font-family: 'Great Vibes', cursive; font-size: 30px;">Assalamualaikum Wr. Wb</h1>
                </div>
                 <div data-aos="fade-up" class="flex justify-center items-center text-center mt-5 mb-3">
                    <p class="w-10/12">Dengan memohon Rahmat dan Ridho Allah SWT, Kami bermaksud mengundang Bapak/Ibu/Saudara/i untuk hadir dalam pernikahan kami</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-5">
                    <div class="col-span-2">
                        <div class="flex justify-center">
                            <div>
                                <div class="flex justify-center items-center">
                                    <div data-aos="fade-up" class="w-64 h-80 rounded-b-full rounded-t-full bg-green-500 opacity-65 p-0.5">
                                        <img src="{{ asset('/images/cewe korea.jpeg') }}" class="w-64 h-80 rounded-b-full rounded-t-full" alt="mempelai perempuan">
                                    </div>
                                </div>
                                <div class="flex justify-center items-center">
                                    <div class="mt-6">
                                        <div data-aos="fade-up" class="flex justify-center">
                                            <h1 style="font-family: 'Great Vibes', cursive; font-size: 34px;">Sururul Hafizhah</h1>
                                        </div>
                                        <div data-aos="fade-up" class="flex justify-center items-center text-center mt-1">
                                            <p>Putri Pertama dari Bapak Yusuf Ali dan Ibu Nurbaya</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="flex justify-center items-center">
                        <div data-aos="fade-up" class="flex justify-center items-center">
                            <h1 style="font-family: 'Great Vibes', cursive; font-size: 74px;">&</h1>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex justify-center">
                            <div>
                                <div class="flex justify-center items-center">
                                    <div class="p-2">
                                        <div data-aos="fade-up" class="flex justify-center">
                                            <h1 style="font-family: 'Great Vibes', cursive; font-size: 34px;">Rizki Ahmad Wahyu</h1>
                                        </div>
                                        <div data-aos="fade-up" class="flex justify-center items-center text-center mt-1 mb-5">
                                            <p>Putra Pertama dari Bapak Amin Ali dan Ibu Fatimah</p>
                                        </div>  
                                    </div>
                                </div>
                                <div class="flex justify-center items-center">
                                    <div data-aos="fade-up" class="w-64 h-80 rounded-b-full rounded-t-full bg-green-500 opacity-65 p-0.5">
                                        <img src="{{ asset('/images/cowo korea.jpeg') }}" class="w-64 h-80 rounded-b-full rounded-t-full" alt="mempelai perempuan">
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
                <div class="flex justify-center items-center">
                    <div class="grid grid-cols-1 gap-1.5">
                        <div data-aos="fade-up" class="flex justify-center rounded-xl p-2 shadow-2xl">
                            <h1 style="font-family: 'Great Vibes', cursive; font-size: 30px;">Akad Nikah</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </section>
  
    
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
        lucide.createIcons();
    </script>
    <script>
        AOS.init({
        disable: 'mobile'
        });
    </script>

</body>

</html>