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
        {{-- HEADER --}}
        <x-Header />
        {{-- FIM HEADER --}}

        {{-- MAIN --}}
        <main class="w-full h-[20rem] lg:h-[30rem] bg-black px-4 py-2 bg-[url('/public/image/fundo.png')] bg-cover flex items-center">
            <div class="drop-shadow-lg">
                <h1 class="text-white text-4xl font-bold max-w-[70%]">Descubra os sabores dessa terra!</h1>
                <div class="flex flex-row items-center">
                    <img src="{{URL::asset('/image/juju.svg')}}" alt="juju" class="bg-white h-[3rem] p-4 rounded-s-full">
                    <input type="text" name="pesquisa" id="search" placeholder="pesquisar" class=" rounded-e-full py-2 px-2 w-[20rem] h-[3rem] text-sm my-2" />
                </div>
            </div>
        </main>
        {{-- FIM MAIN --}}

        {{-- RESTAURANTES --}}
        <x-Gallery slideType="restaurante" title="Melhores Restaurantes">@slot('cards', $cards)</x-Gallery> 
        {{-- FIM RESTAURANTES --}}  

        {{-- CTA --}}
        <x-Cta />
        {{-- FIM CTA --}}

        {{-- CIDADES --}}
        <x-Gallery slideType="cidade" title="Cidades do Norte Pioneiro">@slot('cards', $cards)</x-Gallery>
        {{-- FIM CIDADES --}}

        {{-- FOOTER --}}
        <x-Footer />
        {{-- FOOTER --}}
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
