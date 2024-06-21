<x-app-layout>

    {{ Breadcrumbs::render('search') }}

    <div class="py-6">
        <div class="container px-4 mx-auto">
            <h2 class="text-4xl text-center font-heading font-semibold text-rhino-600 tracking-xs mb-14 mt-8">
                @if(count($movies) > 1)
                    {{ __('Am gasit :filme filme', ['filme' => count($movies)]) }}
                @elseif(count($movies) == 1)
                    {{ __('Am gasit :filme film', ['filme' => count($movies)]) }}
                @else
                    {{ __('Ne pare rau, nu am gasit niciun film') }}
                @endif
            </h2>
            <div class="flex flex-wrap">

                <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                    @foreach($movies as $movie)
                        @include('partials.movie', ['movie' => $movie])
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
