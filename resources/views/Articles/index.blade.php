<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ strtoupper(Auth::user()->tenant->name) }} |
            <a href="{{ route('articles.create') }}" class="text-base bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">New Article</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="table-auto w-full">
                        <thead>
                            <th>id</th>
                            <th>name</th>
                            <th>email</th>
                            <th>Team</th>
                        </thead>
                        <tbody>
                            @forelse ($articles as $article)
                                <tr class="">

                                    <td class="text-center py-5">{{ $article->id }}</td>
                                    <td class="text-center py-5">{{ $article->title }}</td>
                                    <td class="text-center py-5">{{ $article->body }}</td>
                                    <td class="text-center py-5">{{ $article->tenant?->name}}</td>
                                </tr>
                            @empty
                                <tr>
                                <p>No Article found</p>
                                </tr>
                            @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
