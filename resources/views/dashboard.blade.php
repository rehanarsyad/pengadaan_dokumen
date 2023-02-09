<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-3 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">

                    <div class="mt-8 text-2xl">
                        Welcome to Protokoler Sekda application!
                    </div>

                    <div class="mt-6 text-gray-500">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Non necessitatibus impedit maiores asperiores ab distinctio 
                        optio accusantium deserunt aperiam! Assumenda natus sunt 
                        necessitatibus? Repudiandae ab, veritatis rem quia ipsa facilis?
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2">

                    <div class="h-full border bg-teal-500 shadow-md shadow-teal-600 hover:bg-teal-600">
                        <a href="{{ route('surat') }}" class="text-center uppercase">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="p-2 w-12 relative text-white mx-auto">
  <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
</svg>

                            <h5 class="mb-2 py-5 text-2xl font-bold tracking-tight text-white dark:text-white">Surat</h5>
                        </a>
                        <div class="grid grid-cols-2 max-w-full max-h-full">
                            <div class="p-2 text-center">
                                <h3 class="uppercase font-semibold text-white">Total Surat</h3>
                                <p class="mb-3 font-normal text-white">{{ count($surat) }}</p>
                            </div>
                            <div class="p-2 text-center">
                                <h3 class="uppercase font-semibold text-white">Surat Verified</h3>
                                <p class="mb-3 font-normal text-white">{{ count($surat->whereNotNull('verified_at')) }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="h-full border bg-teal-500 shadow-xl shadow-teal-600 hover:bg-teal-600">
                        <a href="{{ route('user') }}" class="text-center uppercase">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="p-2 w-12 relative text-white mx-auto">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
</svg>

                            <h5 class="mb-2 py-5 text-2xl font-bold tracking-tight text-white dark:text-white">User</h5>
                        </a>
                        <div class="grid grid-cols-2 max-w-full max-h-full">
                            <div class="p-2 text-center">
                                <h3 class="uppercase font-semibold text-white">Total User</h3>
                                <p class="mb-3 font-normal text-white">{{ count($user) }}</p>
                            </div>
                            <div class="p-2 text-center">
                                <h3 class="uppercase font-semibold text-white">User Active</h3>
                                <p class="mb-3 font-normal text-white">{{ count($user->whereNull('deleted_at')) }}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
