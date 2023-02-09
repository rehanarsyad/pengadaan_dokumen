<x-app-layout>

    <x-slot name="header">
        <div class="flex flex-wrap">
            <div class="w-full sm:w-1/2">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Edit User
                </h2>
            </div>
            <div class="mt-4 sm:mt-0 w-full sm:w-1/2 sm:text-right">
                <x-teal-button-link href="{{ route('user') }}">
                    Back To List User
                </x-teal-button-link>
            </div>
        </div>
    </x-slot>

    <div class="py-12 justify-center">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl rounded-lg mb-10 mx-3">
                <div class="py-4 px-6 bg-white border-b border-gray-200">
                    <h2 class="text-xl">User Detail</h2>
                </div>
                <div class="bg-gray-200 bg-opacity-25">
                    <div class="py-4 px-6">
                        @livewire('user.edit', ['user' => $user])
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>