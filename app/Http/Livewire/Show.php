<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;


class Show extends Component
{
    use WithFileUploads;
    use WithPagination;

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
    public $file;
    public $postulateId;

    public function mount($postulateId = null)
    {
        if($postulateId){
            $postulate          = User::find($postulateId);
            if($postulate){
                $this->name         = $postulate->name;
                $this->last_name1   = $postulate->last_name1;
                $this->last_name2   = $postulate->last_name2;
                $this->email        = $postulate->email;
                $this->phone        = $postulate->phone;
                $this->curp         = $postulate->curp;
                $this->rfc          = $postulate->rfc;
                $this->nationality  = $postulate->nationality;
                $this->place_born   = $postulate->place_born;
                $this->account_number_bank  = $postulate->account_number_bank;
                $this->bank         = $postulate->bank;
                $this->clabe        = $postulate->clabe;
                $this->infonavit    = $postulate->infonavit;
                $this->position     = $postulate->position;
                $this->date_start   = $postulate->date_start;
                $this->remplacement_employee_id         = $postulate->remplacement_employee_id;
                $this->remplacement_employee_name       = $postulate->remplacement_employee_name;
                $this->remplacement_employee_reasons    = $postulate->remplacement_employee_reasons;
                $this->remplacement_employee_date       = $postulate->remplacement_employee_date;
                $this->scholarship                      = $postulate->scholarship;
                $this->gender                           = $postulate->gender;
                $this->marital_status                   = $postulate->marital_status;
                $this->street                           = $postulate->street;
                $this->number                           = $postulate->number;
                $this->suburb                           = $postulate->suburb;
                $this->colony                           = $postulate->colony;
                $this->city                             = $postulate->city;
                $this->state                            = $postulate->state;
                $this->cp                               = $postulate->cp;
                $this->file                             = $postulate->file_path;
            }
        }
    }

    public function file()
    {
        $this->validate([
            'file' => 'nullable|image|max:1024',
        ]);
    }

    public function storeUpdate()
    {
        $this->validate([
            'name'                             => 'required|string',
            'last_name1'                       => 'required|string',
            'last_name2'                       => 'required|string',
            'email'                            => 'required|email',
            'phone'                            => 'required|numeric',
            'curp'                             => 'required|string',
            'rfc'                              => 'required|string',
            'nationality'                      => 'required|string',
            'place_born'                       => 'required|string',
            'account_number_bank'              => 'required|numeric',
            'bank'                             => 'required|string',
            'clabe'                            => 'required|numeric',
            'infonavit'                        => 'required|numeric',
            'position'                         => 'required|string',
            'date_start'                       => 'required|date',
            'remplacement_employee_id'         => 'nullable|string',
            'remplacement_employee_name'       => 'nullable|string',
            'remplacement_employee_reasons'    => 'nullable|string',
            'remplacement_employee_date'       => 'nullable|date',
            'scholarship'                      => 'required|string',
            'gender'                           => '',
            'marital_status'                   => 'required|string',
            'street'                           => 'required|string',
            'number'                           => 'required|numeric',
            'suburb'                           => 'required|string',
            'colony'                           => 'required|string',
            'city'                             => 'required|string',
            'state'                            => 'required|string',
            'cp'                               => 'required|numeric',
        ]);
        $data = [
            'name'                             => $this->name,
            'last_name1'                       => $this->last_name1,
            'last_name2'                       => $this->last_name2,
            'email'                            => $this->email,
            'phone'                            => $this->phone,
            'curp'                             => $this->curp,
            'rfc'                              => $this->rfc,
            'nationality'                      => $this->nationality,
            'place_born'                       => $this->place_born,
            'account_number_bank'              => $this->account_number_bank,
            'bank'                             => $this->bank,
            'clabe'                            => $this->clabe,
            'infonavit'                        => $this->infonavit,
            'position'                         => $this->position,
            'date_start'                       => $this->date_start,
            'remplacement_employee_id'         => $this->remplacement_employee_id,
            'remplacement_employee_name'       => $this->remplacement_employee_name,
            'remplacement_employee_reasons'    => $this->remplacement_employee_reasons,
            'remplacement_employee_date'       => $this->remplacement_employee_date,
            'scholarship'                      => $this->scholarship,
            'gender'                           => $this->gender,
            'marital_status'                   => $this->marital_status,
            'street'                           => $this->street,
            'number'                           => $this->number,
            'suburb'                           => $this->suburb,
            'colony'                           => $this->colony,
            'city'                             => $this->city,
            'state'                            => $this->state,
            'cp'                               => $this->cp,
        ];

        if ($this->postulateId) {
            User::find($this->postulateId)->update($data);
            return redirect()->route('postulate.index')
                ->with('message', 'Postulante actualizado correctamente.');
        } else {
            User::create($data);
            return redirect()->route('postulate.index')
                ->with('message', 'Postulante creado correctamente.');
        }        
    }

    public function render()
    {
        return view('livewire.show');
    }
}
