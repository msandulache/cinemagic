<x-app-layout>
    <div>
        {{ Breadcrumbs::render('movie', $movie) }}

        <section class="py-12 md:py-24 lg:py-16">
            <div class="container px-4 mx-auto">
                <div class="max-w-lg mx-auto lg:max-w-6xl">
                    <div class="flex flex-wrap mb-8 -mx-4">
                        <div class="w-full lg:w-1/2 p-4">
                            <div class="lg:max-w-md">
                                <img id="main-image" class="block w-full rounded-xl mb-4"
                                     src="{{ config('services.tmdb.original_image') }}{{ $movie['poster_path'] }}"
                                     alt="">
                            </div>
                        </div>
                        <div class="w-full lg:w-1/2 p-4">
                            <div class="max-w-lg lg:ml-auto">
                                <h1 class="text-rhino-700 font-semibold text-4xl mb-8 font-heading">{{ $movie['title'] }}</h1>

                                <p class="text-sm text-rhino-500 mb-6"><strong>{{ __('Titlu original') }}: </strong>{{ $movie['title'] }}</p>

                                <p class="text-sm text-rhino-500 mb-6"><strong>{{ __('Genuri') }}: </strong>
                                    @foreach($movie->genres as $genre)
                                        <span>{{ $genre['name'] }}</span>@if(!$loop->last), @endif
                                    @endforeach
                                </p>

                                <p class="text-sm text-rhino-500 mb-6"><strong>{{ __('Durata') }}: </strong>{{ $movie['runtime'] }} {{ __('min') }}</p>

                                <p class="text-sm text-rhino-500 mb-6"><strong>{{ __('Actori') }}: </strong>
                                    @foreach($movie->actors as $actor)
                                        <span>{{ $actor['name'] }}</span>@if(!$loop->last), @endif
                                    @endforeach
                                </p>

                                <p class="text-sm text-rhino-500 mb-6 leading-7"><strong>{{ __('Sinopsis') }}: </strong>{{ $movie['overview'] }}</p>

                                <div class="flex gap-1 mb-6">
                                    <h2 class="text-4xl font-semibold text-rhino-700">{{ number_format($price, 2) }}</h2>
                                    <p class="font-extrabold text-sm">{{ config('app.currency') }}</p>
                                </div>
                                <div class="flex -mx-2 flex-wrap mb-10">
                                    <div class="w-full xs:w-5/12 md:w-5/12 px-2 mb-4 xs:mb-0"><a
                                            class="block w-full px-3 py-4 rounded-sm text-center text-white text-sm font-medium bg-purple-500 hover:bg-purple-600 transition duration-200 ease-in-out duration-150"
                                            href="/seat/{{ $movie['id'] }}">
                                            <i class="fa fa-ticket"></i> {{ __('Cumpara bilete') }}</a></div>

                                    @if(!empty($movie['trailer']))
                                        <div class="w-full xs:w-5/12 md:w-5/12 px-2 mb-4 xs:mb-0">
                                            <button class="js-modal-btn block w-full px-3 py-4 rounded-sm text-center text-white text-sm font-medium bg-orange-500 hover:bg-orange-600 transition duration-200 ease-in-out duration-150"
                                                    data-video-id="{{ $movie['trailer'] }}">
                                                <i class="fa fa-play-circle-o"></i> {{ __('Vezi trailer') }}
                                            </button>
                                        </div>
                                    @endif

                                    <div class="w-full xs:w-3/12 md:w-2/12 px-2">

                                        <form style="height: 51px"
                                              action="{{ route('favorite.add', $movie['id']) }}" method="POST"
                                              enctype="multipart/form-data">
                                            @csrf

                                            <button type="submit"
                                                    class="border border-purple-600 rounded-sm text-purple-500 py-4 px-6 xs:px-1 inline-flex h-full xs:w-full items-center justify-center hover:bg-purple-500 hover:text-white transition duration-200"
                                                    href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17"
                                                     viewbox="0 0 16 17" fill="none">
                                                    <g clip-path="url(#clip0_1925_4216)">
                                                        <path
                                                            d="M14.1942 3.24105C13.8537 2.90039 13.4494 2.63015 13.0045 2.44578C12.5595 2.2614 12.0826 2.1665 11.6009 2.1665C11.1192 2.1665 10.6423 2.2614 10.1973 2.44578C9.75236 2.63015 9.34807 2.90039 9.00757 3.24105L8.3009 3.94772L7.59423 3.24105C6.90644 2.55326 5.97359 2.16686 5.0009 2.16686C4.02821 2.16686 3.09536 2.55326 2.40757 3.24105C1.71977 3.92885 1.33337 4.8617 1.33337 5.83439C1.33337 6.80708 1.71977 7.73993 2.40757 8.42772L3.11423 9.13439L8.3009 14.3211L13.4876 9.13439L14.1942 8.42772C14.5349 8.08722 14.8051 7.68293 14.9895 7.23796C15.1739 6.79298 15.2688 6.31605 15.2688 5.83439C15.2688 5.35273 15.1739 4.87579 14.9895 4.43082C14.8051 3.98584 14.5349 3.58156 14.1942 3.24105V3.24105Z"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                    </g>
                                                    <defs>
                                                        <clippath id="clip0_1925_4216">
                                                            <rect width="16" height="16" fill="white"
                                                                  transform="translate(0 0.166504)"></rect>
                                                        </clippath>
                                                    </defs>
                                                </svg>
                                            </button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>

</x-app-layout>
