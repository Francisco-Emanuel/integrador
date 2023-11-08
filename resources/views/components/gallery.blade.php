<section class="px-4 py-4 flex flex-col items-center justify-center">
    <div class="flex flex-row w-full justify-between">
        <div class="flex flex-row items-center">
            <img src="{{URL::asset('/image/galfu.svg')}}" alt="galfu" class="w-[2rem]">
            <h1 class="text-verde font-bold ml-2 text-xl">{{$title}}</h1>
        </div>
        <button class="border-2 border-verde px-2 rounded-md"><img src="{{URL::asset('/image/seta.svg')}}" alt=">" class="w-2" /></button>
    </div>
    <div class="flex flex-row justify-around mt-10 w-full lg:w-[70%]">
        @if ($slideType === 'restaurante')
            @foreach ($cards->slice(0, 2) as $card)
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
                        <p class="text-[12px] text-gray-500 tracking-wider max-w-[100%]">{{$card->description}}</p>
                    </div>
                </div>
            @endforeach
        @elseif ($slideType === 'cidade')
            @php
                $filepath = public_path('data/cities.json');
                $data = json_decode(file_get_contents($filepath), true);
                
                $slicedData = array_slice($data, 0, 3);
            @endphp
            @foreach ($slicedData as $item)
                <div class="w-[15rem] h-[20rem] lg:w-[20rem] lg:h-[25rem] shadow-2xl bg-[url('{{$item['image']}}')] bg-cover flex flex-col items-center justify-end py-4">
                    <div class="flex flex-col items-center gap-3">
                        <img src="{{URL::asset('/image/galfuc.svg')}}" alt="garfao" class="w-10 fill-white">
                        <h2 class="text-white font-bold text-2xl">{{$item['title']}}</h2>
                    </div>
                </div>
            @endforeach
        @endif
                                
    </div>
</section>