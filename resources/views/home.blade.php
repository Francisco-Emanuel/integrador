<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gervasio codigos</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body>

    @auth
     <div class="h-full flex flex-col justify-center">
        <header class="flex flex-col px-4 py-2">
            <nav class="flex flex-row w-full justify-between py-2 items-center">
                <div class=" flex items-center">
                    <img src="{{URL::asset('/image/logo.svg')}}" alt="logo" class="w-[9rem]"  >
                </div>
                <div class="flex flex-row justify-between">
                    <a href="#" class="nav_links">restaurantes</a>
                    <a href="#" class="nav_links">rota do café</a>
                    <a href="#" class="nav_links">sobre</a>
                </div>
                <div class="flex items-center">
                    <img src="{{URL::asset('/image/perfil.svg')}}" alt="login" class="w-[2.5rem]" id="userprofile">
                </div>
            </nav>
        </header>
        <main class="w-full bg-black px-4 py-24 bg-[url('/public/image/fundo.png')]">
            <div>
                <h1 class="text-beje text-2xl max-w-[20rem] drop-shadow-lg">Descubra os sabores dessa terra!</h1>
                <div class="flex flex-row items-center">
                    <img src="{{URL::asset('/image/juju.svg')}}" alt="juju" class="bg-white h-[3rem] p-4 rounded-s-full">
                    <input type="text" name="pesquisa" id="search" placeholder="pesquisar" class=" rounded-e-full py-2 px-2 w-[20rem] h-[3rem] text-sm my-2" />
                </div>
            </div>
        </main>
        {{-- RESTAURANTES --}}
        <section class="px-4 py-4">
            <div class="flex flex-row w-full justify-between">
                <div class="flex flex-row items-center">
                    <img src="{{URL::asset('/image/galfu.svg')}}" alt="galfu" class="w-[1.5rem]">
                    <h1 class="text-verde font-bold ml-2 text-xl">Melhores restaurantes</h1>
                </div>
                <button class="border-2 border-verde px-2 rounded-md"><img src="{{URL::asset('/image/seta.svg')}}" alt=">" class="w-2" /></button>
            </div>
            <div class="flex flex-row justify-around mt-10">
                @foreach ($cards as $card)
                    @php
                        $card->dados_imagem = str_replace('public/', 'storage/', $card->dados_imagem);
                    @endphp
                    <div class="w-[20rem] h-[30rem] shadow-lg">
                        <div class="w-full h-60 bg-cover p-2" style="background-image: url('{{ $card->dados_imagem }}')">
                            <p class="bg-verde text-white text-[12px] px-1 rounded-md w-16">Novidade</p>
                        </div>

                        <div class="p-4">
                            <div class="flex flex-row justify-between">
                                <img src="{{URL::asset('/image/galfu.svg')}}" alt="icon" class="w-[2rem]">
                                <div class="flex flex-row">
                                    <img src="{{URL::asset('/image/cafe.svg')}}" alt="bean" class="w-[1rem] mx-1">
                                    <img src="{{URL::asset('/image/cafe.svg')}}" alt="bean" class="w-[1rem] mx-1">
                                    <img src="{{URL::asset('/image/cafe.svg')}}" alt="bean" class="w-[1rem] mx-1">
                                    <img src="{{URL::asset('/image/cafe.svg')}}" alt="bean" class="w-[1rem] mx-1">
                                    <img src="{{URL::asset('/image/cafe.svg')}}" alt="bean" class="w-[1rem] mx-1">
                                </div>
                            </div>
                            <h1 class="font-bold text-2xl">{{$card->title}}</h1>
                            <p class="text-[12px] text-gray-500 tracking-wider">{{$card->description}}</p>
                            {{-- <button class="delete-card bg-verde text-white p-2 rounded-md" data-title="{{ $card->title }}">Excluir</button> --}}
                        </div>
                    </div>
                @endforeach                    
            </div>
        </section>
        {{-- FIM DOS RESTAURANTES --}}
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
                <div class="relative w-48 h-56 drop-shadow-lg bg-[url('/public/image/jac.jpg')] bg-cover flex items-center justify-center">
                    <div class="absolute t-0 l-0 w-full h-full bg-gradient-to-t from-verde to-transparent">

                    </div>
                    <div class="relative z-[1] flex flex-col place-items-end items-center self-end">
                        <img src="{{URL::asset('/image/galfuc.svg')}}" alt="garfao" class="w-[2rem] fill-white">
                        <h2 class="text-white font-bold text-xl">jacarezinho</h2>
                    </div>
                </div>
                <div class="relative w-48 h-56 drop-shadow-lg bg-[url('/public/image/jac.jpg')] bg-cover flex items-center justify-center">
                    <div class="absolute t-0 l-0 w-full h-full bg-gradient-to-t from-verde to-transparent">

                    </div>
                    <div class="relative z-[1] flex flex-col place-items-end items-center self-end">
                        <img src="{{URL::asset('/image/galfuc.svg')}}" alt="garfao" class="w-[2rem] fill-white">
                        <h2 class="text-white font-bold text-xl">jacarezinho</h2>
                    </div>
                </div>
                <div class="relative w-48 h-56 drop-shadow-lg bg-[url('/public/image/jac.jpg')] bg-cover flex items-center justify-center">
                    <div class="absolute t-0 l-0 w-full h-full bg-gradient-to-t from-verde to-transparent">

                    </div>
                    <div class="relative z-[1] flex flex-col place-items-end items-center self-end">
                        <img src="{{URL::asset('/image/galfuc.svg')}}" alt="garfao" class="w-[2rem] fill-white">
                        <h2 class="text-white font-bold text-xl">jacarezinho</h2>
                    </div>
                </div>
            </div>
        </section>
        <footer class="w-full bg-verde flex flex-col items-center justify-center py-4">    
            <div>
                <img src="{{URL::asset('/image/galfuc.svg')}}" alt="garfao" class="w-[3rem] fill-white">
            </div>
            <div class="py-6 flex flex-row items-center justify-center align-middle place-items-center">
                <a href="#" class="text-white mx-2 hover:scale-105 transition-all">restaurantes</a>
                <a href="#" class="text-white mx-2 hover:scale-105 transition-all">rota do café</a>
                <a href="#" class="text-white mx-2 hover:scale-105 transition-all">sobre</a>
            </div>
            <div>
                <p class="text-[12px] text-gray-700">&copy;paladar pioneiro todos os direitos reservados</p>
            </div>
        </footer>
     </div>
    @else
        <div class="flex flex-col justify-around h-full">
            <div class="shadow-lg px-4 py-2">
                <h2>registro:</h2>
                <form action="/register" method="POST">
                    @csrf
                    <input type="text" name="name" id="nome" placeholder="Nome">
                    <input type="email" name="email" id="emaiu" placeholder="Email">
                    <input type="password" name="password" id="senha" placeholder="Senha">
                    <button class="bg-neutral-300 rounded-md shadow-md p-2">Registrar</button>
                </form>
            </div>
            <div class="shadow-lg px-4 py-2">
                <h2>login:</h2>
                <form action="/login" method="POST">
                    @csrf
                    <input type="text" name="loginName" id="nome" placeholder="Nome">
                    <input type="password" name="loginPassword" id="senha" placeholder="Senha">
                    <button class="bg-neutral-300 rounded-md shadow-md p-2">Logar</button>
                </form>
            </div>
        </div>
    @endauth

    
</body>

</html>
