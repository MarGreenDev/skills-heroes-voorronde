<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dream Destinations</title>

    @vite (['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <header class="flex items-end bg-orange-400">
        <img src="{{ asset('images/logo-dream-destinations.png') }}" alt=""
            class="w-40">
        <nav class="flex justify-between">
            <ul class="flex text-white">
                <a href="#" class="cursor-pointer">
                    <li>Home</li>
                </a>
                <a href="#" class="cursor-pointer">
                    <li>Bestemmingen</li>
                </a>
                <a href="#" class="cursor-pointer">
                    <li>Aanbiedingen</li>
                </a>
                <a href="#" class="cursor-pointer">
                    <li>Over ons</li>
                </a>
                <a href="#" class="cursor-pointer">
                    <li>Contact</li>
                </a>
            </ul>
        </nav>
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

        @foreach ($destinations as $destination)
        <h2>{{ $destination->name ?? 'not found'  }}</h2>
        @endforeach

    </main>

</body>

</html>