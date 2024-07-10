<x-app-layout>

    {{ Breadcrumbs::render('wishlist') }}

    <section class="overflow-hidden py-12">
        <div class="container mx-auto px-4">

            @if ($message = Session::get('success'))
                <div class="p-4 mb-3 text-center border border-green-400 bg-green-100 rounded max-w-lg mx-auto">
                    <p class="text-green-800">{{ $message }}</p>
                </div>
            @endif

            <div class="bg-purple-100 rounded-lg py-12 px-8 mx-auto">

                <p class="uppercase text-rhino-300 text-xs font-bold tracking-widest mb-1 text-center">{{ __('Favorite') }}</p>
                <h1 class="font-heading font-semibold text-4xl text-rhino-700 text-center mb-8">{{ __('Lista de dorinte') }}</h1>

                <table class="min-w-full divide-y divide-gray-200">
                    <tbody class="divide-y divide-gray-200">
                    @foreach ($movies as $movie)
                        <tr>
                            <td class="sm:hidden px-6 py-2 text-sm font-medium text-gray-800 whitespace-nowrap">
                                {{ $loop->index+1 }}
                            </td>
                            <td class="px-6 py-2 text-sm text-gray-800 whitespace-nowrap">
                                <a href="{{ route('movies.show', ['movie' => $movie]) }}">
                                    <img src="{{ $movie->poster_path }}" alt="{{ $movie->title }}" class="w-12"/>
                                </a>
                            </td>
                            <td class="px-6 py-2 text-sm text-gray-800 hover:text-purple-700 whitespace-nowrap">
                                <a href="{{ route('movies.show', ['movie' => $movie]) }}">
                                    {{ $movie->title }}
                                </a>
                            </td>

                            <td class="px-6 py-2 text-sm font-medium text-right whitespace-nowrap">
                                <form action="{{ route('favorite.remove',$movie->id) }}" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <x-danger-button class="delete-confirmation"><i class="fa fa-trash"></i></x-danger-button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</x-app-layout>
