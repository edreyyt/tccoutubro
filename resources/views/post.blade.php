@extends('layouts.main')

@section('title', 'Libri')

@section('content')

<title> Libri </title>

<header>

<img height="60" width="60" src="/img/librisemfundo.png">
<a href="{{ url('/') }}" class="text-sm text-gray-400 underline">Voltar</a>


<div id="menu" class="container mx-auto lg:pt-12 lg:pb-24 ">
          <div class="flex flex-wrap text-center justify-center">
            <div class=" lg:w-6/12 px-4">
              <h2 class="text-2xl font-semibold text-gray-400">Anúncios</h2>
              <p class="text-base leading-relaxed mt-4 mb-4 text-gray-500">
                Lista dos anúncios do usuário:
              </p>
            </div>
          </div>
  </header>
  
  
  <body class="bg-white">
        @forelse($livros as $livro)
    
        
        <div class="col-span-2 sm:col-span-3 xl:col-span-3 justify-center" >
        <img height="250" width="250" src="{{ asset('img/imagem_anuncios') . '/' . $livro->image}}">  
      
        <h3 class="text-gray-400 bg-center">Nome do Livro: {{ $livro->nome }}</h3>
          
          <p class="text-gray-400 bg-center md:justify-between">
         Categoria: {{ $livro->categoria }}
          </p>
          <p class="text-gray-400 bg-center">
         Descrição: {{ $livro->descr }}
          </p>
          <p class="text-gray-400 bg-center">
         Estado: {{ $livro->caract }}
          </p>
          <p class="text-gray-400 bg-center">
         Edição: {{ $livro->edicao }}
          </p>
          <p class="text-gray-400 bg-center">
         Idioma: {{ $livro->idioma }}
          </p>
          <p class="text-gray-400 bg-center">
         Autor :{{ $livro->autor_nome }}
          </p>
          <p class="text-gray-400 bg-center">
        Editora:{{ $livro->editora_nome }}
          </p>
          <a href="{{url('/postdetalhe/' . $livro->id) }}" class="text-gray-400 bg-center underline">Veja mais!</a>
        </div>
</body>
    @empty 
    <p>Desculpe, mas não há anúncios. </p>
@endforelse