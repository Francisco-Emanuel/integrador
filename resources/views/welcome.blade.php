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
        <nav class="flex flex-row w-full justify-between py-2 items-center">
            <div class=" flex items-center">
                <img src="{{URL::asset('/image/logo.svg')}}" alt="logo" class="w-[9rem]" >
            </div>
            <div class="flex flex-row justify-between">
                <a href="#" class="nav_links">restaurantes</a>
                <a href="#" class="nav_links">rota do café</a>
                <a href="#" class="nav_links">sobre</a>
            </div>
            <div class="flex items-center">
                <img src="{{URL::asset('/image/perfil.svg')}}" alt="login" class="w-[2.5rem]">
            </div>
        </nav>
    </header>
    <main class="w-full bg-black px-4 py-24 bg-[url('/public/image/fundo.png')]">
        <div>
            <h1 class="text-beje text-2xl max-w-[20rem]">Descubra os sabores dessa terra!</h1>
            <div class="flex flex-row items-center">
                <img src="{{URL::asset('/image/juju.svg')}}" alt="juju" class="bg-white h-[3rem] p-4 rounded-s-full">
                <input type="text" name="pesquisa" id="search" placeholder="pesquisar" class=" rounded-e-full py-2 px-2 w-[20rem] h-[3rem] text-sm my-2" />
            </div>
        </div>
    </main>
    <section class="px-4 py-4">
        <div class="flex flex-row w-full justify-between">
            <div class="flex flex-row items-center">
                <img src="{{URL::asset('/image/galfu.svg')}}" alt="galfu" class="w-[1.5rem]">
                <h1 class="text-verde font-bold ml-2 text-xl">Melhores restaurantes</h1>
            </div>
            <button class="border-2 border-verde px-2 rounded-md"><img src="{{URL::asset('/image/seta.svg')}}" alt=">" class="w-2" /></button>
        </div>
        <div class="flex flex-row justify-around mt-10">
            <div class="w-48 h-56 shadow-lg"></div>
            <div class="w-48 h-56 shadow-lg"></div>
            <div class="w-48 h-56 shadow-lg"></div>
        </div>
    </section>
    <section class="my-5 w-full h-56 bg-[url('/public/image/anunciofundo.png')] bg-cover p-6">
        <div class="bg-white p-4 shadow-lg relative top-[6rem] flex flex-row items-center">
            <div>
                <img src="{{URL::asset('/image/galfu.svg')}}" alt="galfinhu" class="w-[6rem]">
            </div>
            <div class="mx-4">
                <h1 class="font-bold text-xl">Destaque seu negócio! Junte-se ao nosso site</h1>
                <button class="rounded-lg bg-verde px-4 py-2 border-0 text-white text-sm">Registre-se agora</button>
            </div>
        </div>
    </section>
    <section class="px-4 py-4 mt-20">
        <div class="flex flex-row w-full justify-between">
            <div class="flex flex-row items-center">
                <img src="{{URL::asset('/image/galfu.svg')}}" alt="galfu" class="w-[1.5rem]">
                <h1 class="text-verde font-bold ml-2 text-xl">Cidades do Norte Pioneiro</h1>
            </div>
            <button class="border-2 border-verde px-2 rounded-md"><img src="{{URL::asset('/image/seta.svg')}}" alt=">" class="w-2" /></button>
        </div>
        <div class="flex flex-row justify-around mt-10">
            <div class="w-48 h-56 shadow-lg"></div>
            <div class="w-48 h-56 shadow-lg"></div>
            <div class="w-48 h-56 shadow-lg"></div>
        </div>
    </section>
</body>

</html>
