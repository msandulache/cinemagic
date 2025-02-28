<x-app-layout>

    {{ Breadcrumbs::render('contact') }}

    <section class="overflow-hidden py-12">
        <div class="container mx-auto px-4">
            <div class="py-12 border-b border-gray-100">
                <div class="container px-4 mx-auto">
                    <div class="flex justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewbox="0 0 64 64" fill="none">
                            <circle opacity="0.3" cx="32" cy="32" r="32" fill="#C8C7FD"></circle>
                            <circle cx="32" cy="32" r="24" fill="#C8C7FD"></circle>
                            <path
                                d="M41.28 24.4655C41.0779 24.2969 40.8447 24.1695 40.5933 24.0911C40.3419 24.0127 40.0775 23.9842 39.8154 24.0083C39.5534 24.0321 39.2983 24.1072 39.0654 24.2299C38.8321 24.3522 38.6257 24.5194 38.4575 24.7218L29.8487 35.0499L25.3927 30.5939C25.015 30.2292 24.5093 30.0271 23.9844 30.0318C23.4596 30.0365 22.9576 30.247 22.5862 30.6183C22.2152 30.9893 22.0044 31.4914 22.0001 32.0165C21.9954 32.5414 22.1971 33.0471 22.5618 33.4244L28.5675 39.4301C28.7538 39.6165 28.975 39.7642 29.2186 39.8651C29.4623 39.9657 29.7234 40.0173 29.9868 40.0166H30.0769C30.3551 40.0042 30.6279 39.9342 30.8776 39.8102C31.1269 39.6865 31.3481 39.5119 31.5264 39.2981L41.5353 27.2867C41.7039 27.0846 41.8309 26.8514 41.9093 26.6003C41.9877 26.3493 42.0156 26.0852 41.9918 25.8231C41.968 25.5611 41.8929 25.3067 41.7706 25.0738C41.6482 24.8409 41.4813 24.6344 41.2793 24.4658L41.28 24.4655Z"
                                fill="#7573F9"></path>
                        </svg>
                    </div>
                    <p class="uppercase text-rhino-300 font-bold text-xs tracking-widest text-center mb-1">SUCCES</p>
                    <h1 class="font-heading text-center text-4xl text-rhino-700 font-semibold mb-6">Comanda ta a fost plasata</h1>
                    <p class="text-center mb-8 text-rhino-300 text-lg max-w-md mx-auto">Ve ti primi bilete pe mail sau se puteti accesa de aici sau de aici Hai o zi frumoasa si bftaleos!</p>
                    <div class="flex justify-center"><a
                            class="py-3 px-4 bg-purple-500 rounded-sm text-center text-sm font-medium text-white hover:bg-purple-600 transition duration-200"
                            href="#">Vezi detalii comanda...</a></div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
