<div class="group">

    <div>
        <p class="text-rhino-700 text-center">{{ \Carbon\Carbon::parse($movieHour->hour)->format('d.m H:i') }}</p>
    </div>

    <div
        class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
        <a href="{{ route('cinema.movie', ['movie' => $movieHour->movie]) }}">
            <img src="{{ $movieHour->movie->poster_path }}"
                 alt="{{ $movieHour->movie->title }}"
                 class="hover:opacity-75 transition ease-in-out duration-1">
        </a>
    </div>

    <div class="mt-2 text-center">
        <div>
            <a href="{{ route('cinema.movie', ['movie' => $movieHour->movie]) }}">
                <p class="text-rhino-700 hover:text-purple-700">{{ $movieHour->movie->title }}</p>
            </a>
        </div>
        <div class="text-center">
            @if(!empty($movieHour->movie->trailer))
                <button class="js-modal-btn" data-video-id="{{ $movieHour->movie->trailer }}">
                    <i class="fa fa-play-circle-o text-purple-700 hover:text-purple-500 text-xl"></i>
                </button>
            @endif

            @auth()
                <form action="{{ route('favorites.store', $movieHour->movie) }}" class="inline-block" method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    <button type="submit">
                        <i class="fa fa-heart text-red-600 hover:text-red-500 text-xl"></i>
                    </button>
                </form>
            @endauth

            <button id="buyBtn"
                    class="text-orange-500 hover:text-orange-400 cursor-pointer inline-block py-1 text-xl font-bold bg-white uppercase rounded-full tracking-wider"
                    onclick="window.location.href = '/seats/{{ $movieHour->id }}'">
                <i class="fa fa-ticket"></i>
            </button>
        </div>

    </div>

</div>
