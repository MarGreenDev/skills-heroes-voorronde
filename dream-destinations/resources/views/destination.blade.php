<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dream Destinations</title>
    <link rel="favicon" href="../public/images/logo-dream-destinations.jpg">

    @vite (['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <header class="flex items-center justify-center bg-orange-400">
        <img src="{{ asset('images/logo-dream-destinations.png') }}" alt=""
            class="w-40">
    </header>
    @include('partials.nav')

    <div class="hero-section object-fill text-white flex flex-col text-center p-15 gap-20 mb-5">
        <div>
            <h1 class="text-5xl bg-linear-to-t from-orange-300 to-orange-600 bg-clip-text text-transparent font-black">Ontdek de wereld met DreamDestinations</h1>
            <p class="text-2xl">De mooiste bestemmingen wereldwijd. Voor iedere reiziger de perfecte reis.</p>
        </div>
        <div>
            <a href="#bestemmingen"
                id="destinations-button" class="cursor-pointer bg-orange-600/50 hover:bg-orange-600 p-4 font-semibold">
                Bekijk bestemmingen
            </a>
        </div>
    </div>

    <main class="grid grid-cols-1 md:grid-cols-3 gap-10 p-3 flex-1" id="bestemmingen">

        <img src="{{ asset($destination->image) }}" alt="">
        <div>
            <h1>{{ $destination->city }}</h1>
            <p>{{ $destination->country  }}</p>
        </div>

    </main>

</body>

</html>