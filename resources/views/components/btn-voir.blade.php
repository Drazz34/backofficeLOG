<button {{ $attributes->merge(['type' => 'button', 'class' => 'font-bold py-2 px-4 m-1 rounded text-black bg-gray-200 hover:bg-gray-400 focus:bg-gray-400;']) }}>
    {{ $slot }}
</button>