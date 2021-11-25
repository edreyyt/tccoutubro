<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class AnuncioController extends Controller
{
    public function Telacriar(){
        $post = Livro::All();
        return view  ('livewire.post', ['post' => $post]);

    }
}
