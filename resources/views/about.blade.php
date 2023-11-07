<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sobre</title>
    @vite('resources/css/app.css')
</head>

<body>
    @auth

    <div class="h-full flex flex-col">
        <header class="flex flex-col px-4 py-2">
            <nav class="flex flex-row w-full justify-between py-2 items-center">
                <div class=" flex items-center">
                    <a href="{{url('/')}}">
                        <img src="{{URL::asset('/image/logo.svg')}}" alt="logo" class="w-[9rem]"  >
                    </a>
                </div>
                <div class="flex flex-row justify-between">
                    <a href="{{url('/restaurantes')}}" class="nav_links {{Route::currentRouteName() == 'restaurantes' ? 'active-nav_links' : ''}}">restaurantes</a>
                    <a href="{{url('/rotadocafe')}}" class="nav_links {{Route::currentRouteName() == 'rotadocafe' ? 'active-nav_links' : ''}}">rota do café</a>
                    <a href="{{url('/about')}}" class="nav_links {{Route::currentRouteName() == 'about' ? 'active-nav_links' : ''}}">sobre</a>
                </div>
                <div class="flex items-center">
                    <form action="/logout" method="POST">
                        @csrf
                        <button>
                            <img src="{{URL::asset('/image/perfil.svg')}}" alt="login" class="w-[2.5rem]">
                        </button>
                    </form>
                </div>
            </nav>
        </header>

        <section class="w-full px-4 py-4 flex flex-col justify-center items-center gap-3">
            <div class="flex flex-col text-center gap-3">
                <h1 class="font-bold text-verde text-2xl">
                    Sobre o Paladar Pioneiro
                </h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum accusantium ipsam quasi modi optio cumque voluptates, consequuntur possimus voluptatibus, architecto atque necessitatibus. Nesciunt molestiae esse quos laborum est at expedita.
                </p>
            </div>
            <div>
                <img src="{{URL::asset('/image/galfu.svg')}}" alt="galfu" class="w-20">
            </div>
            <div class="flex flex-col text-center">
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis voluptates officia minima commodi aperiam omnis atque. Velit dolores, iusto perspiciatis molestias magnam, mollitia dolor, consequuntur incidunt quibusdam voluptas maiores illum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, non. Omnis quas, nisi sit repellat consectetur ad dolores magnam quae quis, optio minima facilis velit ea repudiandae quia fugiat necessitatibus?
                </p>
            </div>
            <div class="flex flex-col text-center">
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur excepturi est tempore rerum. Facilis eum harum ab, debitis nam aliquid aspernatur nobis voluptatum fugit unde, repellendus nulla assumenda quaerat reprehenderit? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet, nemo impedit illo iusto hic expedita tempora iure consequatur ipsam repudiandae officiis debitis, unde delectus eius vel nisi dolores incidunt? Deleniti. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla sapiente, facere mollitia quaerat qui perspiciatis recusandae temporibus hic suscipit harum omnis illum officia veritatis placeat animi eveniet dignissimos enim consequatur?
                </p>
            </div>
        </section>
        
        <section class="mt-5 mb-20 w-full h-56 bg-[url('/public/image/anunciofundo.png')] bg-cover p-6">
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

        <footer class=" w-full bg-verde flex flex-col items-center justify-center py-4">    
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
