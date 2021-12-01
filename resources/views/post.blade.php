@extends('layouts.main')

@section('title', 'Libri')

@section('content')

<title> Libri </title>

<header>

<img height="60" width="60" src="/img/librisemfundo.png">
<a href="{{ url('/') }}" class="text-sm text-gray-400 underline">Voltar</a>
<div id="search-container" class="col-md-12"> 
        <h1 class="mt-4 mb-4 text-gray-400">Busque um Anúncio </h1>
        <form action="">
            <input type="text" id="search" name="search">
        </form>
    </div>
</header>
<body class="pt-8 pb-6 bg-gray-900">

<div id="menu" class="container mx-auto px-4 lg:pt-24 lg:pb-64">
      <div class="flex flex-wrap text-center justify-center">
        <div class="w-full lg:w-6/12 px-4">
          <h2 class="text-4xl font-semibold text-gray-400">Anúncios</h2>
          <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
            Listagem dos anúncios do usuário:
          </p>
        </div>
      </div>
        @forelse($post as $livro)
        <div class="col-span-2 sm:col-span-4 xl:col-span-4 justify-center" >
        <img src="public/img/imagem_anuncios">  
        <h3 class="text-gray-400 bg-center">Nome do Livro: {{ $livro->nome }}</h3>
          
          <p class="text-gray-400 bg-center">
         Categoria: {{ $livro->categoria }}
          </p>
          <p class="text-gray-400 bg-center">
         Descrição: {{ $livro->descr }}
          </p>
          <p class="text-gray-400 bg-center">
         Características: {{ $livro->caract }}
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
        </div>
        <div class="col-span-2 sm:col-span-1 xl:col-span-1 italic "></div>
</body>
    @empty 
    <p>Desculpe, mas não há anúncios. </p>
@endforelse