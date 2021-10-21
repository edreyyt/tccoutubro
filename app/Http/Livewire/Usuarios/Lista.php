<?php

namespace App\Http\Livewire\Usuarios;

use Livewire\Component;
use app\models\user;

class Lista extends Component
{
    public function render()
    {
        $usuarios = User::all();
        return view('livewire.usuarios.lista')->withusuarios($usuarios);
    }
}
