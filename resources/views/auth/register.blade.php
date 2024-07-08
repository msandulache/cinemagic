<x-app-layout>

    {{ Breadcrumbs::render('register') }}

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

{{--                    <div class="flex items-center gap-3 mb-8">--}}
{{--                        <label class="block text-rhino-300 text-sm" for="checkbox1">--}}
{{--                            <span>Prin înscriere, sunteți de acord cu</span>--}}
{{--                            <span class="text-rhino-700">Termenii, Politica de date și Politica privind cookie-urile.</span>--}}
{{--                        </label>--}}
{{--                    </div>--}}

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
