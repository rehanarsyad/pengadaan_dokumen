<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Livewire\Component;

class Edit extends Component
{
    public $idUser, $name, $email, $role_name;

    public function render()
    {
        return view('livewire.user.edit',[
            'role' => Role::all()
        ]);
    }

    public function mount($user)
    {
        $role = $user->roles()->first()->name;
        $this->fill([
            'user' => $user,
            'idUser' => $user['id'],
            'name' => $user['name'],
            'email' => $user['email'],
            'role_name' => $role
        ]);
    }

    public function processUpdate()
    {
        $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'role_name' => ['required']
        ]);

        try {
            $user = User::find($this->idUser);
    
            $user->update([
                'name' => $this->name,
                'email' => $this->email
            ]);

            $user->removeRole($user->roles()->first()->name);
            $user->assignRole($this->role_name);

            return redirect()->route('user')->with(['flash.banner' => 'User Berhasil Di Edit']);

        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
