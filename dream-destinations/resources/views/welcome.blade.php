<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dream Destinations</title>

    @vite (['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <header class="flex items-end">
        <img src="{{ asset('images/logo-dream-destinations.png') }}" alt=""
            class="w-40">

    </header>

    <div class="hero-section object-fill text-white flex flex-col justify-center text-center p-15 gap-20">
        <h1 class="text-5xl">Ontdek de wereld met DreamDestinations</h1>
        <p>De mooiste bestemmingen wereldwijd. Voor iedere reiziger de perfecte reis.</p>
        <button
            id="destinations-button" class="cursor-pointer">
            Bekijk bestemmingen
        </button>
    </div>

    <main class="grid grid-cols-1 md:grid-cols-3">

    </main>

</body>

</html>