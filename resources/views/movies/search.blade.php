<x-app-layout>

    {{ Breadcrumbs::render('search') }}

    <div class="py-6">
        <div class="container px-4 mx-auto">
            <h3 class="text-2xl text-center font-heading font-semibold text-rhino-600 tracking-xs mb-14 mt-8">
                @if(count($movies) > 1)
                    {{ __('Am gasit :filme filme dupa cautarea: \':search\'', ['filme' => count($movies), 'search' => $search]) }}
                @elseif(count($movies) == 1)
                    {{ __('Am gasit 1 film dupa cautarea: \':search\'', ['search' => $search]) }}
                @else
                    {{ __('Ne pare rau, nu am gasit niciun film dupa cautarea: \':search\'', ['search' => $search]) }}
                @endif
            </h3>
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
