<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Genres') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form method="POST" action="{{ route('genres.update', ['genre' => $genre]) }}">
                        @csrf
                        @method('PATCH')

                        <!-- tmdb_id of the genre -->
                        <div>
                            <x-input-label for="tmdb_id" :value="__('TMDB Id')" />
                            <x-text-input id="tmdb_id" class="block mt-1 w-full" type="text" name="tmdb_id" :value="old('tmdb_id', $genre->tmdb_id)" required />
                            <x-input-error :messages="$errors->get('tmdb_id')" class="mt-2" />
                        </div>

                        <!-- Profile path -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Name')" />

                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $genre->name)" required />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-3">
                                {{ __('Update') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
