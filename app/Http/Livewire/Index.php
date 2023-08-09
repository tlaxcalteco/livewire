<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;

class Index extends Component
{
    use WithPagination;
    public $paginate = 10;
    public $search = '';
    public $orderBy = 'id';
    public $order = 'desc';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $postulates = User::where('name','like', '%'.$this->search. '%')
        ->orWhere('last_name1','like', '%'.$this->search. '%')
        ->orWhere('last_name2','like', '%'.$this->search. '%')
        ->orWhere('email','like', '%'.$this->search. '%')
        ->orWhere('phone','like', '%'.$this->search. '%')
        ->orWhere('curp','like', '%'.$this->search. '%')
        ->orWhere('rfc','like', '%'.$this->search. '%')
        ->orWhere('nationality', 'like', '%'.$this->search. '%')
        ->orWhere('place_born', 'like', '%'.$this->search. '%')
        ->orWhere('account_number_bank', 'like', $this->search. '%')
        ->orWhere('bank', 'like', $this->search. '%')
        ->orWhere('clabe', 'like', $this->search. '%')
        ->orWhere('infonavit', 'like', $this->search. '%')
        ->orWhere('position', 'like', '%'.$this->search. '%')
        ->orWhere('date_start', 'like', '%'.$this->search. '%')
        ->orWhere('remplacement_employee_id', 'like', '%'.$this->search. '%')
        ->orWhere('remplacement_employee_name', 'like', '%'.$this->search. '%')
        ->orWhere('remplacement_employee_reasons', 'like', '%'.$this->search. '%')
        ->orWhere('remplacement_employee_date', 'like', '%'.$this->search. '%')
        ->orWhere('scholarship', 'like', '%'.$this->search. '%')
        ->orWhere('gender', 'like', '%'.$this->search. '%')
        ->orWhere('marital_status', 'like', '%'.$this->search. '%')
        ->orWhere('street', 'like', '%'.$this->search. '%')
        ->orWhere('number', 'like', '%'.$this->search. '%')
        ->orWhere('suburb', 'like', '%'.$this->search. '%')
        ->orWhere('colony', 'like', '%'.$this->search. '%')
        ->orWhere('city', 'like', '%'.$this->search. '%')
        ->orWhere('state', 'like', '%'.$this->search. '%')
        ->orWhere('cp', 'like', '%'.$this->search. '%')
        ->orderBy($this->orderBy, $this->order)
        ->paginate($this->paginate);
        return view('livewire.index', compact('postulates'));
    }

    public function destroy($id)
    {
        $postulates = User::find($id);
        $postulates->delete();
        $this->emit('alert', 'El postulante se eliminó correctamente');
    }
}
