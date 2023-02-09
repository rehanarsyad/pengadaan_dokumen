<x-app-layout>

    <x-slot name="header">
        <div class="flex flex-wrap">
            <div class="w-full sm:w-1/2">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Notification
                </h2>
            </div>
        </div>
    </x-slot>
    
    
    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                    <div class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    @foreach ($notifications as $notification)
                        <div class="mb-8 rounded-lg border border-gray-200 shadow-sm dark:border-gray-700 md:mb-12 md:grid-cols-2">
                            <figure class="flex flex-col justify-center items-center p-8 text-center bg-white rounded-t-lg border-b border-gray-200 md:rounded-t-none md:rounded-tl-lg md:border-r dark:bg-gray-800 dark:border-gray-700">
                                <blockquote class="mx-auto mb-4 max-w-2xl text-gray-500 lg:mb-8 dark:text-gray-400">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ $notification->data['no_surat'] ?? "" }}</h3>
                                    <p class="my-4 font-light">If you care for your time, I hands down would go with this."</p>
                                </blockquote>
                                <figcaption class="flex justify-center items-center space-x-3">
                                    <div class="space-y-0.5 font-medium dark:text-white text-left">
                                        <div>{{ $notification->data['name'] }}</div>
                                        <div class="text-sm font-light text-gray-500 dark:text-gray-400">{{ $notification->data['role'] ?? "" }}</div>
                                    </div>
                                </figcaption>    
                            </figure>
                        </div>


                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
