<x-app-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    {{ Breadcrumbs::render('login') }}

    <section class="overflow-hidden py-12">
        <div class="container mx-auto px-4">
            <div class="bg-purple-100 rounded-lg py-12 px-8 max-w-lg mx-auto">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <p class="uppercase text-rhino-300 text-xs font-bold tracking-widest mb-1 text-center">{{ __('Autentificare') }}</p>
                    <h1 class="font-heading font-semibold text-4xl text-rhino-700 text-center mb-8">{{ __('Intra in contul tau') }}</h1>

                    <div class="mt-4">
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :placeholder="__('Adresa de e-mail')" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-text-input id="password" class="block mt-1 w-full"
                                      type="password"
                                      name="password"
                                      required autocomplete="current-password" :placeholder="__('Parola')" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-primary-button>
                            {{ __('Intra in cont') }}
                        </x-primary-button>
                    </div>

                    <div class="mt-4 flex justify-between">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                {{ __('Ai uitat parola?') }}
                            </a>
                        @endif
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                                {{ __('Nu ai cont?') }}
                            </a>
                    </div>
{{--                    <a class="mb-4 w-full rounded-sm bg-white shadow-md py-3 px-6 flex items-center justify-center gap-4 text-coolGray-700 hover:bg-purple-500 hover:text-white transition duration-200" href="#">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewbox="0 0 25 24" fill="none">--}}
{{--                            <circle cx="12.5" cy="12" r="12" fill="#DDDCFE"></circle>--}}
{{--                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.044 18V12.5266H15.107L15.4165 10.3929H13.044V9.03088C13.044 8.41332 13.2358 7.99246 14.2318 7.99246L15.5 7.99199V6.08354C15.2807 6.05817 14.5278 6 13.6516 6C11.8219 6 10.5693 6.99418 10.5693 8.81956V10.3929H8.5V12.5266H10.5693V18H13.044Z" fill="#416BE6"></path>--}}
{{--                        </svg>--}}
{{--                        <span class="text-sm font-medium">Sign In with Facebook</span>--}}
{{--                    </a>--}}
{{--                    <a class="w-full rounded-sm bg-white shadow-md py-3 px-6 flex items-center justify-center gap-4 text-coolGray-700 hover:bg-purple-500 hover:text-white transition duration-200" href="#">--}}
{{--                        <img src="coleos-assets/logos/google-logo.svg" alt="">--}}
{{--                        <span class="text-sm font-medium">Sign In with Google</span>--}}
{{--                    </a>--}}
                </form>
            </div>
        </div>
    </section>
</x-app-layout>
