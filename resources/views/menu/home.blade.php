<x-app-layout>

    <section class="relative bg-black overflow-hidden">
        <div class="container px-4 mx-auto">
            <div class="max-w-xl mx-auto lg:max-w-none pt-18 pb-3 relative">
                <div class="flex flex-wrap items-center -mx-4">
                    <div class="relative w-full lg:w-1/2 px-6 mb-12">
                        <div class="relative">
                            <div class="flex flex-col justify-center items-start">
                                <h1 class="text-3xl xs:text-4xl sm:text-5xl md:text-6xl font-heading text-white font-semibold mb-8">
                                    {{ __('Bun venit la CineMagic!') }}</h1>
                                <p class="max-w-sm lg:max-w-md mb-8 text-rhino-300 text-sm lg:text-base">
                                    {{ __('Alege din oferta noastra de filme si rezerva, aici, biletele din cativa pasi simpli. Ce film vei alege?') }}</p>
                                <a class="inline-flex h-12 py-1 px-6 items-center text-center text-sm font-medium text-white rounded-sm bg-purple-500 hover:bg-purple-600 transition duration-200"
                                   href="{{ route('menu.movies') }}">{{ __('Vezi oferta noastra de filme') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 px-8 mb-12">
                        <div class="relative">
                            <div class="flex flex-wrap -mx-4">
                                @foreach($premiumMovies as $premiumMovie)
                                    <div class="w-1/3 px-4 group">
                                        <a href="{{ route('cinema.movie', ['movie' => $premiumMovie]) }}">
                                            <img class="block rounded-xl w-full group-hover:opacity-75"
                                                 src="{{ $premiumMovie['poster_path'] }}"
                                                 alt="{{ $premiumMovie['title'] }}">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden py-6">
        <div class="container px-4 mx-auto">
            <div class="flex flex-wrap">
                <div class="w-full sm:w-1/2 lg:w-1/4 p-4">
                    <div class="mb-3 mx-auto bg-orange-500 w-12 h-12 rounded-full flex items-center justify-center">
                        <i class="fa fa-group text-white fa-2x" aria-hidden="true"></i>
                    </div>
                    <p class="text-rhino-700 text-sm font-semibold font-medium text-center mb-2">Scaune Premium</p>
                    <p class="text-rhino-400 text-sm text-center">Alege confortul suprem cu scaune premium
                        ajustabile pentru o vizionare de neuitat.</p>
                </div>
                <div class="w-full sm:w-1/2 lg:w-1/4 p-4">
                    <div class="mb-3 mx-auto bg-orange-500 w-12 h-12 rounded-full flex items-center justify-center">
                        <i class="fa fa-ticket text-white fa-2x" aria-hidden="true"></i>
                    </div>
                    <p class="text-rhino-700 text-sm font-semibold font-medium text-center mb-2">Rezervare Rapida</p>
                    <p class="text-rhino-400 text-sm text-center">Procesul nostru optimizat asigura finalizarea
                        rezervarii in doar cateva minute.</p>
                </div>
                <div class="w-full sm:w-1/2 lg:w-1/4 p-4">
                    <div class="mb-3 mx-auto bg-orange-500 w-12 h-12 rounded-full flex items-center justify-center">
                        <i class="fa fa-gift text-white fa-2x" aria-hidden="true"></i>
                    </div>
                    <p class="text-rhino-700 text-sm font-semibold font-medium text-center mb-2">Oferte Speciale</p>
                    <p class="text-rhino-400 text-sm text-center">Beneficiati periodic de oferte speciale si reduceri la
                        cele mai noi filme.</p>
                </div>
                <div class="w-full sm:w-1/2 lg:w-1/4 p-4">
                    <div class="mb-3 mx-auto bg-orange-500 w-12 h-12 rounded-full flex items-center justify-center">
                        <i class="fa fa-phone text-white fa-2x" aria-hidden="true"></i>
                    </div>
                    <p class="text-rhino-700 text-sm font-semibold font-medium text-center mb-2">Suport Clienti</p>
                    <p class="text-rhino-400 text-sm text-center">Echipa noastra de suport este disponibila pentru a
                        raspunde oricaror intrebari legate de bilete.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="relative bg-white overflow-hidden">
        <div class="container px-4 mx-auto">
            <div class="flex flex-col lg:flex-row gap-12 justify-between py-16">
                <div class="w-full lg:w-1/2">
                    <div class="max-w-md lg:max-w-lg mx-auto">
{{--                        <img class="shadow-md rounded-2xl"--}}
{{--                             src="{{ \Illuminate\Support\Facades\Vite::asset('resources\images\cinemagic.png') }}"--}}
{{--                             alt="">--}}
                    </div>
                </div>
                <div class="w-full lg:w-1/2">
                    <div class="max-w-md lg:max-w-xl mx-auto">
                        <div class="mb-12 space-y-7">
                            <h2 class="text-3xl md:text-4xl xl:text-5xl text-rhino-700 font-semibold mb-3 leading-none font-heading">
                                Cum rezerv online?</h2>
                            <p class="text-rhino-400 text-lg font-normal">Alege un film si acceseaza pagina acestuia, selecteaza
                                data si ora rularii, apoi locurile dorite din sala si finalizati cumpararea prin plata cu card.</p>
                            <p class="text-rhino-400 text-lg">După finalizarea cumpararii, vei primi biletele pe email
                                sau le poti accesa in contul tau la sectiunea 'Biletele mele'.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="py-6">
        <div class="container px-4 mx-auto">
            <h2 class="text-4xl text-center font-heading font-semibold text-rhino-600 tracking-xs mb-14">{{ __('Urmatoarele filme') }}</h2>
            <div class="flex flex-wrap">

                <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                    @forelse($movieHours as $movieHour)
                        @include('partials.movieHour', ['movieHour' => $movieHour])
                    @empty
                        <div>
                            {{ __('Ne pare rau, dar nu am gasit filme') }}
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
