<footer class="relative bg-purple-700 overflow-hidden">
    <div class="container mx-auto py-12 px-4">
        <img class="block mb-8 mx-auto max-h-28"
             src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/logo.png') }}" alt="">
        <div class="flex flex-wrap justify-center items-center gap-10 mb-8">
            <a href="{{ route('page.home') }}">
                <div class="flex items-center gap-1 group">
                    <span
                        class="text-white font-bold text-sm group-hover:text-opacity-80 transition duration-200">{{ __('Acasa') }}</span>
                    <div class="text-purple-400 group-hover:text-purple-300 transition duration-200"></div>
                </div>
            </a>
            <a href="{{ route('moviehours.index') }}">
                <div class="flex items-center gap-1 group">
                    <span class="text-white font-bold text-sm group-hover:text-opacity-80 transition duration-200">{{ __('Program') }}</span>
                    <div class="text-purple-400 group-hover:text-purple-300 transition duration-200"></div>
                </div>
            </a>
            <a href="{{ route('movies.index') }}">
                <div class="flex items-center gap-1 group">
                    <span
                        class="text-white font-bold text-sm group-hover:text-opacity-80 transition duration-200">{{ __('Filme') }}</span>
                    <div class="text-purple-400 group-hover:text-purple-300 transition duration-200"></div>
                </div>
            </a>
            <a href="{{ route('page.contact') }}">
                <div class="flex items-center gap-1 group">
                    <span class="text-white font-bold text-sm group-hover:text-opacity-80 transition duration-200">{{ __('Contact') }}</span>
                    <div class="text-purple-400 group-hover:text-purple-300 transition duration-200"></div>
                </div>
            </a>
        </div>
        <p class="text-center text-sm text-white">© {{ now()->year }} {{ config('app.name', 'CineMagic') }} - {{ __('Toate drepturile rezervate') }}</p>
    </div>
</footer>

</div>
</body>
</html>
