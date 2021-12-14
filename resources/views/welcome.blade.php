<x-guest-layout>
    
    <!-- LANDING DE MOVIL-->
    <div class="lg:hidden container overflow-hidden">

        <!-- DEGRADES -->
        <div class="absolute inset-0 transition ease-in-out bg-gradient-to-t from-black via-gray-900 to-transparent z-10 h-screen"></div>

        <!-- IMAGEN DE FONDO -->
        <img class="absolute inset-0 transform w-full object-cover object-top h-screen" src="{{asset('img/welcome/mobile/2.png')}}" style="filter: grayscale(0);" />

        <div class=" grid grid-cols-1 gap-4 content-end h-screen">

            <div class="z-20">
                <!-- LOGO -->
                 <img class="w-24 h-24 md:w-40 md:h-40 mx-auto mb-5" src="{{asset('img/logo.png')}}"  />
            </div>

            <div class="z-20">
                <h1 class="text-white text-4xl text-center font-title font-bold px-5">Es tiempo de superarte</h1>
                <p class="text-white text-center font-body px-5 text-sm mb-5">No pierdas tiempo con desplazamiento, esperando maquinas en el gimnasio y entrena de forma eficiente</p>
            </div>

            <!-- BOTONES DE INGRESO -->
            <div class="mt-2 mb-10 px-5 z-20">
                @if (Route::has('login'))
            
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-block btn-info">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-block btn-accent mb-2">Entrar</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-block btn-secondary">Registrarse</a>
                    @endif
                @endauth
            
                @endif
            </div>

        </div>
    </div>
    
    <!-- LANDING PC  -->
    <div class="hidden lg:block">
        <div class="w-full h-screen flex">

            <!-- IMAGEN DE FONDO -->
            <img src="{{asset('img/welcome/pc/2.png')}}" alt="background" class="object-cover object-center h-screen w-7/12">
            <div class="bg-black flex flex-col justify-center items-center w-5/12 shadow-lg px-5">

                <!-- LOGO -->
                <img class="w-32 h-32  mx-auto mb-10" src="{{asset('img/logo.png')}}"  />
                <h1 class="text-white text-5xl text-center font-title font-bold px-5 mb-2">Es tiempo de superarte</h1>
                <p class="text-white text-center font-body px-5 text-sm mb-5">No pierdas tiempo con desplazamientos a lugares con este taco o esperando maquinas en el gimnasio.<br> <strong> Entrena de forma eficiente en tu hogar.</strong></p>

                <!-- BOTONES DE INGRESO -->
                <div class="mt-2 mb-5 px-5 w-full">
                    @if (Route::has('login'))
                
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn btn-block btn-info">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-block btn-accent mb-2">Entrar</a>
    
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-block btn-secondary">Registrarse</a>
                        @endif
                    @endauth
                
                    @endif
                </div>

            </div>
        </div>
    </div>
    
</x-guest-layout>