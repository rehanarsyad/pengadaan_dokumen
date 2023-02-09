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
                    <div id="toast-message-cta" class="p-4 w-full text-white bg-teal-600 rounded-lg shadow dark:bg-gray-800 dark:text-gray-400 m-2" role="alert">
                        <div class="flex">
                            <div class="ml-3 text-sm font-normal">
                                <span class="mb-1 text-sm font-semibold text-gray-600 dark:text-white">Jese Leos</span>
                                <div class="mb-2 text-sm font-normal">from system : {{ $notification->data['message'] ?? $notification->data['name'] . ' membuat surat baru' }}</div> 
                                <a href="#" class="inline-flex px-2.5 py-1.5 text-xs font-medium text-center text-white bg-teal-700 rounded-lg hover:bg-teal-800 focus:ring-4 focus:outline-none focus:ring-teal-300 dark:bg-teal-500 dark:hover:bg-teal-600 dark:focus:ring-teal-800">Verify</a>   
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
