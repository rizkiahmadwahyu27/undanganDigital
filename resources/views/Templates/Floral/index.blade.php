<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Dashboard Admin') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <script src="https://unpkg.com/lucide@latest"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .fade-out {
            animation: fadeOut 0.8s forwards;
        }

        @keyframes fadeOut {
            from { opacity: 1; }
            to { opacity: 0; }
        }
    </style>
</head>
<body>
    {{-- HEADER --}}
    @include('Templates.Floral.Components.header', ['data' => $data])

    {{-- COUPLE --}}
    @include('Templates.Floral.Components.couple', ['data' => $data])

    {{-- EVENT --}}
    @include('Templates.Floral.Components.event', ['data' => $data])

    {{-- GALLERY --}}
    @include('Templates.Floral.Components.gallery', ['data' => $data])

    {{-- MAPS --}}
    @include('Templates.Floral.Components.maps', ['data' => $data])

    {{-- WISHES --}}
    @include('Templates.Floral.Components.wishes', ['data' => $data])

    {{-- GIFT --}}
    @include('Templates.Floral.Components.gift', ['data' => $data])

    {{-- FOOTER --}}
    @include('Templates.Floral.Components.footer', ['data' => $data])
</body>
</html>