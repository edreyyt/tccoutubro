<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CriarController extends Controller
{  
    public function termos(){
        return view('anuncios.termos');
    }



    public function posts(){
        return view  ('anuncios.criar');

        
    }


    public function anuncio_page(Request $request){

        $anuncio = Livro::findOrFail($request->id);//Livro::All();
        return view('anuncios.page')->withAnuncio($anuncio);
        
        $contato = Auth::user()->Numtel->get();
        return view('anuncios.page', ['contato' => $contato]);


          
    }

    public function deletar($id){
        Livro::findOrFail($id)->forceDelete();


        return redirect ('/')->with('msg', 'Anúncio deletado com sucesso!');
    }
   
    public function editar($id){
        $editar = Livro::findOrFail($id);

        return view('anuncios.editar', ['editar' => $edit]);


    }
   
    
    public function livros(Request $request){
            $criar = new Livro;

            $criar->user_id = Auth::user()->id;
            $criar->nome = $request->title;
            $criar->descr = $request->descr;
            $criar->caract = $request->caract;
            $criar->edicao = $request->edicao;
            $criar->status = $request->status;
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

    // public function show($id){

    // }
}
