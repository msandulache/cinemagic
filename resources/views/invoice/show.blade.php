<x-app-layout>

    {{ Breadcrumbs::render('contact') }}

    <section class="overflow-hidden py-12">
        <div class="container mx-auto px-4">

            <div class="rounded-lg py-12 px-8 max-w-6xl mx-auto">


                <div class="container px-4 mx-auto">
                    <div class="rounded-xl border border-coolGray-200 shadow-md py-16 px-4 sm:px-8 lg:px-24">
                        <div class="flex flex-wrap items-center justify-between gap-4 mb-4">
                            <div>
                                <img class="invoice-logo"
                                     src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/logo.png') }}"
                                     alt="">
                            </div>
                            <div class="space-y-1">
                                <p>
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
                                <p class="font-bold text-gray-800">Adresa de facturare :</p>
                                <p class="text-gray-500">{{ $invoice->billing_name }}</p>
                                <p class="text-gray-500">
                                    Laravel LLC.
                                    <br/>
                                    102, San-Fransico, CA, USA
                                </p>
                                <p class="text-gray-500">
                                    info@laravel.com
                                </p>
                            </div>

                            <div class="text-right">
                                <p class="">
                                    Invoice number:
                                    <span class="text-gray-500">INV-2023786123</span>
                                </p>
                                <p>
                                    Invoice date: <span class="text-gray-500">03/07/2023</span>
                                    <br/>
                                    Due date:<span class="text-gray-500">31/07/2023</span>
                                </p>
                            </div>
                        </div>


                        <div class="py-6 border-t border-b border-gray-100">
                            <div class="flex flex-wrap gap-6">
                                <div class="bg-gray-100 rounded-lg w-40 h-40 flex items-center justify-center">
                                    <img src="coleos-assets/summary/product1.png" alt="">
                                </div>
                                <div class="flex-1 flex flex-col justify-between">
                                    <div class="flex justify-between flex-wrap gap-2 mb-8">
                                        <h2 class="text-rhino-800 text-lg font-semibold">GrayBlack SportLock</h2>
                                        <p class="text-rhino-500 text-2xl font-bold">$132.00</p>
                                    </div>
                                    <div class="flex flex-wrap justify-between items-start gap-8">
                                        <ul class="text-sm">
                                            <li class="text-rhino-700">Delivery address</li>
                                            <li class="text-rhino-400">Morgan S Hembree</li>
                                            <li class="text-rhino-400">4767 Woodland Terrace</li>
                                            <li class="text-rhino-400">California, CA 95821</li>
                                        </ul>
                                        <ul class="text-sm">
                                            <li class="text-rhino-700">Shipping information</li>
                                            <li class="text-rhino-400">morgan@shuffleux.com</li>
                                            <li class="text-rhino-400">916-971-2145</li>
                                        </ul>
                                        <ul class="text-sm">
                                            <li class="text-rhino-700">Payment information</li>
                                            <li class="text-rhino-400">VISA card</li>
                                            <li class="text-rhino-400">Ending with 4242</li>
                                            <li class="text-rhino-400">Expires 02 / 28</li>
                                        </ul>
                                        <a class="py-1 px-4 rounded-sm border border-gray-200 shadow-md text-sm font-medium text-purple-500 mt-auto hover:text-white hover:bg-purple-500 transition duration-200"
                                           href="#">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="py-6 border-t border-b border-gray-100">
                            <div class="flex flex-wrap gap-6">
                                <div class="bg-gray-100 rounded-lg w-40 h-40 flex items-center justify-center">
                                    <img src="coleos-assets/summary/product2.png" alt="">
                                </div>
                                <div class="flex-1 flex flex-col justify-between">
                                    <div class="flex justify-between flex-wrap gap-2 mb-8">
                                        <h2 class="text-rhino-800 text-lg font-semibold">Brown Original Jacket</h2>
                                        <p class="text-rhino-500 text-2xl font-bold">$299.00</p>
                                    </div>
                                    <div class="flex flex-wrap justify-between items-start gap-8">
                                        <ul class="text-sm">
                                            <li class="text-rhino-700">Delivery address</li>
                                            <li class="text-rhino-400">Morgan S Hembree</li>
                                            <li class="text-rhino-400">4767 Woodland Terrace</li>
                                            <li class="text-rhino-400">California, CA 95821</li>
                                        </ul>
                                        <ul class="text-sm">
                                            <li class="text-rhino-700">Shipping information</li>
                                            <li class="text-rhino-400">morgan@shuffleux.com</li>
                                            <li class="text-rhino-400">916-971-2145</li>
                                        </ul>
                                        <ul class="text-sm">
                                            <li class="text-rhino-700">Payment information</li>
                                            <li class="text-rhino-400">VISA card</li>
                                            <li class="text-rhino-400">Ending with 4242</li>
                                            <li class="text-rhino-400">Expires 02 / 28</li>
                                        </ul>
                                        <a class="py-1 px-4 rounded-sm border border-gray-200 shadow-md text-sm font-medium text-purple-500 mt-auto hover:text-white hover:bg-purple-500 transition duration-200"
                                           href="#">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="py-6 border-t border-b border-gray-100">
                            <div class="flex flex-wrap gap-6">
                                <div class="bg-gray-100 rounded-lg w-40 h-40 flex items-center justify-center">
                                    <img src="coleos-assets/summary/product3.png" alt="">
                                </div>
                                <div class="flex-1 flex flex-col justify-between">
                                    <div class="flex justify-between flex-wrap gap-2 mb-8">
                                        <h2 class="text-rhino-800 text-lg font-semibold">GrayBlack SportLock</h2>
                                        <p class="text-rhino-500 text-2xl font-bold">$65.00</p>
                                    </div>
                                    <div class="flex flex-wrap justify-between items-start gap-8">
                                        <ul class="text-sm">
                                            <li class="text-rhino-700">Delivery address</li>
                                            <li class="text-rhino-400">Morgan S Hembree</li>
                                            <li class="text-rhino-400">4767 Woodland Terrace</li>
                                            <li class="text-rhino-400">California, CA 95821</li>
                                        </ul>
                                        <ul class="text-sm">
                                            <li class="text-rhino-700">Shipping information</li>
                                            <li class="text-rhino-400">morgan@shuffleux.com</li>
                                            <li class="text-rhino-400">916-971-2145</li>
                                        </ul>
                                        <ul class="text-sm">
                                            <li class="text-rhino-700">Payment information</li>
                                            <li class="text-rhino-400">VISA card</li>
                                            <li class="text-rhino-400">Ending with 4242</li>
                                            <li class="text-rhino-400">Expires 02 / 28</li>
                                        </ul>
                                        <a class="py-1 px-4 rounded-sm border border-gray-200 shadow-md text-sm font-medium text-purple-500 mt-auto hover:text-white hover:bg-purple-500 transition duration-200"
                                           href="#">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="py-6 border-t border-b border-gray-100 mb-6">
                            <div class="flex flex-wrap gap-6">
                                <div class="bg-gray-100 rounded-lg w-40 h-40 flex items-center justify-center">
                                    <img src="coleos-assets/summary/product4.png" alt="">
                                </div>
                                <div class="flex-1 flex flex-col justify-between">
                                    <div class="flex justify-between flex-wrap gap-2 mb-8">
                                        <h2 class="text-rhino-800 text-lg font-semibold">GrayBlack SportLock</h2>
                                        <p class="text-rhino-500 text-2xl font-bold">$79.00</p>
                                    </div>
                                    <div class="flex flex-wrap justify-between items-start gap-8">
                                        <ul class="text-sm">
                                            <li class="text-rhino-700">Delivery address</li>
                                            <li class="text-rhino-400">Morgan S Hembree</li>
                                            <li class="text-rhino-400">4767 Woodland Terrace</li>
                                            <li class="text-rhino-400">California, CA 95821</li>
                                        </ul>
                                        <ul class="text-sm">
                                            <li class="text-rhino-700">Shipping information</li>
                                            <li class="text-rhino-400">morgan@shuffleux.com</li>
                                            <li class="text-rhino-400">916-971-2145</li>
                                        </ul>
                                        <ul class="text-sm">
                                            <li class="text-rhino-700">Payment information</li>
                                            <li class="text-rhino-400">VISA card</li>
                                            <li class="text-rhino-400">Ending with 4242</li>
                                            <li class="text-rhino-400">Expires 02 / 28</li>
                                        </ul>
                                        <a class="py-1 px-4 rounded-sm border border-gray-200 shadow-md text-sm font-medium text-purple-500 mt-auto hover:text-white hover:bg-purple-500 transition duration-200"
                                           href="#">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-purple-100 rounded-xl py-4 px-6 flex items-center justify-between flex-wrap">
                            <p class="text-rhino-800">Subtotal</p>
                            <p class="text-rhino-400 font-heading text-xl font-semibold">$132.00</p>
                        </div>
                        <div class="py-4 px-6 flex items-center justify-between flex-wrap">
                            <p class="text-rhino-800">Shipping</p>
                            <p class="text-rhino-400 font-heading text-xl font-semibold">$5.00</p>
                        </div>
                        <div class="bg-purple-100 rounded-xl py-4 px-6 flex items-center justify-between flex-wrap">
                            <p class="text-rhino-800">Taxes</p>
                            <p class="text-rhino-400 font-heading text-xl font-semibold">$23.00</p>
                        </div>
                        <div class="py-4 px-6 flex items-center justify-between flex-wrap mb-6">
                            <p class="text-rhino-800">Order total</p>
                            <p class="text-rhino-800 font-heading text-xl font-semibold">$160.00</p>
                        </div>
                        <div class="flex justify-end"><a
                                class="px-3 py-4 rounded-sm text-center text-white text-sm font-medium bg-purple-500 hover:bg-purple-600 transition duration-200"
                                href="#">Go back to shop</a></div>
                    </div>
                </div>


                <div class="max-w-3xl mx-auto p-6 bg-white rounded shadow-sm my-6">


                    <!-- Client info -->
                    <div class="grid grid-cols-2 items-center mt-8">
                        <div>
                            <p class="font-bold text-gray-800">Adresa de facturare :</p>
                            <p class="text-gray-500">{{ $invoice->billing_name }}</p>
                            <p class="text-gray-500">
                                Laravel LLC.
                                <br/>
                                102, San-Fransico, CA, USA
                            </p>
                            <p class="text-gray-500">
                                info@laravel.com
                            </p>
                        </div>

                        <div class="text-right">
                            <p class="">
                                Invoice number:
                                <span class="text-gray-500">INV-2023786123</span>
                            </p>
                            <p>
                                Invoice date: <span class="text-gray-500">03/07/2023</span>
                                <br/>
                                Due date:<span class="text-gray-500">31/07/2023</span>
                            </p>
                        </div>
                    </div>

                    <!-- Invoice Items -->
                    <div class="-mx-4 mt-8 flow-root sm:mx-0">
                        <table class="min-w-full">
                            <colgroup>
                                <col class="w-full sm:w-1/2">
                                <col class="sm:w-1/6">
                                <col class="sm:w-1/6">
                                <col class="sm:w-1/6">
                            </colgroup>
                            <thead class="border-b border-gray-300 text-gray-900">
                            <tr>
                                <th scope="col"
                                    class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">Items
                                </th>
                                <th scope="col"
                                    class="hidden px-3 py-3.5 text-right text-sm font-semibold text-gray-900 sm:table-cell">
                                    Quantity
                                </th>
                                <th scope="col"
                                    class="hidden px-3 py-3.5 text-right text-sm font-semibold text-gray-900 sm:table-cell">
                                    Price
                                </th>
                                <th scope="col"
                                    class="py-3.5 pl-3 pr-4 text-right text-sm font-semibold text-gray-900 sm:pr-0">
                                    Amount
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="border-b border-gray-200">
                                <td class="max-w-0 py-5 pl-4 pr-3 text-sm sm:pl-0">
                                    <div class="font-medium text-gray-900">E-commerce Platform</div>
                                    <div class="mt-1 truncate text-gray-500">Laravel based e-commerce platform.</div>
                                </td>
                                <td class="hidden px-3 py-5 text-right text-sm text-gray-500 sm:table-cell">500.0</td>
                                <td class="hidden px-3 py-5 text-right text-sm text-gray-500 sm:table-cell">$100.00</td>
                                <td class="py-5 pl-3 pr-4 text-right text-sm text-gray-500 sm:pr-0">$5,000.00</td>
                            </tr>

                            <tr class="border-b border-gray-200">
                                <td class="max-w-0 py-5 pl-4 pr-3 text-sm sm:pl-0">
                                    <div class="font-medium text-gray-900">Frontend Design</div>
                                    <div class="mt-1 truncate text-gray-500">Frontend design using Vue.js and Tailwind
                                        CSS.
                                    </div>
                                </td>
                                <td class="hidden px-3 py-5 text-right text-sm text-gray-500 sm:table-cell">500.0</td>
                                <td class="hidden px-3 py-5 text-right text-sm text-gray-500 sm:table-cell">$100.00</td>
                                <td class="py-5 pl-3 pr-4 text-right text-sm text-gray-500 sm:pr-0">$5,000.00</td>
                            </tr>
                            <tr class="border-b border-gray-200">
                                <td class="max-w-0 py-5 pl-4 pr-3 text-sm sm:pl-0">
                                    <div class="font-medium text-gray-900">Shop SEO</div>
                                    <div class="mt-1 truncate text-gray-500">Website SEO and Social Media marketing.
                                    </div>
                                </td>
                                <td class="hidden px-3 py-5 text-right text-sm text-gray-500 sm:table-cell">50.0</td>
                                <td class="hidden px-3 py-5 text-right text-sm text-gray-500 sm:table-cell">$100.00</td>
                                <td class="py-5 pl-3 pr-4 text-right text-sm text-gray-500 sm:pr-0">$500.00</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th scope="row" colspan="3"
                                    class="hidden pl-4 pr-3 pt-6 text-right text-sm font-normal text-gray-500 sm:table-cell sm:pl-0">
                                    Subtotal
                                </th>
                                <th scope="row"
                                    class="pl-6 pr-3 pt-6 text-left text-sm font-normal text-gray-500 sm:hidden">
                                    Subtotal
                                </th>
                                <td class="pl-3 pr-6 pt-6 text-right text-sm text-gray-500 sm:pr-0">$10,500.00</td>
                            </tr>
                            <tr>
                                <th scope="row" colspan="3"
                                    class="hidden pl-4 pr-3 pt-4 text-right text-sm font-normal text-gray-500 sm:table-cell sm:pl-0">
                                    Tax
                                </th>
                                <th scope="row"
                                    class="pl-6 pr-3 pt-4 text-left text-sm font-normal text-gray-500 sm:hidden">Tax
                                </th>
                                <td class="pl-3 pr-6 pt-4 text-right text-sm text-gray-500 sm:pr-0">$1,050.00</td>
                            </tr>
                            <tr>
                                <th scope="row" colspan="3"
                                    class="hidden pl-4 pr-3 pt-4 text-right text-sm font-normal text-gray-500 sm:table-cell sm:pl-0">
                                    Discount
                                </th>
                                <th scope="row"
                                    class="pl-6 pr-3 pt-4 text-left text-sm font-normal text-gray-500 sm:hidden">
                                    Discount
                                </th>
                                <td class="pl-3 pr-6 pt-4 text-right text-sm text-gray-500 sm:pr-0">- 10%</td>
                            </tr>
                            <tr>
                                <th scope="row" colspan="3"
                                    class="hidden pl-4 pr-3 pt-4 text-right text-sm font-semibold text-gray-900 sm:table-cell sm:pl-0">
                                    Total
                                </th>
                                <th scope="row"
                                    class="pl-6 pr-3 pt-4 text-left text-sm font-semibold text-gray-900 sm:hidden">Total
                                </th>
                                <td class="pl-3 pr-4 pt-4 text-right text-sm font-semibold text-gray-900 sm:pr-0">
                                    $11,550.00
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>

                    <!--  Footer  -->
                    <div class="border-t-2 pt-4 text-xs text-gray-500 text-center mt-16">
                        Please pay the invoice before the due date. You can pay the invoice by logging in to your
                        account from our client portal.
                    </div>

                </div>

                <button type="button" id="btn" class="">Print</button>

            </div>
        </div>
    </section>
</x-app-layout>
