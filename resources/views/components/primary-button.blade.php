<button {{ $attributes->merge(['type' => 'submit', 'class' => 'rounded-sm py-3 px-4 bg-purple-500 shadow-md text-white font-medium text-sm w-full mb-8 block text-center hover:bg-purple-600 transition duration-200']) }}>
    {{ $slot }}
</button>
