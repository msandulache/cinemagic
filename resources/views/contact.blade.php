<x-app-layout>

    <section class="relative bg-rhino-900 overflow-hidden">
        <div class="container px-4 mx-auto">
            <div class="py-5">
                <div class="flex flex-wrap items-center gap-2">
                    <a class="text-rhino-50 text-sm hover:text-rhino-50 transition duration-200" href="{{ route('index') }}">{{ __('Acasa') }}</a>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                            <path d="M15.1211 12C15.1212 12.1313 15.0954 12.2614 15.0451 12.3828C14.9948 12.5041 14.9211 12.6143 14.8281 12.707L10.5859 16.9497C10.3984 17.1372 10.1441 17.2426 9.87889 17.2426C9.6137 17.2426 9.35937 17.1372 9.17186 16.9497C8.98434 16.7622 8.879 16.5079 8.879 16.2427C8.879 15.9775 8.98434 15.7232 9.17186 15.5357L12.707 12L9.17183 8.46437C8.98431 8.27686 8.87897 8.02253 8.87897 7.75734C8.87897 7.49215 8.98431 7.23782 9.17183 7.05031C9.35934 6.86279 9.61367 6.75744 9.87886 6.75744C10.144 6.75744 10.3984 6.86279 10.5859 7.0503L14.8281 11.293C14.9211 11.3857 14.9949 11.4959 15.0451 11.6173C15.0954 11.7386 15.1212 11.8687 15.1211 12Z" fill="#A0A5B8"></path>
                        </svg>
                    </div>
                    <span class="text-rhino-400 text-sm transition duration-200">{{ __('Contact') }}</span>
                </div>
            </div>
        </div>
    </section>

    <section class="overflow-hidden py-12">
        <div class="container mx-auto px-4">
            <div class="bg-purple-100 rounded-lg py-12 px-8 max-w-lg mx-auto">
                <form method="POST" action="{{ route('contact') }}">
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
