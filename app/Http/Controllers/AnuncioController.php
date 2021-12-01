<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class AnuncioController extends Controller
{
    public function anuncios(){
        $post = Livro::All();

        return view  ('post', ['post' => $post]);

    }
}
