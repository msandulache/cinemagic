<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Actors') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('actors.create') }}">Create actor</a>
                    <table>
                        <tr>
                            <td>Id</td>
                            <td>Name</td>
                            <td>Profile Path</td>
                            <td>Edit</td>
                            <td>Delete</td>
                        </tr>
                        @foreach($actors as $actor)
                            <tr>
                                <td><a href="{{ route('actors.show', ['actor' => $actor ]) }}">{{ $actor->id }}</a></td>
                                <td>{{ $actor->name }}</td>
                                <td>{{ $actor->profile_path }}</td>
                                <td><a href="{{ route('actors.edit', ['actor' => $actor]) }}">Edit</a></td>
                                <td>
                                    <form method="POST" action="{{ route('actors.destroy', ['actor' => $actor]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button>Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>

                    {{ $actors->links() }}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
