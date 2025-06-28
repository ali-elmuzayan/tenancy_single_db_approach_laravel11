<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ strtoupper(Auth::user()->tenant->name) }} |
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('articles.store') }}" method="POST">
                        @csrf
                        <div>
                            <x-input-label for="title" :value="__('title')" />
                            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title')" required autofocus autocomplete="title" />
                            <x-input-error class="mt-2" :messages="$errors->get('title')" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="body" :value="__('body')" />
                            <x-text-input id="body" name="body" type="text" class="mt-1 block w-full" :value="old('body')" required autofocus autocomplete="body" />
                            <x-input-error class="mt-2" :messages="$errors->get('body')" />
                        </div>

                        <div class="mt-4 text-center">
                            <input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded" value="add article">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
