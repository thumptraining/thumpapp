@if ($errors->any())
    <!--Toast-->
    <div {{ $attributes }}>
        <div>
            <input type="checkbox" class="hidden" id="footertoast">

            <label class="close cursor-pointer flex items-center justify-between w-full px-3 bg-red-400 h-24 rounded shadow-lg text-white" title="close" for="footertoast">
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
    
                <svg class="fill-current text-white font-bold mx-2" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 18 18">
                    <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                </svg>
            </label>
        </div>
        
    </div>

@endif
