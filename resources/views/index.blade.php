<x-app-layout>

    <section class="relative bg-black overflow-hidden">
        <div class="container px-4 mx-auto">
            <div class="max-w-xl mx-auto lg:max-w-none pt-18 pb-3 relative">
                <div class="flex flex-wrap items-center -mx-4">
                    <div class="relative w-full lg:w-1/2 px-6 mb-12">
                        <div class="relative">
                            <div class="flex flex-col justify-center items-start">
                                <h1 class="text-3xl xs:text-4xl sm:text-5xl md:text-6xl font-heading text-white font-semibold mb-8">
                                    {{ __('Bun venit la CineMagic!') }}</h1>
                                <p class="max-w-sm lg:max-w-md mb-8 text-rhino-300 text-sm lg:text-base">
                                    {{ __('Alegeți dintr-o varietate largă de filme și rezervați biletele în câțiva pasi simpli.') }}</p>
                                <a class="inline-flex h-12 py-1 px-6 items-center text-center text-sm font-medium text-white rounded-sm bg-purple-500 hover:bg-purple-600 transition duration-200"
                                   href="{{ route('movies.index') }}">{{ __('Vezi lista de filme') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 px-8 mb-12">
                        <div class="relative">
                            <div class="flex flex-wrap -mx-4">
                                @foreach($latest_movies as $latest_movie)
                                    <div class="w-1/3 px-4 group">
                                        <a href="{{ route('movies.show', ['movie' => $latest_movie]) }}">
                                            <img class="block rounded-xl w-full group-hover:opacity-75"
                                                 src="https://image.tmdb.org/t/p/original{{ $latest_movie['poster_path'] }}"
                                                 alt="">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{{--    <section class="relative overflow-hidden py-6">--}}
{{--        <div class="container px-4 mx-auto">--}}
{{--            <div class="flex flex-wrap">--}}
{{--                <div class="w-full sm:w-1/2 lg:w-1/4 p-4">--}}
{{--                    <div class="mb-3 mx-auto bg-orange-500 w-12 h-12 rounded-full flex items-center justify-center">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">--}}
{{--                            <path--}}
{{--                                d="M12 3C10.6868 3 9.38642 3.25866 8.17317 3.7612C6.95991 4.26375 5.85752 5.00035 4.92893 5.92893C3.05357 7.8043 2 10.3478 2 13V20C2 20.2652 2.10536 20.5196 2.29289 20.7071C2.48043 20.8946 2.73478 21 3 21H6C6.79565 21 7.55871 20.6839 8.12132 20.1213C8.68393 19.5587 9 18.7956 9 18V16C9 15.2044 8.68393 14.4413 8.12132 13.8787C7.55871 13.3161 6.79565 13 6 13H4C4 10.8783 4.84285 8.84344 6.34315 7.34315C7.84344 5.84285 9.87827 5 12 5C14.1217 5 16.1566 5.84285 17.6569 7.34315C19.1571 8.84344 20 10.8783 20 13H18C17.2044 13 16.4413 13.3161 15.8787 13.8787C15.3161 14.4413 15 15.2044 15 16V18C15 18.7956 15.3161 19.5587 15.8787 20.1213C16.4413 20.6839 17.2044 21 18 21H21C21.2652 21 21.5196 20.8946 21.7071 20.7071C21.8946 20.5196 22 20.2652 22 20V13C22 10.3478 20.9464 7.8043 19.0711 5.92893C17.1957 4.05357 14.6522 3 12 3ZM6 15C6.26522 15 6.51957 15.1054 6.70711 15.2929C6.89464 15.4804 7 15.7348 7 16V18C7 18.2652 6.89464 18.5196 6.70711 18.7071C6.51957 18.8946 6.26522 19 6 19H4V15H6ZM20 19H18C17.7348 19 17.4804 18.8946 17.2929 18.7071C17.1054 18.5196 17 18.2652 17 18V16C17 15.7348 17.1054 15.4804 17.2929 15.2929C17.4804 15.1054 17.7348 15 18 15H20V19Z"--}}
{{--                                fill="white"></path>--}}
{{--                        </svg>--}}
{{--                    </div>--}}
{{--                    <p class="text-rhino-700 text-sm font-semibold font-medium text-center mb-2">Scaune Premium</p>--}}
{{--                    <p class="text-rhino-400 text-sm text-center">Selectați confortul suprem cu scaune premium--}}
{{--                        ajustabile pentru o vizionare de neuitat.</p>--}}
{{--                </div>--}}
{{--                <div class="w-full sm:w-1/2 lg:w-1/4 p-4">--}}
{{--                    <div class="mb-3 mx-auto bg-orange-500 w-12 h-12 rounded-full flex items-center justify-center">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">--}}
{{--                            <path--}}
{{--                                d="M1 12.5V17.5C1 17.7652 1.10536 18.0196 1.29289 18.2071C1.48043 18.3946 1.73478 18.5 2 18.5H3C3 19.2956 3.31607 20.0587 3.87868 20.6213C4.44129 21.1839 5.20435 21.5 6 21.5C6.79565 21.5 7.55871 21.1839 8.12132 20.6213C8.68393 20.0587 9 19.2956 9 18.5H15C15 19.2956 15.3161 20.0587 15.8787 20.6213C16.4413 21.1839 17.2043 21.5 18 21.5C18.7956 21.5 19.5587 21.1839 20.1213 20.6213C20.6839 20.0587 21 19.2956 21 18.5H22C22.2652 18.5 22.5196 18.3946 22.7071 18.2071C22.8946 18.0196 23 17.7652 23 17.5V5.5C23 4.70435 22.6839 3.94129 22.1213 3.37868C21.5587 2.81607 20.7956 2.5 20 2.5H11C10.2043 2.5 9.44129 2.81607 8.87868 3.37868C8.31607 3.94129 8 4.70435 8 5.5V7.5H6C5.53426 7.5 5.07492 7.60844 4.65836 7.81672C4.24179 8.025 3.87944 8.32741 3.6 8.7L1.2 11.9C1.17075 11.9435 1.14722 11.9905 1.13 12.04L1.07 12.15C1.02587 12.2615 1.00216 12.3801 1 12.5ZM17 18.5C17 18.3022 17.0586 18.1089 17.1685 17.9444C17.2784 17.78 17.4346 17.6518 17.6173 17.5761C17.8 17.5004 18.0011 17.4806 18.1951 17.5192C18.3891 17.5578 18.5673 17.653 18.7071 17.7929C18.847 17.9327 18.9422 18.1109 18.9808 18.3049C19.0194 18.4989 18.9996 18.7 18.9239 18.8827C18.8482 19.0654 18.72 19.2216 18.5556 19.3315C18.3911 19.4414 18.1978 19.5 18 19.5C17.7348 19.5 17.4804 19.3946 17.2929 19.2071C17.1054 19.0196 17 18.7652 17 18.5ZM10 5.5C10 5.23478 10.1054 4.98043 10.2929 4.79289C10.4804 4.60536 10.7348 4.5 11 4.5H20C20.2652 4.5 20.5196 4.60536 20.7071 4.79289C20.8946 4.98043 21 5.23478 21 5.5V16.5H20.22C19.9388 16.1906 19.5961 15.9435 19.2138 15.7743C18.8315 15.6052 18.418 15.5178 18 15.5178C17.582 15.5178 17.1685 15.6052 16.7862 15.7743C16.4039 15.9435 16.0612 16.1906 15.78 16.5H10V5.5ZM8 11.5H4L5.2 9.9C5.29315 9.7758 5.41393 9.675 5.55279 9.60557C5.69164 9.53615 5.84475 9.5 6 9.5H8V11.5ZM5 18.5C5 18.3022 5.05865 18.1089 5.16853 17.9444C5.27841 17.78 5.43459 17.6518 5.61732 17.5761C5.80004 17.5004 6.00111 17.4806 6.19509 17.5192C6.38907 17.5578 6.56725 17.653 6.70711 17.7929C6.84696 17.9327 6.9422 18.1109 6.98078 18.3049C7.01937 18.4989 6.99957 18.7 6.92388 18.8827C6.84819 19.0654 6.72002 19.2216 6.55557 19.3315C6.39112 19.4414 6.19778 19.5 6 19.5C5.73478 19.5 5.48043 19.3946 5.29289 19.2071C5.10536 19.0196 5 18.7652 5 18.5ZM3 13.5H8V16.28C7.40983 15.7526 6.63513 15.4797 5.84469 15.5209C5.05425 15.5621 4.31212 15.914 3.78 16.5H3V13.5Z"--}}
{{--                                fill="white"></path>--}}
{{--                        </svg>--}}
{{--                    </div>--}}
{{--                    <p class="text-rhino-700 text-sm font-semibold font-medium text-center mb-2">Rezervare Rapidă</p>--}}
{{--                    <p class="text-rhino-400 text-sm text-center">Procesul nostru optimizat asigură finalizarea--}}
{{--                        rezervării în doar câteva minute.</p>--}}
{{--                </div>--}}
{{--                <div class="w-full sm:w-1/2 lg:w-1/4 p-4">--}}
{{--                    <div class="mb-3 mx-auto bg-orange-500 w-12 h-12 rounded-full flex items-center justify-center">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">--}}
{{--                            <path--}}
{{--                                d="M19.63 3.65C19.5138 3.55602 19.3781 3.48928 19.2327 3.45467C19.0873 3.42006 18.9361 3.41846 18.79 3.45C17.7214 3.67395 16.6183 3.6768 15.5486 3.45839C14.4789 3.23997 13.4653 2.80492 12.57 2.18C12.4026 2.06388 12.2037 2.00165 12 2.00165C11.7963 2.00165 11.5974 2.06388 11.43 2.18C10.5348 2.80492 9.52108 3.23997 8.45137 3.45839C7.38166 3.6768 6.27857 3.67395 5.21001 3.45C5.06394 3.41846 4.91267 3.42006 4.76731 3.45467C4.62194 3.48928 4.48618 3.55602 4.37001 3.65C4.25399 3.74412 4.16053 3.86304 4.0965 3.99802C4.03247 4.133 3.9995 4.28061 4.00001 4.43V11.88C3.99912 13.3138 4.34078 14.727 4.99654 16.002C5.6523 17.277 6.60319 18.3768 7.77001 19.21L11.42 21.81C11.5894 21.9306 11.7921 21.9954 12 21.9954C12.2079 21.9954 12.4106 21.9306 12.58 21.81L16.23 19.21C17.3968 18.3768 18.3477 17.277 19.0035 16.002C19.6592 14.727 20.0009 13.3138 20 11.88V4.43C20.0005 4.28061 19.9675 4.133 19.9035 3.99802C19.8395 3.86304 19.746 3.74412 19.63 3.65ZM18 11.88C18.0008 12.9948 17.7353 14.0936 17.2257 15.085C16.716 16.0765 15.977 16.9319 15.07 17.58L12 19.77L8.93001 17.58C8.02304 16.9319 7.28399 16.0765 6.77435 15.085C6.26472 14.0936 5.99924 12.9948 6.00001 11.88V5.58C8.09643 5.75944 10.196 5.27303 12 4.19C13.804 5.27303 15.9036 5.75944 18 5.58V11.88Z"--}}
{{--                                fill="white"></path>--}}
{{--                        </svg>--}}
{{--                    </div>--}}
{{--                    <p class="text-rhino-700 text-sm font-semibold font-medium text-center mb-2">Oferte Speciale</p>--}}
{{--                    <p class="text-rhino-400 text-sm text-center">Beneficiați periodic de oferte speciale și reduceri la--}}
{{--                        cele mai noi filme.</p>--}}
{{--                </div>--}}
{{--                <div class="w-full sm:w-1/2 lg:w-1/4 p-4">--}}
{{--                    <div class="mb-3 mx-auto bg-orange-500 w-12 h-12 rounded-full flex items-center justify-center">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">--}}
{{--                            <path--}}
{{--                                d="M22 9.66999C21.9368 9.48708 21.822 9.32642 21.6693 9.20749C21.5167 9.08857 21.3328 9.01649 21.14 8.99999L15.45 8.16999L12.9 2.99999C12.8181 2.83092 12.6902 2.68833 12.5311 2.58857C12.3719 2.4888 12.1878 2.43588 12 2.43588C11.8121 2.43588 11.6281 2.4888 11.4689 2.58857C11.3097 2.68833 11.1819 2.83092 11.1 2.99999L8.54998 8.15999L2.85998 8.99999C2.6749 9.0263 2.5009 9.10396 2.35773 9.22415C2.21455 9.34435 2.10794 9.50227 2.04998 9.67999C1.99692 9.85367 1.99216 10.0385 2.03621 10.2147C2.08025 10.3909 2.17144 10.5517 2.29998 10.68L6.42998 14.68L5.42998 20.36C5.39428 20.5475 5.41297 20.7412 5.48385 20.9184C5.55473 21.0956 5.67483 21.2489 5.82998 21.36C5.98119 21.4681 6.15955 21.5319 6.34503 21.5443C6.5305 21.5566 6.71575 21.5171 6.87998 21.43L12 18.76L17.1 21.44C17.2403 21.5192 17.3988 21.5605 17.56 21.56C17.7718 21.5607 17.9784 21.4942 18.15 21.37C18.3051 21.2589 18.4252 21.1056 18.4961 20.9284C18.567 20.7512 18.5857 20.5575 18.55 20.37L17.55 14.69L21.68 10.69C21.8244 10.5677 21.9311 10.4069 21.9877 10.2263C22.0444 10.0458 22.0486 9.85287 22 9.66999ZM15.85 13.67C15.7327 13.7834 15.645 13.9238 15.5944 14.079C15.5439 14.2341 15.532 14.3992 15.56 14.56L16.28 18.75L12.52 16.75C12.3753 16.673 12.2139 16.6327 12.05 16.6327C11.8861 16.6327 11.7247 16.673 11.58 16.75L7.81998 18.75L8.53998 14.56C8.56791 14.3992 8.55609 14.2341 8.50554 14.079C8.45499 13.9238 8.36725 13.7834 8.24998 13.67L5.24998 10.67L9.45998 10.06C9.62198 10.0375 9.77598 9.97553 9.90848 9.87964C10.041 9.78376 10.1479 9.65683 10.22 9.50999L12 5.69999L13.88 9.51999C13.952 9.66683 14.059 9.79376 14.1915 9.88964C14.324 9.98553 14.478 10.0475 14.64 10.07L18.85 10.68L15.85 13.67Z"--}}
{{--                                fill="white"></path>--}}
{{--                        </svg>--}}
{{--                    </div>--}}
{{--                    <p class="text-rhino-700 text-sm font-semibold font-medium text-center mb-2">Suport Clienți</p>--}}
{{--                    <p class="text-rhino-400 text-sm text-center">Echipa noastră de suport este disponibilă pentru a--}}
{{--                        răspunde oricăror întrebări legate de bilete.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    <section class="relative bg-white overflow-hidden">--}}
{{--        <div class="container px-4 mx-auto">--}}
{{--            <div class="flex flex-col lg:flex-row gap-12 justify-between py-16">--}}
{{--                <div class="w-full lg:w-1/2">--}}
{{--                    <div class="max-w-md lg:max-w-lg mx-auto">--}}
{{--                        <img class="shadow-md rounded-2xl"--}}
{{--                             src="{{ \Illuminate\Support\Facades\Vite::asset('resources\images\3.png') }}"--}}
{{--                             alt="">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="w-full lg:w-1/2">--}}
{{--                    <div class="max-w-md lg:max-w-xl mx-auto">--}}
{{--                        <div class="mb-12 space-y-7">--}}
{{--                            <h2 class="text-3xl md:text-4xl xl:text-5xl text-rhino-700 font-semibold mb-3 leading-none font-heading">--}}
{{--                                Cum rezerv online?</h2>--}}
{{--                            <p class="text-rhino-400 text-lg font-normal">Accesați secțiunea Filme, alegeți filmul și--}}
{{--                                ora, selectați locurile și finalizați cumpărarea.</p>--}}
{{--                            <p class="text-rhino-400 text-lg">După finalizarea cumpărării, veți primi biletele pe email--}}
{{--                                sau le puteți accesa în contul dvs.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}


{{--    <div class="py-6">--}}
{{--        <div class="container px-4 mx-auto">--}}
{{--            <h2 class="text-4xl text-center font-heading font-semibold text-rhino-600 tracking-xs mb-14">Toate--}}
{{--                filmele</h2>--}}
{{--            <div class="flex flex-wrap">--}}

{{--                <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">--}}
{{--                    @foreach($movies as $movie)--}}
{{--                        <div class="group">--}}
{{--                            <div--}}
{{--                                class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">--}}
{{--                                <a href="/movie/{{ $movie['id'] }}">--}}
{{--                                    <img src="http://image.tmdb.org/t/p/original/{{ $movie['poster_path'] }}"--}}
{{--                                         alt=""--}}
{{--                                         class=" group-hover:opacity-75">--}}
{{--                                </a>--}}
{{--                            </div>--}}

{{--                            <a href="/movie/{{ $movie['id'] }}">--}}
{{--                                <h3 class="mt-4 text-sm text-gray-700">{{ $movie['title'] }}</h3>--}}
{{--                            </a>--}}

{{--                            @if(!empty($movie['title']))--}}
{{--                                <button class="js-modal-btn" data-video-id="{{ $movie['title'] }}">--}}
{{--                                <span class="text-md text-xl font-medium text-indigo-500 hover:text-indigo-300"--}}
{{--                                      data-tooltip="View trailer" data-tooltip-position="top">--}}
{{--                                    <i class="fa-brands fa-youtube"></i>--}}
{{--                                </span>--}}
{{--                                </button>--}}
{{--                            @endif--}}

{{--                            <span class="text-md text-xl font-medium text-red-500 hover:text-red-300"--}}
{{--                                  data-tooltip="Add to wishlist" data-tooltip-position="top">--}}
{{--                                <i class="fa-regular fa-heart"></i>--}}
{{--                        </span>--}}

{{--                        </div>--}}

{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

</x-app-layout>
