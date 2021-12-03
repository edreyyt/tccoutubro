<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        $home = Livro::All();
    }

    public function welcome(){
        $livros = Livro::All();

        return view('welcome')->withLivros($livros);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
  
        $livros = Livro::All();

        return view('welcome')->withLivros($livros);
    }

}
