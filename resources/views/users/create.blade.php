<x-app-layout title="Create User">
    <x-slot name="heading">Create User</x-slot>
    <form action="/users" method="post" class="space-y-6">
        @csrf
        <div>
            <label for="name">Name</label>
            <input class="border px-4 py-2 rounded block mt-1" type="text" name="name" id="name">

            <label for="email">Email</label>
            <input class="border px-4 py-2 rounded block mt-1" type="text" name="email" id="email">

            <label for="password">Name</label>
            <input class="border px-4 py-2 rounded block mt-1" type="text" name="password" id="password">

        </div>
        <x-button>
            Save
        </x-button>
    </form>
</x-app-layout>