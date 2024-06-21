<div class="group">
    <div
        class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
        <a href="{{ route('movies.show', ['movie' => $movie]) }}">
            <img src="http://image.tmdb.org/t/p/original/{{ $movie['poster_path'] }}"
                 alt=""
                 class=" group-hover:opacity-75">
        </a>
    </div>

    <div class="flex justify-between mt-2">

        <div>
            <a href="{{ route('movies.show', ['movie' => $movie]) }}">
                <p class="py-2 text-rhino-700">{{ $movie['title'] }}</p>
            </a>
        </div>
        <div style="min-width: 80px;">
            @if(!empty($movie['title']))
                <button class="js-modal-btn" data-video-id="{{ $movie['title'] }}">
                        <span class="inline-block py-1 text-xl text-rhino-700 font-bold bg-white uppercase rounded-full tracking-wider"
                              data-tooltip="View trailer" data-tooltip-position="top">
                            <i class="fa fa-youtube-play"></i>
                        </span>
                </button>
            @endif

{{--                <span class="inline-block py-1 text-xl text-rhino-700 font-bold bg-white uppercase rounded-full tracking-wider p-2 text-purple-700 hover:text-red-600"--}}
{{--                  data-tooltip="Add to wishlist" data-tooltip-position="top">--}}
{{--                    <i class="fa fa-heart"></i>--}}
{{--                </span>--}}

                @auth()
                    <form action="{{ route('favorite.add', $movie['id']) }}" class="inline-block" method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        <button type="submit">
                            <i class="fa fa-heart text-purple-700 hover:text-red-600 text-xl"></i>
                        </button>
                    </form>
                @endauth

            <span class="inline-block py-1 text-xl text-rhino-700 font-bold bg-white uppercase rounded-full tracking-wider"
                  data-tooltip="Add to wishlist" data-tooltip-position="top">
                    <i class="fa fa-ticket"></i>
                </span>
        </div>
    </div>





</div>
