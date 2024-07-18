<x-app-layout>

    {{ Breadcrumbs::render('contact') }}

    <section class="overflow-hidden py-12">
        <div class="container mx-auto px-4">

            <div class="rounded-lg py-12 px-8 max-w-6xl mx-auto text-gray-800">

                <div class="container px-4 mx-auto">
                    <div class="rounded-xl border border-coolGray-200 shadow-md py-16 px-1 sm:px-8 lg:px-24">
                        <div class="flex flex-wrap items-center justify-between gap-4 mb-4">
                            <div>
                                <img class="invoice-logo"
                                     src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/logo.png') }}"
                                     alt="">
                            </div>
                            <div class="space-y-1">
                                <p class="font-bold">
                                    {{ config('app.cinema.name') }}
                                </p>
                                <p class="text-gray-500 text-sm">
                                    {{ config('app.cinema.email') }}
                                </p>
                                <p class="text-gray-500 text-sm mt-1">
                                    {{ config('app.cinema.phone') }}
                                </p>
                            </div>
                        </div>

                        <div class="flex flex-wrap items-center justify-between gap-4 mb-4">
                            <div>
                                <p class="font-bold">Adresa de facturare :</p>
                                <p class="text-gray-500 text-xs">{{ $invoice->billing_customer }}</p>
                                <p class="text-gray-500 text-xs">{{ $invoice->billing_email }}</p>
                                <p class="text-gray-500 text-xs">{{ $invoice->billing_phone }}</p>
                                <p class="text-gray-500 text-xs">{{ $invoice->billing_address }}</p>
                                <p class="text-gray-500 text-xs">{{ $invoice->billing_city }}</p>
                            </div>

                            <div class="text-right">
                                <p class="">
                                    <span class="font-bold">Numar factura:</span>
                                    <span class="text-gray-500 text-sm">{{ $invoice->number }}</span>
                                </p>
                                <p>
                                    <span class="font-bold">Data emiterii:</span> <span
                                        class="text-gray-500 text-sm">{{ \Carbon\Carbon::parse($invoice->date)->format('d/m/Y')}}</span>
                                </p>
                                <p>
                                    <span class="font-bold">Data scadenta:</span> <span
                                        class="text-gray-500 text-sm">{{ \Carbon\Carbon::parse($invoice->due_date)->format('d/m/Y')}}</span>
                                </p>
                            </div>
                        </div>

                        <div class="py-6 border-t border-b border-gray-100">
                            <div class="flex flex-wrap gap-6">
                                <div class="flex-1 flex flex-col justify-evenly">
                                    <div class="flex justify-between flex-wrap gap-1 mb-1">
                                        <p>Nume produs</p>
                                        <p>Cantitate</p>
                                        <p>Pret</p>
                                        <p>Total</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @php($total = 0)
                        @foreach($invoice->items as $invoice_item)
                            <div class="py-6 border-t border-b border-gray-100 @if($loop->last)mb-6 @endif">
                                <div class="flex flex-wrap gap-6">
                                    <div class="flex-1 flex flex-col justify-evenly">
                                        <div class="flex justify-between flex-wrap gap-1 mb-1">
                                            <p>Bilet #{{ $invoice_item->ticket->id }}</p>
                                            <p>1</p>
                                            <p>{{ $invoice_item->ticket->price }} {{ config('app.currency') }}</p>
                                            <p>{{ $invoice_item->ticket->price }} {{ config('app.currency') }}</p>
                                            @php($total += $invoice_item->ticket->price)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="py-6">
                            <div class="flex flex-wrap gap-6">
                                <div class="flex-1 flex flex-col justify-evenly">
                                    <div class="flex justify-between flex-wrap gap-2 mb-8">
                                        <h2 class="text-lg font-bold">Total</h2>
                                        <p class="text-xl font-bold">{{ $total }} {{ config('app.currency') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end py-4"><a
                            class="px-3 py-4 rounded-sm text-center text-white text-sm font-medium bg-purple-500 hover:bg-purple-600 transition duration-200"
                            href="{{ route('invoices.index') }}">Inapoi la facturi</a></div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
