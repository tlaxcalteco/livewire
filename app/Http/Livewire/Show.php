<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class Show extends Component
{
    use WithFileUploads;
    public $name;
    public $last_name1;
    public $last_name2;
    public $email;
    public $phone;
    public $curp;
    public $rfc;
    public $nationality;
    public $place_born;
    public $account_number_bank;
    public $bank;
    public $clabe;
    public $infonavit;
    public $position;
    public $date_start;
    public $remplacement_employee_id;
    public $remplacement_employee_name;
    public $remplacement_employee_reasons;
    public $remplacement_employee_date;
    public $scholarship;
    public $gender;
    public $marital_status;
    public $street;
    public $number;
    public $suburb;
    public $colony;
    public $city;
    public $state;
    public $cp;
    public $editUserId = null;//Para editar
    public $file;
    public $users;

    public function mount()//sirve para inicializar variables
    {
        $this->users = User::all();
    }

    public function file()
    {
        $this->validate([
            'file' => 'image|max:1024'
        ]);
    }

    public function editUser($userId)//Para editar
    {
        $user = User::findOrFail($userId);//busca el usuario
        $this->editUserId = $userId;
        $this->name = $user->name;
        $this->last_name1 = $user->last_name1;
        $this->last_name2 = $user->last_name2;
        $this->email = $user->email;
        $this->phone = $user->phone;
        $this->nationality = $user->nationality;
        $this->place_born = $user->place_born;
    }

    public function cancelEdit()//Para editar
    {
        $this->editUserId = null;//sirve para inicializar variables
        $this->reset([
            'name', 'last_name1', 'last_name2', 'email', 'phone', 'curp', 'rfc', 'nationality', 'place_born'
        ]);
    }

    public function update()//la funcion para actualizar
    {
        $this->validate([
            'name' => 'required',
            'last_name1' => 'required',
            'last_name2' => 'required',
            'email' => 'required|email|unique:users,email,' . $this->editUserId,
            'phone' => 'required',
            'file' => 'nullable|mimes:jpeg,png,pdf|max:2048',
        ]);

        $user = User::findOrFail($this->editUserId);
        if ($this->file) {
            // Si se sube un archivo, se almacena en el directorio 'public/Docs'
            Storage::delete($user->file_path); // Borra el archivo anterior (si existe) y almacena el nuevo en el directorio 'public/Docs'
            $filePath = $this->file->store('public/Docs');
        } else {
            $filePath = $user->file_path;
        }

        $user = User::findOrFail($this->editUserId);
        $user->update([
            'name' => $this->name,
            'last_name1' => $this->last_name1,
            'last_name2' => $this->last_name2,
            'email' => $this->email,
            'phone' => $this->phone,
            'nationality' =>$this->nationality,
            'place_born' =>$this->place_born,
            'file_path' => $filePath,
        ]);

        $this->cancelEdit();
        session()->flash('message', 'Usuario actualizado exitosamente.');
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'last_name1' => 'required',
            'last_name2' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required',
            'curp' => 'required|unique:users,curp',
            'file' => 'nullable|mimes:jpeg,png,pdf|max:2048',
        ]);

        if ($this->file) {
            $filePath = $this->file->store('public/Docs');
        }

        User::create([
            'name' => $this->name,
            'last_name1' => $this->last_name1,
            'last_name2' => $this->last_name2,
            'email' => $this->email,
            'phone' => $this->phone,
            'curp' => $this->curp,
            'rfc' => $this->rfc,
            'nationality' => $this->nationality,
            'place_born' => $this->place_born,
            'account_number_bank' => $this->account_number_bank,
            'bank' => $this->bank,
            'clabe' => $this->clabe,
            'infonavit' => $this->infonavit,
            'position' => $this->position,
            'date_start' => $this->date_start,
            'remplacement_employee_id' => $this->remplacement_employee_id,
            'remplacement_employee_name' => $this->remplacement_employee_name,
            'remplacement_employee_reasons' => $this->remplacement_employee_reasons,
            'remplacement_employee_date' => $this->remplacement_employee_date,
            'scholarship' => $this->scholarship,
            'gender' => $this->gender,
            'marital_status' => $this->marital_status,
            'street' => $this->street,
            'number' => $this->number,
            'suburb' => $this->suburb,
            'colony' => $this->colony,
            'city' => $this->city,
            'state' => $this->state,
            'cp' => $this->cp,
            'file_path' => $filePath ?? null,
        ]);

        session()->flash('message', 'Usuario registrado exitosamente.');

        //  return redirect()->route('user-list');
        $this->reset(['name', 'last_name1', 'last_name2', 'email', 'phone', 'curp','rfc','nationality','place_born','account_number_bank','bank','clabe','infonavit','position','date_start',
        'remplacement_employee_id','remplacement_employee_name','remplacement_employee_reasons','remplacement_employee_date','scholarship','gender','marital_status','street','number','suburb','colony','city','state','cp','file']);
    }

    public function render()
    {
        return view('livewire.show');
    }
}
