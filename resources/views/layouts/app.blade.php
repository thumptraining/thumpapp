<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Comfortaa:wght@300;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        @livewire('components.alert.headalert')

        <style>
            ::-webkit-scrollbar {
                width: 0;
            }

            ::-webkit-scrollbar-track {
                -webkit-box-shadow: inset 0 0 0px rgba(0, 0, 0, 0.3);
            }

            ::-webkit-scrollbar-thumb {
                background-color: transparent;
                outline: 1px solid transparent;
            }
        </style>

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>

    <body class="font-body antialiased text-zinc-900">
       
        <!-- HEADER -->
        @if (isset($header))
            <div class="realtive sticky top-0 w-full rounded-b-3xl bg-center cursor-pointer object-cover z-10 shadow-lg bg-gradient-to-r from-gray-900 via-neutral-90 to-black py-5">

                <div class="px-3 rounded-lg  flex flex-col w-full">
            
                    <h4 class="font-title text-white text-3xl font-semibold leading-tight truncate text-center">
                        {{ $header }}
                    </h4>
                </div>
                
            </div>
        @endif

        <!-- CONTENIDO -->
		<div class=" p-3 space-y-4 z-0 overflow-x-hidden">
			{{ $slot }}
		</div>


        <!-- MENU ENTRENADOR -->
        <div class="sticky bottom-24 right-0  flex items-center justify-end ">  
            <div x-data="{ dropdownOpen: false }" class="dropdown dropdown-left dropdown-end " >
                <button @click="dropdownOpen = !dropdownOpen" class="btn btn-circle btn-lg mr-5 btn-primary">
                    <svg viewBox="0 0 20 20" enable-background="new 0 0 20 20" class="w-6 h-6 inline-block">
                        <path fill="#FFFFFF" d="M16,10c0,0.553-0.048,1-0.601,1H11v4.399C11,15.951,10.553,16,10,16c-0.553,0-1-0.049-1-0.601V11H4.601 C4.049,11,4,10.553,4,10c0-0.553,0.049-1,0.601-1H9V4.601C9,4.048,9.447,4,10,4c0.553,0,1,0.048,1,0.601V9h4.399 C15.952,9,16,9.447,16,10z" />
                    </svg>
                </button> 

                <ul x-show="dropdownOpen" class="p-2 shadow menu dropdown-content bg-base-100 rounded-box w-52">
                    <li>
                        <a>Item 1</a>
                    </li> 
                    <li>
                        <a>Item 2</a>
                    </li> 
                    <li>
                        <a>Item 3</a>
                    </li>
                </ul>
            </div>
            
        </div>

        <!-- MENU -->
		<div class="sticky bottom-0 px-5 py-5 my-0  flex items-center justify-between bg-black shadow-3xl text-gray-400  cursor-pointer z-10">

            <!-- DASHBOARD -->
            <a href="{{ route('dashboard') }}" class="flex flex-col items-center transition ease-in duration-200 hover:text-blue-400 ">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z">
                    </path>
                </svg>
            </a>

            
            <!-- PLAN -->
            <a href="" class="flex flex-col items-center transition ease-in duration-200 hover:text-blue-400 ">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                  
                </svg>
            </a>

            <!-- PERFIL -->
		
            <a href="{{ route('profile.show') }}" class="flex flex-col items-center">
                <img src="{{ Auth::user()->profile_photo_url }}" class="absolute bottom-5 shadow-2xl flex items-center justify-center rounded-full border-4 text-3xl border-gray-50 hover:border-gray-900 w-20 h-20 transition ease-in duration-200 "> 
            </a>
		
            <!-- DATOS -->
			<div class="flex flex-col items-center transition ease-in duration-200 hover:text-blue-400 ">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
					stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
						d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z">
					</path>
				</svg>
			</div>

            <!-- CERRAR -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button href="{{ route('logout') }}" class="flex flex-col items-center transition ease-in duration-200  text-red-300 hover:text-red-400 " onclick="event.preventDefault(); this.closest('form').submit();">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                </button>
            </form>

            
		</div>
       
        @stack('modals')

        @livewireScripts

        <script src="{{asset('js/cdn.min.js')}}" defer></script>

        <script>
            const setup = () => {
                return {
                isSidebarOpen: false,
                currentSidebarTab: null,
                isSettingsPanelOpen: false,
                isSubHeaderOpen: false,
                watchScreen() {
                    if (window.innerWidth <= 1024) {
                    this.isSidebarOpen = false
                    }
                },
            }
          }
        </script>

    </body>
</html>
