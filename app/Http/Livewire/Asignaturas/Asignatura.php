<?php

namespace App\Http\Livewire\Asignaturas;

use Livewire\Component;

class Asignatura extends Component
{
    public $gestionar = "Clientes";
    public $datTable;

    public function mount()
    {
        $this->datTable = \App\Models\Asignatura::all();
    }

    public function render()
    {
        return view('livewire.asignaturas.asignatura');
    }
}
