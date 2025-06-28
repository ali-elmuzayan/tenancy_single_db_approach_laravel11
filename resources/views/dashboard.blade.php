<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ strtoupper($user->tenant->name) }} |

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
                            @forelse ($users as $user)
                                <tr class="">

                                    <td class="text-center ">{{ $user->id }}</td>
                                    <td class="text-center ">{{ $user->name }}</td>
                                    <td class="text-center ">{{ $user->email }}</td>
                                    <td class="text-center ">{{ $user->tenant?->name}}</td>
                                </tr>
                            @empty
                                <p>No user found</p>
                            @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
