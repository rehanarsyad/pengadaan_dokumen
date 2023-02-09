<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class Delete extends Component
{
    public $idUser;

    public function render()
    {
        return view('livewire.user.delete');
    }

    public function mount($id)
    {
        $this->idUser = $id;
    }

    public function deleteUser()
    {
        try {
            $id = $this->idUser;
            $user = User::find($id);
    
            $user->delete();
    
            return redirect()->route('user')->with(['flash.banner' => "User Berhasil Dihapus"]);
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
