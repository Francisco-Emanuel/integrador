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
<!-- 
Branco - #fdfdfd

Beje - #f9f0e1

Verde - #486d24 -->

<body >
    <!-- menu-->
<header class="flex flex-col px-4 py-2">
        <nav class="flex flex-row w-full justify-between py-2 items-center">
            <div class=" flex items-center">
                <img src="{{URL::asset('/image/idvprojintegrador.svg')}}" alt="logo" class="w-[8rem]" >
            </div>
            <div class="flex flex-row justify-between">
                <a href="#" class="nav_links mx-8 bg-[#486d24] rounded-lg text-[#f5f5f5] fw-[700]">restaurantes</a>
                <a href="#" class="nav_links mx-8 text-[#486d24]">rota do café</a>
                <a href="#" class="nav_links mx-8 text-[#486d24]">sobre</a>
            </div>
            <div class="flex items-center">
                <img src="{{URL::asset('/image/perfil.svg')}}" alt="login" class="w-[2.5rem]">
            </div>
        </nav>
            <div class="flex w-full m-12">
                <input type="search" class="w-[400px] h-[28px] border solid border-2 border-black rounded-lg" placeholder="pesquisar no site,palavras chaves ou frases">
                <button class="mx-10 border solid border-2 border-black rounded-lg w-[110px] hover:bg-[#486d24]">Mostar tudo</button>
                <button class="mx-10 border solid border-2 border-black rounded-lg w-[90px] hover:bg-[#486d24]">Novo</button>
                <button class="mx-10 border solid border-2 border-black rounded-lg w-[100px] hover:bg-[#486d24]">Preço</button>
                <button class="mx-10 border solid border-2 border-black rounded-lg w-[105px] hover:bg-[#486d24]">Estrelas</button>
            </div>
    </header>

        <!-- marmitona de olinda-->
        <h2 class="ml-4 font-bold text-[#486d24]">1-9 de 57 Estabelecimentos</h2>
        <div class="grid  gap-3 grid-cols-3">
        <div class=" mx-8 -500 shadow-lg shadow-gray-500/50  w-[360px] h-[460px] block">
            <img src="{{URL::asset('/image/marmita.png')}}" alt="marmita" class="w-[200px] h-[200px] mt-6 ml-auto mr-auto">
            <!-- estrelas -->
            <div class="flex ">
                
                <img src="{{URL::asset('/image/SIMBOLO1.png')}}" alt="logo" class="w-[2rem] ">
            
                <img src="{{URL::asset('/image/cafe.svg')}}" class="w-[20px] ml-40">
                <img src="{{URL::asset('/image/cafe.svg')}}" class="w-[20px] ">
                <img src="{{URL::asset('/image/cafe.svg')}}" class="w-[20px] ">
                <img src="{{URL::asset('/image/cafe.svg')}}" class="w-[20px] ">
                <img src="{{URL::asset('/image/cafe.svg')}}" class="w-[20px] ">
            </div>
            <h2 class="text-xl font-bold">Marmitona de Olinda</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis dolorem eum commodi ullam reiciendis beatae, corrupti error est ea iusto? Obcaecati perspiciatis ea cumque ad molestiae nobis laboriosam ipsa mollitia?</p>    
        </div>

            <div class=" mx-8  shadow-lg shadow-gray-500/50 w-[360px] h-[460px] block">
            <img src="{{URL::asset('/image/marmita.png')}}" alt="marmita" class="w-[200px] h-[200px] mt-6 ml-auto mr-auto">
            <!-- estrelas-->
            <div class="flex ">
                
                <img src="{{URL::asset('/image/SIMBOLO1.png')}}" alt="logo" class="w-[2rem] ">
            
                <img src="{{URL::asset('/image/cafe.svg')}}" class="w-[20px] ml-40">
                <img src="{{URL::asset('/image/cafe.svg')}}" class="w-[20px] ">
                <img src="{{URL::asset('/image/cafe.svg')}}" class="w-[20px] ">
                <img src="{{URL::asset('/image/cafe.svg')}}" class="w-[20px] ">
                <img src="{{URL::asset('/image/cafe.svg')}}" class="w-[20px] ">
            </div>
            <h2 class="text-xl font-bold">Marmitona de Olinda</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis, doloremque mollitia animi ut expedita, quo libero harum facere provident corrupti rerum distinctio delectus. Sapiente, laborum quas. Perspiciatis officiis molestiae quae?</p>    
        </div>

            <div class=" mx-8  shadow-lg shadow-gray-500/50 w-[360px] h-[460px] block">
            <img src="{{URL::asset('/image/marmita.png')}}" alt="marmita" class="w-[200px] h-[200px] mt-6 ml-auto mr-auto">
            <!-- estrelas-->
            <div class="flex ">
                
                <img src="{{URL::asset('/image/SIMBOLO1.png')}}" alt="logo" class="w-[2rem] ">
            
                <img src="{{URL::asset('/image/cafe.svg')}}" class="w-[20px] ml-40">
                <img src="{{URL::asset('/image/cafe.svg')}}" class="w-[20px] ">
                <img src="{{URL::asset('/image/cafe.svg')}}" class="w-[20px] ">
                <img src="{{URL::asset('/image/cafe.svg')}}" class="w-[20px] ">
                <img src="{{URL::asset('/image/cafe.svg')}}" class="w-[20px] ">
            </div>
            <h2 class="text-xl font-bold">Marmitona de Olinda</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum dignissimos fugiat similique voluptatum voluptatibus non accusamus, vitae vel quas veritatis ab unde nam placeat dolorum, eius deserunt reprehenderit tempore. Sapiente?</p>    
        </div>

            <div class=" mx-8  shadow-lg shadow-gray-500/50 w-[360px] h-[460px] block">
            <img src="{{URL::asset('/image/marmita.png')}}" alt="marmita" class="w-[200px] h-[200px] mt-6 ml-auto mr-auto">
            <!-- estrelas-->
            <div class="flex ">
                
                <img src="{{URL::asset('/image/SIMBOLO1.png')}}" alt="logo" class="w-[2rem] ">
            
                <img src="{{URL::asset('/image/cafe.svg')}}" class="w-[20px] ml-40">
                <img src="{{URL::asset('/image/cafe.svg')}}" class="w-[20px] ">
                <img src="{{URL::asset('/image/cafe.svg')}}" class="w-[20px] ">
                <img src="{{URL::asset('/image/cafe.svg')}}" class="w-[20px] ">
                <img src="{{URL::asset('/image/cafe.svg')}}" class="w-[20px] ">
            </div> 
            <h2 class="text-xl font-bold">Marmitona de Olinda</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis vitae minima quisquam modi cum iure voluptates quidem iusto illo ducimus, nihil ea perspiciatis officia voluptatum unde, numquam sed pariatur consequatur!</p>    
        </div>
            

            <div class=" mx-8  shadow-lg shadow-gray-500/50 w-[360px] h-[460px] block">
            <img src="{{URL::asset('/image/marmita.png')}}" alt="marmita" class="w-[200px] h-[200px] mt-6 ml-auto mr-auto">
            <!-- estrelas -->
            <div class="flex ">
                
                <img src="{{URL::asset('/image/SIMBOLO1.png')}}" alt="logo" class="w-[2rem] ">
            
                <img src="{{URL::asset('/image/cafe.svg')}}" class="w-[20px] ml-40">
                <img src="{{URL::asset('/image/cafe.svg')}}" class="w-[20px] ">
                <img src="{{URL::asset('/image/cafe.svg')}}" class="w-[20px] ">
                <img src="{{URL::asset('/image/cafe.svg')}}" class="w-[20px] ">
                <img src="{{URL::asset('/image/cafe.svg')}}" class="w-[20px] ">
            </div> 
            <h2 class="text-xl font-bold">Marmitona de Olinda</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi corporis incidunt distinctio doloribus quasi perspiciatis similique aliquid id ab? Commodi iste minus atque exercitationem hic ea laudantium nihil eaque consectetur!</p>    
        </div>

            <div class=" mx-8 shadow-lg shadow-gray-500/50 w-[360px] h-[460px] block">
            <img src="{{URL::asset('/image/marmita.png')}}" alt="marmita" class="w-[200px] h-[200px] mt-6 ml-auto mr-auto">
            <!-- estrelas -->
            <div class="flex ">
                
                <img src="{{URL::asset('/image/SIMBOLO1.png')}}" alt="logo" class="w-[2rem] ">
            
                <img src="{{URL::asset('/image/cafe.svg')}}" class="w-[20px] ml-40">
                <img src="{{URL::asset('/image/cafe.svg')}}" class="w-[20px] ">
                <img src="{{URL::asset('/image/cafe.svg')}}" class="w-[20px] ">
                <img src="{{URL::asset('/image/cafe.svg')}}" class="w-[20px] ">
                <img src="{{URL::asset('/image/cafe.svg')}}" class="w-[20px] ">
            </div>
            <h2 class="text-xl font-bold">Marmitona de Olinda</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio amet, rerum, quae voluptatum architecto vel debitis in ullam commodi tenetur accusantium ipsam temporibus animi laboriosam eveniet, cum sit numquam placeat.</p>      
        </div>

            <div class=" mx-8 shadow-lg shadow-gray-500/50 w-[360px] h-[460px] block">
            <img src="{{URL::asset('/image/marmita.png')}}" alt="marmita" class="w-[200px] h-[200px] mt-6 ml-auto mr-auto">
            <!-- estrelas -->
            <div class="flex ">
                
                <img src="{{URL::asset('/image/SIMBOLO1.png')}}" alt="logo" class="w-[2rem] ">
            
                <img src="{{URL::asset('/image/cafe.svg')}}" class="w-[20px] ml-40">
                <img src="{{URL::asset('/image/cafe.svg')}}" class="w-[20px] ">
                <img src="{{URL::asset('/image/cafe.svg')}}" class="w-[20px] ">
                <img src="{{URL::asset('/image/cafe.svg')}}" class="w-[20px] ">
                <img src="{{URL::asset('/image/cafe.svg')}}" class="w-[20px] ">
            </div>
            <h2 class="text-xl font-bold">Marmitona de Olinda</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus cumque ipsam officiis dolorum sint dicta provident beatae officia harum rem? Error itaque beatae minima delectus quod debitis cupiditate sint consectetur.</p>    
        </div>

            <div class=" mx-8 shadow-lg shadow-gray-500/50 w-[360px] h-[460px] block">
            <img src="{{URL::asset('/image/marmita.png')}}" alt="marmita" class="w-[200px] h-[200px] mt-6 ml-auto mr-auto">
            <!-- estrelas -->
            <div class="flex ">
                
                <img src="{{URL::asset('/image/SIMBOLO1.png')}}" alt="logo" class="w-[2rem] ">
            
                <img src="{{URL::asset('/image/cafe.svg')}}" class="w-[20px] ml-40">
                <img src="{{URL::asset('/image/cafe.svg')}}" class="w-[20px] ">
                <img src="{{URL::asset('/image/cafe.svg')}}" class="w-[20px] ">
                <img src="{{URL::asset('/image/cafe.svg')}}" class="w-[20px] ">
                <img src="{{URL::asset('/image/cafe.svg')}}" class="w-[20px] ">
            </div>
            <h2 class="text-xl font-bold">Marmitona de Olinda</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid aut ipsam in blanditiis itaque iure omnis quidem doloremque non quod odio saepe cupiditate, voluptate accusamus iusto, ad officiis laboriosam architecto.</p>     
        </div>

            <div class=" mx-8 shadow-lg shadow-gray-500/50 w-[360px] h-[460px] block">
            <img src="{{URL::asset('/image/marmita.png')}}" alt="marmita" class="w-[200px] h-[200px] mt-6 ml-auto mr-auto">
            <!-- estrelas -->
            <div class="flex ">
                
                <img src="{{URL::asset('/image/SIMBOLO1.png')}}" alt="logo" class="w-[2rem] ">
            
                <img src="{{URL::asset('/image/cafe.svg')}}" class="w-[20px] ml-40">
                <img src="{{URL::asset('/image/cafe.svg')}}" class="w-[20px] ">
                <img src="{{URL::asset('/image/cafe.svg')}}" class="w-[20px] ">
                <img src="{{URL::asset('/image/cafe.svg')}}" class="w-[20px] ">
                <img src="{{URL::asset('/image/cafe.svg')}}" class="w-[20px] ">
            </div>      
            <h2 class="text-xl font-bold">Marmitona de Olinda</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos dolorem expedita sapiente, et similique vel delectus consequuntur vero, illum veniam cum odio voluptas iste deleniti mollitia? Facere laborum possimus quia.</p>
        </div>
        </div>
        <!-- explorar o norte pioneiro -->
        <div class="mt-20">
            <h1 class="text-xl font-bold text-[#486d24]">Explorar o Norte Pioneiro</h1>
            <div class="flex m-8">
                <img src="{{URL::asset('image/jacarezinho.png')}}" alt="jacarezinho" class="w-[370px] h-[410px]">

                <img src="{{URL::asset('image/ribeirao.png')}}" alt="ribeirao-claro" class="w-[370px] h-[410px] ml-8" alt="">

                <img src="{{URL::asset('/image/siqueira-campos.png')}}" alt="jacarezinho" class="w-[370px] h-[410px] ml-8" alt="">
            </div>
        </div>
        <!-- rodapé -->
        <footer class="h-[300px] bg-[#486d24]">
            <img src="{{URL::asset('/image/SIMBOLO1(1).png')}}" alt="logo" class="w-[4rem] ml-auto mr-auto">

            <div class="flex justify-center mt-6">
            <h4 class=" text-[#fff]">Restaurantes</h4>
            <h4 class="ml-8 text-[#fff]">Rota do café</h4>
            <h4 class="ml-8 text-[#fff]">Sobre</h4>
            </div>
        </footer>
</body>

</html>
