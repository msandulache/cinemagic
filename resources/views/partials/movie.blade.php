<div class="group">
    <div
        class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
        <a href="{{ route('movies.show', ['movie' => $movie]) }}">
            <img src="http://image.tmdb.org/t/p/original/{{ $movie['poster_path'] }}"
                 alt="{{ $movie['title'] }}"
                 class="hover:opacity-75 transition ease-in-out duration-1">
        </a>
    </div>

    <div class="flex justify-between mt-2">
        <div>
            <a href="{{ route('movies.show', ['movie' => $movie]) }}">
                <p class="py-2 text-rhino-700 hover:text-purple-700">{{ $movie['title'] }}</p>
            </a>
        </div>
        <div >
            @if(!empty($movie['trailer']))
                <button class="js-modal-btn" data-video-id="{{ $movie['trailer'] }}">
                    <i class="fa fa-play-circle-o text-purple-700 hover:text-purple-500 text-xl"></i>
                </button>
            @endif

            @auth()
                <form action="{{ route('favorite.add', $movie['id']) }}" class="inline-block" method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    <button type="submit">
                        <i class="fa fa-heart text-purple-700 hover:text-red-600 text-xl"></i>
                    </button>
                </form>
            @endauth

            <span class="text-orange-500 hover:text-orange-400 cursor-pointer inline-block py-1 text-xl font-bold bg-white uppercase rounded-full tracking-wider">
                <i class="fa fa-ticket"></i>
            </span>
        </div>
    </div>


</div>
