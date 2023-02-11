<x-app-layout>

    <x-slot name="header">
        <div class="flex flex-wrap">
            <div class="w-full sm:w-1/2">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Pengadaan Dokumen
                </h2>
                <p class="mt-1 text-sm text-gray-600">
                    Input From User
                </p>
            </div>
            <div class="mt-4 sm:mt-0 w-full sm:w-1/2 sm:text-right">
                <x-teal-button-link href="{{ route('document') }}">
                    <i class="bi bi-arrow-left-square mr-2"></i> Back
                </x-teal-button-link>
            </div>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="w-full sm:px-2 lg:px-3">
            <div class="bg-white overflow-hidden shadow-xl rounded-lg mb-10 mx-3">
                <div class="py-4 px-6 bg-teal-600 border-b border-gray-200">
                    <h2 class="text-xl text-white text-center">Edit Dokumen</h2>
                </div>
                <div class="bg-gray-200 bg-opacity-25">
                    <div class="py-4 px-4">
                        @livewire('document.edit', ['document' => $document])
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>