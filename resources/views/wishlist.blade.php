<x-app-layout>

    {{ Breadcrumbs::render('wishlist') }}

    <section class="overflow-hidden py-12">
        <div class="container mx-auto px-4">

            @if ($message = Session::get('success'))
                <div class="p-4 mb-3 text-center border border-green-400 bg-green-100 rounded max-w-lg mx-auto">
                    <p class="text-green-800">{{ $message }}</p>
                </div>
            @endif

            <div class="bg-purple-100 rounded-lg py-12 px-8 max-w-lg mx-auto">

                <p class="uppercase text-rhino-300 text-xs font-bold tracking-widest mb-1 text-center">{{ __('Favorite') }}</p>
                <h1 class="font-heading font-semibold text-4xl text-rhino-700 text-center mb-8">{{ __('Lista de dorinte') }}</h1>

                <table class="min-w-full divide-y divide-gray-200">
                    <tbody class="divide-y divide-gray-200">
                    @foreach ($movies as $movie)
                        <tr>
                            <td class="px-6 py-2 text-sm font-medium text-gray-800 whitespace-nowrap">
                                {{ $movie->id }}
                            </td>
                            <td class="px-6 py-2 text-sm text-gray-800 whitespace-nowrap">
                                <img src="http://image.tmdb.org/t/p/original/{{ $movie->poster_path }}"
                                     alt="{{ $movie->title }}" class="w-12 ">

                            </td>
                            <td class="px-6 py-2 text-sm text-gray-800 whitespace-nowrap">
                                {{ $movie->title }}
                            </td>

                            <td class="px-6 py-2 text-sm font-medium text-right whitespace-nowrap">
                                <form action="{{ route('favorite.remove',$movie->id) }}" method="POST"
                                      onsubmit="return confirm('{{ trans('Esti sigur ?') }}');"
                                      style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <x-danger-button>{{ __('Sterge') }}</x-danger-button>
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


{{--<x-app-layout>--}}
{{--    <x-slot name="header">--}}
{{--        <h2 class="text-xl font-semibold leading-tight text-gray-800">--}}
{{--            {{ __('wishlist') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}

{{--    <div class="py-12">--}}
{{--        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">--}}
{{--            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">--}}
{{--                <div class="p-6 bg-white border-b border-gray-200">--}}
{{--                    Wishlist List--}}
{{--                    @if ($message = Session::get('success'))--}}
{{--                        <div class="p-4 mb-3 bg-green-400 rounded">--}}
{{--                            <p class="text-green-800">{{ $message }}</p>--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--                    <div class="flex flex-col">--}}
{{--                        <div class="overflow-x-auto">--}}
{{--                            <div class="p-1.5 w-full inline-block align-middle">--}}
{{--                                <div class="overflow-hidden border rounded-lg">--}}
{{--                                    <table class="min-w-full divide-y divide-gray-200">--}}
{{--                                        <thead class="bg-gray-50">--}}
{{--                                        <tr>--}}
{{--                                            <th--}}
{{--                                                scope="col"--}}
{{--                                                class="px-6 py-3 text-xs font-bold text-center text-gray-500 uppercase"--}}
{{--                                            >--}}
{{--                                                ID--}}
{{--                                            </th>--}}
{{--                                            <th--}}
{{--                                                scope="col"--}}
{{--                                                class="px-6 py-3 text-xs font-bold text-center text-gray-500 uppercase"--}}
{{--                                            >--}}
{{--                                                Product Name--}}
{{--                                            </th>--}}
{{--                                            <th--}}
{{--                                                scope="col"--}}
{{--                                                class="px-6 py-3 text-xs font-bold text-center text-gray-500 uppercase"--}}
{{--                                            >--}}
{{--                                                Price--}}
{{--                                            </th>--}}
{{--                                            <th--}}
{{--                                                scope="col"--}}
{{--                                                class="px-6 py-3 text-xs font-bold text-center text-gray-500 uppercase"--}}
{{--                                            >--}}
{{--                                                Image--}}
{{--                                            </th>--}}
{{--                                            <th--}}
{{--                                                scope="col"--}}
{{--                                                class="px-6 py-3 text-xs font-bold text-center text-gray-500 uppercase"--}}
{{--                                            >--}}
{{--                                                Delete--}}
{{--                                            </th>--}}
{{--                                        </tr>--}}
{{--                                        </thead>--}}
{{--                                        <tbody class="divide-y divide-gray-200">--}}
{{--                                        @foreach ($movies as $movie)--}}


{{--                                            <tr>--}}
{{--                                                <td--}}
{{--                                                    class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap"--}}
{{--                                                >--}}
{{--                                                    {{ $movie->id }}--}}
{{--                                                </td>--}}
{{--                                                <td--}}
{{--                                                    class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap"--}}
{{--                                                >--}}
{{--                                                    {{ $movie->title }}--}}

{{--                                                </td>--}}
{{--                                                <td--}}
{{--                                                    class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap"--}}
{{--                                                >--}}
{{--                                                    {{ $movie->id }}--}}

{{--                                                </td>--}}
{{--                                                <td--}}
{{--                                                    class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap"--}}
{{--                                                >--}}
{{--                                                    <img src="http://image.tmdb.org/t/p/original/{{ $movie->poster_path }}" alt="{{ $movie->title }}" class="w-12 ">--}}

{{--                                                </td>--}}

{{--                                                <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">--}}
{{--                                                    <form action="{{ route('favorite.remove',$movie->id) }}" method="POST"--}}
{{--                                                          onsubmit="return confirm('{{ trans('Esti sigur ?') }}');"--}}
{{--                                                          style="display: inline-block;">--}}
{{--                                                        <input type="hidden" name="_method" value="DELETE">--}}
{{--                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">--}}

{{--                                                        <x-danger-button>{{ __('Sterge') }}</x-danger-button>--}}
{{--                                                    </form>--}}
{{--                                                </td>--}}
{{--                                            </tr>--}}
{{--                                        @endforeach--}}
{{--                                        </tbody>--}}
{{--                                    </table>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}


{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</x-app-layout>--}}
