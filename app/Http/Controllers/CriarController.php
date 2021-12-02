<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;
use Illuminate\Support\Facades\Auth;

class CriarController extends Controller
{  
    public function posts(){
        return view  ('anuncios.criar');

        
    }
    public function livros(Request $request){
            $criar = new Livro;

            $criar->user_id = Auth::user()->id;
            $criar->nome = $request->title;
            $criar->descr = $request->descr;
            $criar->caract = $request->caract;
            $criar->edicao = $request->edicao;
            $criar->categoria = $request->categoria;
            $criar->idioma = $request->idioma;
            $criar->autor_nome = $request->autor_nome;
            $criar->editora_nome = $request->editora_nome;

            //Imagem
            if($request->hasFile('image') && $request->file('image')->isValid()){

                $requestImage = $request->image;
                
                $extensionImage = $request->image->extension();

                $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extensionImage;

                $requestImage->move(public_path('\img\imagem_anuncios'), $imageName);

                $criar->image = $imageName; 

            }


            $criar->save();


            return redirect ('/')->with('msg', 'Anúncio criado com sucesso!');


    }

    public function show($id){

    }
}
