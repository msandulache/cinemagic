<x-app-layout>

    <section class="relative bg-rhino-900 overflow-hidden">
        <div class="container px-4 mx-auto">
            <div class="py-5">
                <div class="flex flex-wrap items-center gap-2">
                    <a class="text-rhino-50 text-sm hover:text-rhino-50 transition duration-200" href="{{ route('app.index') }}">Acasa</a>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                            <path d="M15.1211 12C15.1212 12.1313 15.0954 12.2614 15.0451 12.3828C14.9948 12.5041 14.9211 12.6143 14.8281 12.707L10.5859 16.9497C10.3984 17.1372 10.1441 17.2426 9.87889 17.2426C9.6137 17.2426 9.35937 17.1372 9.17186 16.9497C8.98434 16.7622 8.879 16.5079 8.879 16.2427C8.879 15.9775 8.98434 15.7232 9.17186 15.5357L12.707 12L9.17183 8.46437C8.98431 8.27686 8.87897 8.02253 8.87897 7.75734C8.87897 7.49215 8.98431 7.23782 9.17183 7.05031C9.35934 6.86279 9.61367 6.75744 9.87886 6.75744C10.144 6.75744 10.3984 6.86279 10.5859 7.0503L14.8281 11.293C14.9211 11.3857 14.9949 11.4959 15.0451 11.6173C15.0954 11.7386 15.1212 11.8687 15.1211 12Z" fill="#A0A5B8"></path>
                        </svg>
                    </div>
                    <span class="text-rhino-50 text-sm transition duration-200">Filme</span>
                </div>
            </div>
        </div>
    </section>

    <div class="py-6">
        <div class="container px-4 mx-auto">
            <h2 class="text-4xl text-center font-heading font-semibold text-rhino-600 tracking-xs mt-9 mb-14">Toate
                filmele</h2>
            <div class="flex flex-wrap">
                @foreach($movies as $movie)
                    <div class="w-full lg:w-1/3 p-4">
                        <div class="px-6 flex items-center justify-center mb-4 hover:opacity-75 cursor-pointer">
                            <img class="rounded" src="http://image.tmdb.org/t/p/original/{{ $movie['poster_path'] }}" alt="">
                        </div>
                        <div class="flex flex-wrap items-center justify-between gap-4">
                            <div>
                                <p class="text-rhino-500 font-semibold">
                                    <a href="/movie/{{ $movie['id'] }}">{{ $movie['title'] }}</a>
                                </p>
                                <p class="text-rhino-300 text-sm">21.06, 22.06, 23.06</p>
                            </div>
                            <div>
                                <a class="px-4 py-1 rounded-sm border border-purple-500 text-purple-500 text-sm font-medium hover:bg-purple-500 hover:text-white transition duration-200" href="#">Trailer</a>
                                <a class="px-4 py-1 rounded-sm border border-purple-500 text-purple-500 text-sm font-medium hover:bg-purple-500 hover:text-white transition duration-200" href="#">Trailer</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</x-app-layout>
