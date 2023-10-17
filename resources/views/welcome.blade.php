<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Paladar Pioneiro</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite('resources/css/app.css')
</head>

<body class="antialiased">
    <header class="flex flex-col px-4 py-2">
        <nav class="flex flex-row w-full justify-around">
            <div class="bg-gray-900">
                <img src="" alt="logo">
            </div>
            <div class="flex flex-row justify-between">
                <a href="#" class="mx-5">restaurantes</a>
                <a href="#" class="mx-5">rota do café</a>
                <a href="#" class="mx-5">sobre</a>
            </div>
            <div class="bg-gray-900">
                <img src="" alt="login">
            </div>
        </nav>
        <main>

        </main>
    </header>
</body>

</html>
