<x-app-layout>

    <x-slot name="header">
        <div class="flex flex-wrap">
            <div class="w-full sm:w-1/2">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Matrix Page
                </h2>
            </div>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-3 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="overflow-x-auto relative shadow-md rounded-lg">
                    <table class="w-full text-sm text-left mx-auto text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-white uppercase dark:bg-gray-700 dark:text-gray-400 bg-teal-600">
                            <tr>
                                <th scope="col" class="py-3 px-6">
                                    No
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    No Dokumen
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Nama Dokumen
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Tanggal Dibuat
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    File
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Action
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
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                               
                                </th>
                                <td class="py-4 px-6">
                               
                                </td>
                                <td class="py-4 px-6">
                               
                                </td>
                                <td class="py-4 px-6">
                                    
                                </td>
                                <td class="py-4 px-6">
                                    <a href="{{ url('/admin/document/edit/') }}" class="inline-flex items-center px-4 py-2 mb-1 bg-white border border-blue-400 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-blue-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-blue-400 active:bg-blue-50 disabled:opacity-25 transition">
                                        Edit
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
