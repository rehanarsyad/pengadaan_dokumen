<x-app-layout>

    <x-slot name="header">
        <div class="flex flex-wrap">
            <div class="w-full sm:w-1/2">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Verifikasi Surat
                </h2>
            </div>
            <div class="mt-4 sm:mt-0 w-full sm:w-1/2 sm:text-right">
                <x-teal-button-link href="{{ route('surat') }}">
                    Kembali ke daftar surat
                </x-teal-button-link>
            </div>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8 rounded-lg">
            <div class="md:grid md:grid-cols-3 md:gap-6 shadow-xl rounded-b-lg">
                <div class="mt-5 md:mt-0 md:col-span-10">
                    <div class="py-4 px-6 bg-teal-600 shadow-sm shadow-teal-700 border-b border-gray-200 rounded-t-xl">
                        <h2 class="text-xl font-extrabold text-white uppercase text-center">Surat Detail</h2>
                    </div>
                    @livewire('surat.verify', ['surat' => $surat])
                </div>
            </div>
        </div>
    </div>
</x-app-layout>