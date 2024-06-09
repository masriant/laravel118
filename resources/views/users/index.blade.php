<x-app-layout title="Users">
    <x-slot name="heading">Users</x-slot>
    <div class="px-4 sm:px-6 lg:px-8"></div>

    <div class="sm:flex sm:items-center">
        <x-section-title>
            <x-slot name="title">Users</x-slot>
            <x-slot name="description">Description</x-slot>
            
        </x-section-title>
        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
            <x-button class="bg-red-500" as="a" href="/users/create">
                Add user
            </x-button>
        </div>
    </div>


    <div class="mt-8 flow-root">
    <x-table>
        <x-table.thead>
            <tr>
                <x-table.th>#</x-table.th>
                <x-table.th>Name</x-table.th>
                <x-table.th>Email</x-table.th>
                <x-table.th>Created At</x-table.th>
            </tr>
        </thead>
        <x-table.tbody>
        @foreach($users as $user)
            <tr>
                <x-table.td>{{ $loop->iteration }}</x-table.td>
                <x-table.td>{{ $user->name }}</x-table.td>
                <x-table.td>{{ $user->email }}</x-table.td>
                <x-table.td>{{ (new \Carbon\Carbon($user->published_at))->format('d M Y') }}</x-table.td>
                <!-- <td>{{ $user->created_at }}</td> -->
                <!-- <td> $user->created_at->diffForHumans()</td> -->
                <!-- <td> $user->created_at->format('d M Y') </td> -->
            </tr>
        @endforeach
        </x-table.tbody>
    </x-table>
</div>
</x-app-layout>