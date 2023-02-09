<div>
    <x-slot name="trigger">
        <button id="dropdownNotificationButton" data-dropdown-toggle="dropdownNotification" class="inline-flex items-center text-sm font-medium text-center text-gray-500 hover:text-gray-900 focus:outline-none dark:hover:text-white dark:text-gray-400" type="button"> 
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path></svg>
            <div class="flex relative">
            <div class="inline-flex absolute -top-4 -right-1 justify-center w-auto h-auto text-xs font-bold text-white bg-red-500 rounded-full border-2 border-white dark:border-gray-900">{{ $countUnreadNotif }}</div>
            </div>
        </button>
    </x-slot>

    <x-slot name="content">
        <div id="dropdownNotification" class="w-full max-w-sm bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-800 dark:divide-gray-700" aria-labelledby="dropdownNotificationButton">
            <div class="block py-2 px-4 font-medium text-center text-gray-700 bg-gray-50 dark:bg-gray-800 dark:text-white">
                Notifications
            </div>
            <div class="divide-y divide-gray-100 dark:divide-gray-700">
                @foreach ($notifications as $notification)
                <a href="{{ url('/admin/notification') . '/' . $notification->id}}" class="flex py-3 px-4 hover:bg-gray-100 dark:hover:bg-gray-700">
                <div class="pl-3 w-full">
                    <div class="{{ $notification->read_at ? 'text-gray-400' : 'text-gray-800' }} text-sm mb-1.5 dark:text-gray-400">
                        from
                        <span class="font-semibold {{ $notification->read_at ? 'text-gray-500' : 'text-gray-900' }} dark:text-white">
                            system
                        </span>: {{ $notification->data['message'] ?? $notification->data['name'] . ' membuat surat baru' }}
                    </div>
                    <div class="text-xs text-blue-600 dark:text-blue-500">
                        @php ($time = date_diff($notification->created_at, now() ) )
                        <?php 
                            if($time->d){
                                echo $time->d . ' hari ';
                            }

                            if($time->h){
                                echo $time->h . ' jam ';
                            }

                            if($time->i && !$time->d) {
                                echo $time->i . ' menit ';
                                if($time->s && !$time->h){
                                    echo $time->s . ' detik ';
                                }
                            }
                            
                        ?>
                        yang lalu
                    </div>
                </div>
                </a>
                @endforeach
            </div>
            <a href="{{ route('notifications') }}" class="block py-2 text-sm font-medium text-center text-gray-900 bg-gray-50 hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white">
                <div class="inline-flex items-center ">
                <svg class="mr-2 w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>
                    View all
                </div>
            </a>
        </div>
    </x-slot>
</div>
