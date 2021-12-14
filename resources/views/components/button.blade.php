<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-block btn-sm']) }}>
    {{ $slot }}
</button>
