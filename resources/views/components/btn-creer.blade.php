<button {{ $attributes->merge(['type' => 'button', 'class' => 'font-bold py-2 px-4 m-1 rounded text-white bg-green-500 hover:bg-green-700 focus:bg-green-700;']) }}>
    {{ $slot }}
</button>