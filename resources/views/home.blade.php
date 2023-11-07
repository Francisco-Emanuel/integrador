<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gervasio codigos</title>
    @vite('resources/css/app.css')
</head>

<body>
    @auth
     <div class="h-full flex flex-col justify-center">
        <x-Header></x-Header>
        <main class="w-full h-[20rem] lg:h-[30rem] bg-black px-4 py-2 bg-[url('/public/image/fundo.png')] bg-cover flex items-center">
            <div class="drop-shadow-lg">
                <h1 class="text-white text-4xl font-bold max-w-[70%]">Descubra os sabores dessa terra!</h1>
                <div class="flex flex-row items-center">
                    <img src="{{URL::asset('/image/juju.svg')}}" alt="juju" class="bg-white h-[3rem] p-4 rounded-s-full">
                    <input type="text" name="pesquisa" id="search" placeholder="pesquisar" class=" rounded-e-full py-2 px-2 w-[20rem] h-[3rem] text-sm my-2" />
                </div>
            </div>
        </main>
        {{-- RESTAURANTES --}}
        <x-Gallery slideType="restaurante" title="Melhores Restaurantes">@slot('cards', $cards)</x-Gallery> 
        {{-- FIM DOS RESTAURANTES --}}

        {{-- CTA --}}
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
        {{-- FIM CTA --}}
        {{-- CIDADES --}}
        <x-Gallery slideType="cidade" title="Melhores Restaurantes">@slot('cards', $cards)</x-Gallery>
        {{-- FIM CIDADES --}}
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
        <div class="h-screen w-full flex flex-row bg-beje justify-center">
            <div class="px-4 flex flex-col justify-end">
                <div class="">
                    <img src="{{URL::asset('/image/logo.svg')}}" alt="logo" class="w-60 mb-24"  >
                </div>
                <div>
                    <img src="{{URL::asset('/image/modelo.png')}}" alt="pessoa" class="w-[30rem]">
                </div>
            </div>
            <div class="px-4 flex items-center">
                <div class="bg-verde flex flex-col px-6 py-4 justify-center items-center rounded-lg gap-3">
                    <img src="{{URL::asset('/image/galfuc.svg')}}" alt="garfao" class="w-[5rem] fill-white">
                    <h1 class="font-bold text-4xl text-center text-white">Falta pouco para matar sua fome!</h1>
                    <p class="text-white text-lg font-light">como deseja continuar?</p>
                    <div class="flex flex-col justify-between w-full gap-3">
                        <a href="{{url('/auth/google')}}" class="text-center py-2 px-4 border-2 border-white text-white rounded-full font-bold text-xl">Fazer login com o Google</a>
                        <div class="w-full flex gap-3">
                            <a href="{{url('/auth/google')}}" class="border-2 border-white bg-white grow text-center text-verde rounded-full py-2 px-4 font-bold text-xl">celular</a>
                            <a href="{{url('/auth/google')}}" class="border-2 border-white bg-white grow text-center text-verde rounded-full py-2 px-4 font-bold text-xl">e-mail</a>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endauth

    
</body>

</html>
