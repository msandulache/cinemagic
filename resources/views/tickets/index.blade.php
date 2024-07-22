<x-app-layout>

    {{ Breadcrumbs::render('my-tickets') }}

    <section class="py-12">
        <div class="container px-4 mx-auto">
            <h1 class="font-heading text-rhino-700 text-center text-4xl font-semibold mb-12">{{ __('Biletele mele') }}</h1>
            @forelse($orders as $order)
                <div class="bg-white border border-coolGray-200 rounded-xl shadow-md mb-6">
                    @forelse($order->tickets as $ticket)
                        <div class="p-6 border-b border-gray-100">
                            <a href="{{ route('tickets.show', $ticket) }}">
                                <div class="flex items-center flex-wrap -mx-6">
                                    <div class="w-full md:w-auto px-4 mb-6 md:mb-0">
                                        <div class="bg-gray-100 w-20 h-20 rounded-lg flex items-center justify-center">
                                            <img src="{{ $ticket->movieHour->movie->poster_path }}"
                                                 alt="{{ $ticket->movieHour->movie->title }}">
                                        </div>
                                    </div>
                                    <div class="w-full md:w-2/3 xl:w-5/6 px-4 flex-grow">
                                        <div
                                            class="flex flex-col xs:flex-row flex-wrap xs:items-center justify-between gap-4 mb-2">
                                            <h2 class="text-rhino-800 font-semibold">{{ $ticket->movieHour->movie->title }}</h2>
                                            @if($ticket->movieHour->hour >= now())
                                                <p
                                                    class="mb-4 inline-block py-1 px-3 rounded-xl bg-green-100 uppercase text-green-500 text-xs font-bold tracking-widest">
                                                    Activ
                                                </p>
                                            @else
                                                <p
                                                    class="mb-4 inline-block py-1 px-3 rounded-xl bg-orange-100 uppercase text-orange-500 text-xs font-bold tracking-widest">
                                                    Expirat
                                                </p>
                                            @endif
                                        </div>
                                        <div
                                            class="flex flex-col xs:flex-row flex-wrap xs:items-center justify-between gap-4">
                                            <div class="flex flex-wrap items-center gap-3">
                                                <p class="text-rhino-300 text-sm">{{ Carbon\Carbon::parse($ticket->movieHour->hour)->format('d.m H:i') }}</p>
                                                <div class="w-px h-3 bg-rhino-200"></div>
                                                <p class="text-rhino-300 text-sm">{{ $ticket->seat }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @empty
                        Nu sunt bilete ha ha ha
                    @endforelse
                </div>
            @empty
                Ciu ciu comenzi ..ia si comanda bre..
            @endforelse
        </div>
    </section>

</x-app-layout>
