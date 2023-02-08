<button {{ $attributes->merge(['type' => 'button', 'class' => 'font-bold py-2 px-4 m-1 rounded text-white bg-red-600 hover:bg-red-800 focus:bg-red-800;']) }}>
    {{ $slot }}
</button>