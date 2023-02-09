<x-app-layout>

    <x-slot name="header">
        <div class="flex flex-wrap">
            <div class="w-full sm:w-1/2">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Buat Surat Baru
                </h2>
                <p class="mt-1 text-sm text-gray-600">
                    Input From OPD Dinas
                </p>
            </div>
            <div class="mt-4 sm:mt-0 w-full sm:w-1/2 sm:text-right">
                <x-teal-button-link href="{{ route('surat') }}">
                    Kembali ke daftar surat
                </x-teal-button-link>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl rounded-lg mb-10 mx-3">
                <div class="py-4 px-6 bg-teal-600 border-b border-gray-200">
                    <h2 class="text-xl text-white">Surat Detail</h2>
                </div>
                <div class="bg-gray-200 bg-opacity-25">
                    <div class="py-4 px-6">
                        @livewire('surat.create')
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>