<?php

namespace App\Http\Livewire\Surat;

use App\Models\Surat;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;

use App\Notifications\UserNotification;
use Illuminate\Support\Facades\Notification;


class Create extends Component
{
    public $idSurat, $surat;
    public $hour;
    public $activity;
    public $date_signin;
    public $location;
    public $odp_invite, $assistant_officer, $officer, $protokol_team, $clothes, $description, $verified_at;

    public function render()
    {
        return view('livewire.surat.create');
    }

    public function tes()
    {
        dd('rehan');
    }

    public function processForm()
    {
        $this->validate([
            'date_signin' => 'required|date',
            'activity' => 'required',
            'location' => 'required',
            'odp_invite' => 'required'
        ]);

        $newSurat = Surat::create([
            'letter_number' => 'P12-UT6-' . strtoupper(Str::random(3)),
            'date_signin' => $this->date_signin,
            'hour' => $this->hour,
            'activity' => $this->activity,
            'location' => $this->location,
            'odp_invite' => $this->odp_invite,
            'created_by' => request()->user()->id
        ]);

        if($newSurat){
            $user = User::whereHas('roles', function ($query) {
                $query->whereIn('name', ['Admin', 'Tim Protokol']);
            })->get();

            $data = [
                'name' => auth()->user()->name,
                'email' => auth()->user()->email,
                'role' => auth()->user()->roles()->first()->name,
                'no_surat' => $newSurat->letter_number,
                'message' => auth()->user()->name . ' membuat surat baru'
            ];

            Notification::send($user, new UserNotification($data));
            
            return redirect('/admin/surat')->with('flash.banner', 'Surat Berhasil Ditambahkan');
        }

        return redirect('/admin/surat')->with(['flash.banner' => 'Surat Gagal Ditambahkan', 'flash.bannerStyle' => 'danger']);
    }
}
