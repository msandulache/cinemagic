<x-admin>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Genres') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('genres.create') }}">Create genre</a>
                    <table>
                        <tr>
                            <td>Id</td>
                            <td>TMDB Id</td>
                            <td>Name</td>
                            <td>Edit</td>
                            <td>Delete</td>
                        </tr>
                        @foreach($genres as $genre)
                            <tr>
                                <td><a href="{{ route('genres.show', ['genre' => $genre ]) }}">{{ $genre->id }}</a></td>
                                <td>{{ $genre->tmdb_id }}</td>
                                <td>{{ $genre->name }}</td>
                                <td><a href="{{ route('genres.edit', ['genre' => $genre]) }}">Edit</a></td>
                                <td>
                                    <form method="POST" action="{{ route('genres.destroy', ['genre' => $genre]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button>Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>

                    {{ $genres->links() }}

                </div>
            </div>
        </div>
    </div>
</x-admin>
