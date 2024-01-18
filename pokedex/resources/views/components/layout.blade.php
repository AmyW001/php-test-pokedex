<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        pokeblue: "#3C59A5",
                        pokeyellow: "#FFCC01",
                    },
                },
            },
        };
    </script>
    <title>Pokedex</title>
</head>

<body class="font-mono">
    <nav class="flex justify-center m-5 flex-col items-center">
        <div class="mb-2">
            <a href="/">
                <img src="{{asset('images/pokemon-logo.png')}}" alt="" class="max-w-48">
                <h1 class="text-center text-pokeblue">Pokédex</h1>
            </a>
        </div>
        <div>
            <form action="{{ url('/') }}" method="GET">
                <input type="text" name="search" placeholder="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-pokeblue focus:border-pokeblue block w-full p-1.5 pl-5" required>
            </form>
        </div>
    </nav>
    <main class="">
        {{ $slot }}
    </main>
</body>
</html>