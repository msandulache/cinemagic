<x-app-layout>

    {{ Breadcrumbs::render('booking') }}

    <section class="overflow-hidden py-12">
        <div class="container mx-auto px-4">

            @if ($message = Session::get('success'))
                <div class="p-4 mb-3 text-center border border-green-400 bg-green-100 rounded max-w-lg mx-auto">
                    <p class="text-green-800">{{ $message }}</p>
                </div>
            @endif

            <div class="bg-purple-100 rounded-lg py-12 px-8 mx-auto">

                <h1 class="font-heading font-semibold text-4xl text-rhino-700 text-center mb-8">{{ __('Rezervare bilete') }}</h1>

                @if(!empty($booking))
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                        <tr class="text-center font-semibold">
                            <td class="px-6 py-2 text-sm font-medium text-gray-800 whitespace-nowrap">ID</td>
                            <td colspan="2" class="px-6 py-2 text-sm text-gray-800 whitespace-nowrap">Film</td>
                            <td class="px-6 py-2 text-sm text-gray-800 whitespace-nowrap">Bilet</td>
                            <td class="px-6 py-2 text-sm text-gray-800 whitespace-nowrap">Pret</td>
                            <td></td>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                        @foreach ($booking->seats as $seat)
                            <tr class="text-center">
                                <td class="px-6 py-2 text-sm font-medium text-gray-800 whitespace-nowrap">
                                    {{ $loop->index+1 }}
                                </td>
                                <td class="px-6 py-2 text-sm text-gray-800 whitespace-nowrap">
                                    <img src="{{ $seat->movieHour->movie->poster_path }}"
                                         alt="{{ $seat->movieHour->movie->title }}" class="w-12 ">
                                </td>

                                <td class="px-6 py-2 text-sm text-gray-800 whitespace-nowrap  text-left">
                                    {{ $seat->movieHour->movie->title }}
                                </td>

                                <td class="px-6 py-2 text-sm text-gray-800 whitespace-nowrap">
                                    <div class="sc-ticket">
                                        <div class="sc-ticket-stripes"></div>
                                        <div class="sc-ticket-seat-label">{{ $seat->seat }}</div>
                                        <div class="sc-ticket-seat-type">{{ \Carbon\Carbon::parse($seat->movieHour->hour)->format('d.m H:i') }}</div>
                                        <div class="sc-ticket-stripes"></div>
                                    </div>
                                </td>

                                <td class="px-6 py-2 text-sm text-gray-800 whitespace-nowrap">
                                    {{ $seat->price }} {{ config('app.currency') }}
                                </td>

                                <td class="px-6 py-2 text-sm font-medium text-right whitespace-nowrap">
                                    <form action="{{ route('seats.destroy',$seat->id) }}" method="POST">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <x-danger-button class="delete-confirmation"><i class="fa fa-trash"></i>
                                        </x-danger-button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        <tr class="text-center font-semibold">
                            <td colspan="4" class="px-6 py-8 text-sm font-medium text-gray-800 whitespace-nowrap">
                                Total
                            </td>

                            <td class="text-center px-6 py-8 text-sm text-gray-800 whitespace-nowrap">
                                {{ $booking->seats->sum('price') }} {{ config('app.currency') }}
                            </td>

                            <td class="px-6 py-8 text-sm font-medium text-right whitespace-nowrap">

                            </td>
                        </tr>
                        </tbody>
                    </table>
            </div>
            <div class="flex justify-end flex-wrap gap-4 py-3">
                <form action="{{ route('bookings.destroy',$booking->id) }}" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button
                        class="delete-confirmation bg-purple-300 py-3 px-4 rounded-sm text-white text-center hover:bg-purple-600 transition duration-200">{{ __('Elimina rezervarea') }}</button>
                </form>

                <form action="{{ route('stripe.checkout') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button
                        class="bg-purple-500 py-3 px-4 rounded-sm text-white text-center hover:bg-purple-600 transition duration-200">
                        <i class="fa fa-credit-card" aria-hidden="true"></i> {{ __('Plateste') }}
                    </button>
                </form>

            </div>
            @else
                <h3 class="text-rhino-700 text-center mb-8">{{ __('Cosul de cumparaturi e gol') }}</h3>
                <div class="flex justify-center flex-wrap gap-4 py-3">
                    <a class="bg-purple-500 py-3 px-4 rounded-sm text-white text-center hover:bg-purple-600 transition duration-200"
                       href="{{ route('menu.moviehours') }}">{{ __('Vezi programul cu filme') }}</a>
                </div>
            @endif
        </div>
    </section>
</x-app-layout>
