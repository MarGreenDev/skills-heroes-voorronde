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
    <!-- filters/search? -->
    <header class="flex items-center justify-center bg-orange-400">
        <img src="{{ asset('images/logo-dream-destinations.png') }}" alt=""
            class="w-40">
    </header>
    <nav class="bg-orange-300 p-3">
        <ul class="flex text-orange-700 justify-evenly">
            <a href="#" class="cursor-pointer">
                <li>Home</li>
            </a>
            <a href="#bestemmingen" class="cursor-pointer">
                <li>Bestemmingen</li>
            </a>
            <a href="#" class="cursor-pointer">
                <li>Aanbiedingen</li>
            </a>
            <a href="https://www.softwire-social.com" class="cursor-pointer">
                <li>Over ons</li>
            </a>
            <a href="mailto:contact@dreamdestinations.com" class="cursor-pointer" target="_blank">
                <li>Contact</li>
            </a>
        </ul>
    </nav>

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

    <main class="grid grid-cols-1 md:grid-cols-3 gap-10 p-3" id="bestemmingen">

        @foreach ($destinations as $destination)
        <a href="{{ route('destination',$destination) }}">
            <div class="text-center border-orange-400 border-3 shadow-orange-400/40 shadow-md hover:shadow-orange-400/70 hover:shadow-xl">
                <img src="{{ asset($destination->image) }}" alt=""
                    class="">
                <div class="flex flex-col py-2">
                    <h3 class="text-orange-600 text-lg font-semibold">{{ $destination->city }}</h3>

                    <p class="text-sm">{{ $destination->country }}</p>

                </div>
                <p>Aantal boekingen: {{ $destination->number_of_bookings }}</p>
            </div>
        </a>
        @endforeach

    </main>

    <div class="statistieken flex flex-col items-center p-15">
        <div class="bg-linear-to-t from-orange-300 to-orange-600 bg-clip-text text-transparent text-4xl font-bold ">
            <h2>Statistieken</h2>
        </div>
        <div class="flex flex-col md:flex-row text-xl font-semibold gap-3">
            <p id="reizigers">4000+ reizigers</p>
            <p>120 bestemmingen</p>
            <p>98% tevreden klanten</p>
        </div>
    </div>

    <footer class="bg-orange-500 text-center text-white">
        DreamDestinations © 2026
    </footer>
</body>

</html>