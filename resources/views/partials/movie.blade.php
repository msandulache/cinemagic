<div class="group">
    <div
        class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
        <a href="{{ route('movies.show', ['movie' => $movie]) }}">
            <img src="{{ $movie->poster_path }}"
                 alt="{{ $movie->title }}"
                 class="hover:opacity-75 transition ease-in-out duration-1">
        </a>
    </div>

    <div class="mt-2 text-center">
        <div>
            <a href="{{ route('movies.show', ['movie' => $movie]) }}">
                <p class="text-rhino-700 hover:text-purple-700">{{ $movie->title }}</p>
            </a>
        </div>
        <div class="text-center">
            @if(!empty($movie->trailer))
                <button class="js-modal-btn" data-video-id="{{ $movie->trailer }}">
                    <i class="fa fa-play-circle-o text-purple-700 hover:text-purple-500 text-xl"></i>
                </button>
            @endif

            @auth()
                <form action="{{ route('favorite.add', $movie->id) }}" class="inline-block" method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    <button type="submit">
                        <i class="fa fa-heart text-purple-700 hover:text-red-600 text-xl"></i>
                    </button>
                </form>
            @endauth
        </div>

    </div>

</div>
