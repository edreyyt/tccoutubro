<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;
use App\Models\User;

class AnuncioController extends Controller
{
    public function anuncios(){
        $livros = Livro::All();
        // $post = User::All();
        return view('post')->withLivros($livros);

    }

    public function termos(){
        return view('termos');
    }
}
