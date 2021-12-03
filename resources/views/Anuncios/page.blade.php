@extends('layouts.main')

@section('title', 'Libri')

@section('content')

<html>
<header class="">

<img height="100" width="100" src="/img/librisemfundo.png">
<a href="{{ url('/') }}" class="text-sm text-gray-400 underline"><-Voltar</a>
</header>


<body>

<img height="250" width="250" src="{{ asset('img/imagem_anuncios') . '/' . $anuncio->image}}">  
<h1>Nome do Livro: {{$anuncio-> nome}}<h1>
<p>Sinopse do Livro: {{$anuncio-> descr}}</p>
<p>Condição do Livro: {{$anuncio-> caract}}</p>
<p>Tipo de Transação: {{$anuncio-> status}}</p>
<p>Edição do Livro: {{$anuncio-> edicao}}</p>
<p>Categoria do Livro: {{$anuncio-> categoria}}</p>
<p>Idioma do Livro: {{$anuncio-> idioma}}</p>
<p>Editora do Livro: {{$anuncio-> edicao}}</p>
<p>Nome do anunciante: {{$anuncio->proprietario->name}}</p>
<p>Contato do Anunciante: {{$anuncio->proprietario->Numtel}}</p>

</body>


@if(Auth::user()->id == $anuncio->proprietario->id)

    <form action="/post/delete/{{$anuncio->id}}" method="post" >
    @csrf
    @method('delete')
    <input type="submit" class="btn btn-primary text-red border-black" value="DELETAR">
    </form>

@endif
</html>




@endsection