<?php

namespace App\Http\Livewire\Surat;

use App\Models\Surat;
use Livewire\Component;

class Edit extends Component
{
    public $idSurat, $surat;
    public $hour;
    public $activity;
    public $date_signin;
    public $location;
    public $odp_invite, $assistant_officer, $officer, $protokol_team, $clothes, $description, $verified_at;

    public function render()
    {
        return view('livewire.surat.edit');
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

    public function processUpdate()
    {
        $this->validate([
            'date_signin' => 'required|date',
            'activity' => 'required',
            'location' => 'required',
            'odp_invite' => 'required'
        ]);

        try {

            $surat = Surat::find($this->idSurat);
            $updateSurat = $surat->update([
                'date_signin' => $this->date_signin,
                'hour' => $this->hour,
                'activity' => $this->activity,
                'location' => $this->location,
                'odp_invite' => $this->odp_invite,
                'assistant_officer' => $this->assistant_officer,
                'officer' => $this->officer,
                'protokol_team' => $this->protokol_team,
                'clothes' => $this->clothes,
                'description' =>$this->description,
            ]);
            if($updateSurat){
                return redirect()->route('surat')->with(['flash.banner' => "Surat Berhasil Diedit"]);
            }

            return redirect()->route('surat')->with(['flash.banner' => "Surat Gagal Diedit", 'flash.bannerStyle' => 'danger']);

        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
