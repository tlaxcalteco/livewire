<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Edit extends Component
{
    public $userId;
    public $name;
    public $last_name1;
    public $last_name2;
    public $email;
    public $phone;
    public $curp;
    public $rfc;
    public $nationality;
    public $place_born;
    public $user;

    public function mount($userId)
    {
        $this->userId = $userId;
        $user = User::findOrFail($userId);
        $this->name = $user->name;
        $this->last_name1 = $user->last_name1;
        $this->last_name2 = $user->last_name2;
        $this->email = $user->email;
        $this->phone = $user->phone;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
            'last_name1' => 'required',
            'last_name2' => 'required',
            'email' => 'required|email|unique:users,email,' . $this->userId,
            'phone' => 'required',
        ]);

        $user = User::findOrFail($this->userId);
        $user->update([
            'name' => $this->name,
            'last_name1' => $this->last_name1,
            'last_name2' => $this->last_name2,
            'email' => $this->email,
            'phone' => $this->phone,
        ]);

        session()->flash('message', 'Usuario actualizado exitosamente.');
        return redirect()->route('edit-user', ['userId' => $this->userId]);
    }

    public function render()
    {
        return view('livewire.edit');
    }
}
