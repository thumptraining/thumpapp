<x-guest-layout>

    <x-validation-errors class="alert-toast fixed bottom-0 right-0 m-8 w-5/6 md:w-full max-w-sm" />

    <x-authentication-card>

        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="relative w-full mb-3">
                <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">Email</label>
                <x-input id="email" class="block mt-1 w-full text-gray-700" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="relative w-full mb-3">
                <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">Password</label>
                <x-input id="password" class="block mt-1 w-full text-gray-700" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="grid grid-cols-1 justify-items-center sm:grid-cols-2 sm:justify-items-stretch my-5">
                <div class="justify-self-start">
                    <label class="inline-flex items-center cursor-pointer">

                        <x-checkbox id="remember_me" name="remember" />
                        
                        <span class="ml-2 text-sm font-semibold text-gray-700">
                            Recuérdame
                        </span>
                    </label>
                </div>

                <div class="mt-5 sm:mt-0 sm:justify-self-end">
                    @if (Route::has('password.request'))
                        <a class="link link-primary text-sm text-center sm:text-left" href="{{ route('password.request') }}">
                            {{ __('¿Olvidaste tu contraseña?') }}
                        </a>
                    @endif
                </div>
                
            </div>

            <div class="text-center mt-6">
           
                <x-button>
                    {{ __('Entrar') }}
                </x-button>
            </div>

            

        </form>
     
    </x-authentication-card>

</x-guest-layout>
