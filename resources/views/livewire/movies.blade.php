<div wire:init="loadMovies">

    <div class="py-6">
        <div class="container px-4 mx-auto">
            <h2 class="text-4xl text-center font-heading font-semibold text-rhino-600 tracking-xs mb-14">{{ __('Filmele de azi') }}</h2>
            <div class="flex flex-wrap">

                <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                    @forelse($movies as $movie)
                        @include('partials.movie', ['movie' => $movie])
                    @empty
                        <div>
                            <i class="fa fa-spinner fa-spin" aria-hidden="true"></i>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
