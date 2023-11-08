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
        {{-- HEADER --}}
        <x-Header />
        {{-- FIM HEADER --}}

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
        
        {{-- CTA --}}
        <x-Cta />
        {{-- FIM CTA --}}

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
