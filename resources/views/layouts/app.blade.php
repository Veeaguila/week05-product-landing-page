<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Drip Kofi') }}</title>

    <meta name="description" content="Drip Kofi — coffee, non-coffee, at ready-to-drink kofi para sa bawat Pinoy.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-[#0E3B2B] font-['Plus_Jakarta_Sans',_sans-serif] text-[#F4EFE3] antialiased">

    @yield('content')

</body>

</html>