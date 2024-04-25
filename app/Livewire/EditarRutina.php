<?php

namespace App\Livewire;

use Livewire\Component;

class EditarRutina extends Component
{
    public $rutina;
    public function render()
    {
        return view('livewire.editar-rutina');
    }
    public function mount($rutina)
    {
        $this->rutina = $rutina;
    }
}
