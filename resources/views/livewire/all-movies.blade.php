<div wire:init="loadAllMovies">
    <div class="py-6">
        <div class="container px-4 mx-auto">
            <h2 class="text-4xl text-center font-heading font-semibold text-rhino-600 tracking-xs mb-14 mt-8">Toate
                filmele</h2>
            <div class="flex flex-wrap">

                <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                    @foreach($allMovies as $movie)
                        @include('partials.movie', ['movie' => $movie])
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
