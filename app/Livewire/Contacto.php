<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

class Contacto extends Component
{
    public $nombre;
    public $email;
    public $mensaje;

    public function updated($field)
    {
        $this->validateOnly($field, [
            'nombre' => 'required|max:30',
            'email' => 'required|email|max:30',
            'mensaje' => 'required|max:100',
        ]);
    }

    public function submitForm()
    {
        $this->validate([
            'nombre' => 'required|max:30|alpha_dash',
            'email' => 'required|email|max:30',
            'mensaje' => 'required|max:300'
        ]);
    }

    public function render()
    {
        return view('livewire.contacto');
    }
}