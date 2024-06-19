<x-app-layout>

    <section class="overflow-hidden py-12">
        <div class="container mx-auto px-4">
            <div class="bg-purple-100 rounded-lg py-12 px-8 max-w-lg mx-auto">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <p class="uppercase text-rhino-300 text-xs font-bold tracking-widest mb-1 text-center">Inregistrare cont</p>
                    <h1 class="font-heading font-semibold text-4xl text-rhino-700 text-center mb-8">Creeaza un cont nou</h1>

                    <div class="mb-4">
                        <x-text-input id="name" class="w-full" type="text" name="name" :placeholder="__('Nume')" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div class="mb-4">
                        <x-text-input id="email" class="w-full" type="email" name="email" :placeholder="__('Adresa de e-mail')" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="mb-4">
                        <x-text-input id="password" class="w-full"
                                      type="password"
                                      name="password"
                                      required autocomplete="new-password" :placeholder="__('Parola')"/>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="mb-8">
                        <x-text-input id="password_confirmation" class="w-full"
                                      type="password"
                                      name="password_confirmation" required autocomplete="new-password" :placeholder="__('Confirmare parola')"/>
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="flex items-center gap-3 mb-8">
                        <div class="relative">
                            <input class="custom-checkbox-1 opacity-0 absolute z-10 h-5 w-5 top-0 left-0" id="checkbox1" type="checkbox" checked>
                            <div class="border border-coolGray-200 w-5 h-5 flex justify-center items-center rounded-sm bg-white">
                                <svg class="hidden" width="10" height="7" viewbox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.76764 0.22597C9.45824 -0.0754185 8.95582 -0.0752285 8.64601 0.22597L3.59787 5.13702L1.35419 2.95437C1.04438 2.65298 0.542174 2.65298 0.23236 2.95437C-0.0774534 3.25576 -0.0774534 3.74431 0.23236 4.0457L3.03684 6.77391C3.19165 6.92451 3.39464 7 3.59765 7C3.80067 7 4.00386 6.9247 4.15867 6.77391L9.76764 1.31727C10.0775 1.01609 10.0775 0.52734 9.76764 0.22597Z" fill="currentColor"></path>
                                </svg>
                            </div>
                        </div>
                        <label class="block text-rhino-300 text-sm" for="checkbox1">
                            <span>Prin înscriere, sunteți de acord cu</span>
                            <span class="text-rhino-700">Termenii, Politica de date și Politica privind cookie-urile.</span>
                        </label>
                    </div>

                    <div class="flex items-center gap-3 mb-8">
                        <x-primary-button>
                            {{ __('Inregistrare') }}
                        </x-primary-button>
                    </div>

                    <a class="group text-sm text-center block" href="{{ route('login') }}">
                        <span class="text-rhino-300 group-hover:text-rhino-400 transition duration-200">{{ __('Ai deja un cont?') }}</span>
                        <span class="text-rhino-700 group-hover:text-rhino-800 transition duration-200">{{ __('Intra in cont') }}</span>
                    </a>
                </form>
            </div>
        </div>
    </section>
</x-app-layout>
