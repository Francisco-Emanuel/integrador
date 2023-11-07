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