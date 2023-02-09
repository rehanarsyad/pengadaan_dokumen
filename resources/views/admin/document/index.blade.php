<x-app-layout>

    <x-slot name="header">
        <div class="flex flex-wrap">
            <div class="w-full sm:w-1/2">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Daftar Dokumen
                </h2>
            </div>

            <div class="mt-4 sm:mt-0 w-full sm:w-1/2 sm:text-right">
                <x-teal-button-link href="{{ route('document.create') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                </svg>
                    Input Dokumen Baru
                </x-teal-button-link>
            </div>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-3 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="overflow-x-auto relative shadow-md rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-white uppercase dark:bg-gray-700 dark:text-gray-400 bg-teal-600">
                            <tr>
                                <th scope="col" class="py-3 px-6">
                                    No Surat
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Tanggal Masuk
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Jam
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Kegiatan
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Lokasi
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    ODP Yang Mengundang
                                </th>
                                @if(auth()->user()->roles()->where('name', 'Admin')->first())
                                <th scope="col" class="py-3 px-6">
                                    <span class="sr-only">Edit</span>
                                </th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                </th>
                                <td class="py-4 px-6">
                                </td>
                                <td class="py-4 px-6">
                                </td>
                                <td class="py-4 px-6">
                                </td>
                                <td class="py-4 px-6">
                                </td>
                                <td class="py-4 px-6">
                                </td>
                                @if(auth()->user()->roles()->whereIn('name', ['Admin'])->first())
                                <td class="py-4 px-6 text-right">
                                    @if ($surat->verified_at)
                                    <div class="inline-flex items-center px-4 py-2 rounded-md font-semibold text-xl text-green-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 max-h-full my-auto">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                        </svg>
                                    </div>
                                    @else
                                    <a href="{{ url('/admin/surat/verify/' . $surat->id) }}" class="inline-flex items-center px-4 py-2 mb-2 bg-white border border-green-400 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-green-500 focus:outline-none focus:border-green-300 focus:ring focus:ring-green-200 active:text-green-400 active:bg-green-50 disabled:opacity-25 transition">
                                        Verify
                                    </a>
                                    @endif
                                    <a href="{{ url('/admin/surat/edit/' . $surat->id) }}" class="inline-flex items-center px-4 py-2 mb-1 bg-white border border-blue-400 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-blue-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-blue-400 active:bg-blue-50 disabled:opacity-25 transition">
                                        Edit
                                    </a>
                                    @livewire('surat.delete', ['id' => $surat->id])
                                </td>
                                @endif
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
