<x-app-layout>

    {{ Breadcrumbs::render('order-history') }}

    <section class="overflow-hidden py-12">
        <div class="container mx-auto px-4">

            <div class="bg-purple-100 rounded-lg py-12 px-8 mx-auto">

                <p class="uppercase text-rhino-300 hover:text-rhino-400 text-xs font-bold tracking-widest mb-1 text-center">
                    <a href="{{ route('profile.edit') }}">{{ __('Contul meu') }}</a>
                </p>
                <h1 class="font-heading font-semibold text-4xl text-rhino-700 text-center mb-8">{{ __('Istoric comenzi') }}</h1>

                @if(!empty($orders))
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                        <tr class="text-center font-semibold">
                            <td class="px-6 py-2 text-sm font-medium text-gray-800 whitespace-nowrap">ID</td>
                            <td class="px-6 py-2 text-sm text-gray-800 whitespace-nowrap">Nume beneficiar</td>
                            <td class="px-6 py-2 text-sm text-gray-800 whitespace-nowrap">E-mail</td>
                            <td class="px-6 py-2 text-sm text-gray-800 whitespace-nowrap">Telefon</td>
                            <td class="px-6 py-2 text-sm text-gray-800 whitespace-nowrap">Bilete</td>
                            <td class="px-6 py-2 text-sm text-gray-800 whitespace-nowrap">Status</td>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                        @foreach ($orders as $order)
                            <tr class="text-center">
                                <td class="px-6 py-2 text-sm text-gray-800 whitespace-nowrap">
                                    {{ $loop->index+1 }}
                                </td>

                                <td class="px-6 py-2 text-sm text-gray-800 whitespace-nowrap">
                                    {{ $order->customer_name }}
                                </td>

                                <td class="px-6 py-2 text-sm text-gray-800 whitespace-nowrap">
                                    {{ $order->customer_email }}
                                </td>

                                <td class="px-6 py-2 text-sm text-gray-800 whitespace-nowrap">
                                    {{ $order->customer_phone }}
                                </td>

                                <td class="px-6 py-2 text-sm hover:text-gray-800 text-indigo-500 whitespace-nowrap">
                                    <a href="{{ route('order.show', $order->id) }}">Vezi bilete</a>
                                </td>

                                <td class="px-6 py-2 text-sm text-gray-800 whitespace-nowrap">
                                    {{ $order->status->name }}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
            </div>
            @else
                <h3 class="text-rhino-700 text-center mb-8">{{ __('Nu ai inca comenzi. Intra pe program si vezi oferta noastra') }}</h3>
                <div class="flex justify-center flex-wrap gap-4 py-3">
                    <a class="bg-purple-500 py-3 px-4 rounded-sm text-white text-center hover:bg-purple-600 transition duration-200"
                       href="{{ route('moviehours.index') }}">{{ __('Vezi programul cu filme') }}</a>
                </div>
            @endif
        </div>
    </section>
</x-app-layout>
