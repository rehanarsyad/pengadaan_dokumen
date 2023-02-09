<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Notification extends Component
{
    public function render()
    {
        $notifications = auth()->user()->notifications;
        $countUnreadNotif = count(auth()->user()->unreadNotifications);
        return view('livewire.notification', compact(['notifications', 'countUnreadNotif']));
    }
}
