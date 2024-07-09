<x-app-layout>

    {{ Breadcrumbs::render('order-items', $order) }}

    <section class="overflow-hidden py-12">
        <div class="container mx-auto px-4">

            <div class="bg-purple-100 rounded-lg py-12 px-8 mx-auto">

                <p class="uppercase text-rhino-300 text-xs font-bold tracking-widest mb-1 text-center">{{ __('Contul meu') }}</p>
                <h1 class="font-heading font-semibold text-4xl text-rhino-700 text-center mb-8">{{ __('Cosul de cumparaturi') }}</h1>

                @if(!empty($order->items))
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                        <tr class="text-center font-semibold">
                            <td class="px-6 py-2 text-sm font-medium text-gray-800 whitespace-nowrap">ID</td>
                            <td colspan="2" class="px-6 py-2 text-sm text-gray-800 whitespace-nowrap">Film</td>
                            <td class="px-6 py-2 text-sm text-gray-800 whitespace-nowrap">Data si ora</td>
                            <td class="px-6 py-2 text-sm text-gray-800 whitespace-nowrap">Loc</td>
                            <td class="px-6 py-2 text-sm text-gray-800 whitespace-nowrap">Pret</td>
                            <td></td>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                        @foreach ($cart->cartItems as $cartItem)
                            <tr class="text-center">
                                <td class="px-6 py-2 text-sm font-medium text-gray-800 whitespace-nowrap">
                                    {{ $loop->index+1 }}
                                </td>
                                <td class="px-6 py-2 text-sm text-gray-800 whitespace-nowrap">
                                    <img src="{{ $cartItem->movieHour->movie->poster_path }}"
                                         alt="{{ $cartItem->movieHour->movie->title }}" class="w-12 ">
                                </td>

                                <td class="px-6 py-2 text-sm text-gray-800 whitespace-nowrap  text-left">
                                    {{ $cartItem->movieHour->movie->title }}
                                </td>

                                <td class="px-6 py-2 text-sm text-gray-800 whitespace-nowrap">
                                    {{ \Carbon\Carbon::parse($cartItem->movieHour->hour)->format('d.m H:i') }}
                                </td>

                                <td class="px-6 py-2 text-sm text-gray-800 whitespace-nowrap">
                                    {{ $cartItem->seat }}
                                </td>

                                <td class="px-6 py-2 text-sm text-gray-800 whitespace-nowrap">
                                    {{ $cartItem->price }} {{ config('app.currency') }}
                                </td>

                                <td class="px-6 py-2 text-sm font-medium text-right whitespace-nowrap">
                                    <form action="{{ route('cart.remove',$cartItem->id) }}" method="POST"
                                          onsubmit="return confirm('{{ trans('Esti sigur ?') }}');">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <x-danger-button><i class="fa fa-trash"></i></x-danger-button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        <tr class="text-center font-semibold">
                            <td colspan="5" class="px-6 py-8 text-sm font-medium text-gray-800 whitespace-nowrap">
                                Total
                            </td>

                            <td class="text-center px-6 py-8 text-sm text-gray-800 whitespace-nowrap">
                                {{ $total }} {{ config('app.currency') }}
                            </td>

                            <td class="px-6 py-8 text-sm font-medium text-right whitespace-nowrap">

                            </td>
                        </tr>
                        </tbody>
                    </table>
            </div>
            <div class="flex justify-end flex-wrap gap-4 py-3">
                <form action="{{ route('cart.empty',$cart->id) }}" method="POST"
                      onsubmit="return confirm('{{ trans('Esti sigur ?') }}');">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button class="bg-purple-300 py-3 px-4 rounded-sm text-white text-center hover:bg-purple-600 transition duration-200">{{ __('Goleste cos') }}</button>
                </form>

                <a class="bg-purple-500 py-3 px-4 rounded-sm text-white text-center hover:bg-purple-600 transition duration-200" href="#">{{ __('Mergi la casa') }}</a>
            </div>
            @else
                <h3 class="text-rhino-700 text-center mb-8">{{ __('Cosul de cumparaturi e gol') }}</h3>
                <div class="flex justify-center flex-wrap gap-4 py-3">
                    <a class="bg-purple-500 py-3 px-4 rounded-sm text-white text-center hover:bg-purple-600 transition duration-200" href="{{ route('moviehours.index') }}">{{ __('Vezi programul cu filme') }}</a>
                </div>
            @endif
        </div>
    </section>
</x-app-layout>
