<?php

namespace App\Http\Livewire\Surat;

use App\Models\Surat;
use App\Models\User;
use App\Notifications\UserNotification;
use Illuminate\Support\Facades\Notification;
use Livewire\Component;

class Verify extends Component
{
    public $idSurat, $surat;
    public $hour;
    public $activity;
    public $date_signin;
    public $location;
    public $odp_invite, $assistant_officer, $officer, $protokol_team, $clothes, $description, $verified_at;

    public function render()
    {
        return view('livewire.surat.verify');
    }

    public function mount($surat)
    {
        $this->fill([
            'idSurat' => $surat['id'],
            'hour' => $surat['hour'],
            'activity' => $surat['activity'],
            'date_signin' => $surat['date_signin'],
            'location' => $surat['location'],
            'odp_invite' => $surat['odp_invite'],

            'assistant_officer' => $surat['assistant_officer'],
            'officer' => $surat['officer'],
            'protokol_team' => $surat['protokol_team'],
            'clothes' => $surat['clothes'],
            'description' => $surat['description'],
            'verified_at' => $surat['verified_at']
        ]);
    }

    public function processVerify()
    {
        $this->validate([
            'date_signin' => 'required|date',
            'activity' => 'required',
            'location' => 'required',
            'odp_invite' => 'required',
            'assistant_officer' => 'required',
            'officer' => 'required',
            'protokol_team' => 'required',
            'clothes' => 'required',
            'description' => 'required',
        ]);

        try {

            $surat = Surat::find($this->idSurat);
            $verifySurat = $surat->update([
                'date_signin' => $this->date_signin,
                'hour' => $this->hour,
                'activity' => $this->activity,
                'location' => $this->location,
                'odp_invite' => $this->odp_invite,
                'assistant_officer' => $this->assistant_officer,
                'officer' => $this->officer,
                'protokol_team' => $this->protokol_team,
                'clothes' => $this->clothes,
                'description' => $this->description,
                'verified_at' => now(),
            ]);
            if($verifySurat){
                $user = User::find($surat->created_by);
                
                $data = [
                    'name' => auth()->user()->name,
                    'email' => auth()->user()->email,
                    'role' => auth()->user()->roles()->first()->name,
                    'no_surat' => $surat->letter_number,
                    'message' => 'Surat Anda Telah Diverifikasi Oleh Tim Protokol',
                ];
    
                Notification::send($user, new UserNotification($data));
                return redirect()->route('surat')->with(['flash.banner' => "Surat Telah Diverifikasi"]);
            }

            return redirect()->route('surat')->with(['flash.banner' => "Surat Gagal Diverifikasi", 'flash.bannerStyle' => 'danger']);

        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
