<?php

namespace App\Http\Livewire\Surat;

use App\Models\Surat;
use Livewire\Component;

class Delete extends Component
{
    public $idSurat;

    public function render()
    {
        return view('livewire.surat.delete');
    }

    public function mount($id)
    {
        $this->idSurat = $id;
    }

    public function deleteSurat()
    {
        $id = $this->idSurat;
        $surat = Surat::find($id);

        $surat->delete();

        return redirect()->to('/admin/surat')->with(['flash.banner' => "Surat Berhasil Dihapus"]);
    }
}
