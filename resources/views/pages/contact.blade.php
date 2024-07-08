<x-app-layout>

    {{ Breadcrumbs::render('contact') }}

    <section class="overflow-hidden py-12">
        <div class="container mx-auto px-4">
            <div class="bg-purple-100 rounded-lg py-12 px-8 max-w-lg mx-auto">
                <form method="POST" action="{{ route('page.contact') }}">
                    @csrf
                    <p class="uppercase text-rhino-300 text-xs font-bold tracking-widest mb-1 text-center">{{ __('FORMULAR CONTACT') }}</p>
                    <h1 class="font-heading font-semibold text-4xl text-rhino-700 text-center mb-8">{{ __('Trimite un mesaj') }}</h1>

                    <div class="mb-4">
                        <x-text-input id="name" class="w-full" type="text" name="name" :placeholder="__('Nume')" :value="old('name')" required autofocus />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div class="mb-4">
                        <x-text-input id="email" class="w-full" type="email" name="email" :placeholder="__('Adresa de e-mail')" :value="old('email')" required />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="mb-4">
                        <x-text-input id="name" class="w-full" type="text" name="phone" :placeholder="__('Telefon')" :value="old('phone')" required autofocus />
                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                    </div>

                    <div class="mb-4">
                        <x-textarea :placeholder="__('Mesajul tau')" name="message" class="w-full" id="message" rows="10">{{ __('Mesajul tau') }}</x-textarea>
                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                    </div>

                    <div class="flex items-center gap-3 mb-8">
                        <x-primary-button>
                            {{ __('Trimite') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-app-layout>
