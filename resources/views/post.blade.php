
<title> Libri </title>

<header>
<img height="60" width="60" src="/img/librisemfundo.png">
<a href="{{ url('/') }}" class="text-sm text-gray-700 underline dark:text-gray-500">Voltar</a>
<div id="search-container" class="col-md-12"> 
        <h1>Busque um Anúncio </h1>
        <form action="">
            <input type="text" id="search" name="search">
        </form>
    </div>
</header>


<div id="menu" class="container mx-auto px-4 lg:pt-24 lg:pb-64">
      <div class="flex flex-wrap text-center justify-center">
        <div class="w-full lg:w-6/12 px-4">
          <h2 class="text-4xl font-semibold text-black">Anúncios</h2>
          <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
            Listagem dos anúncios do usuário:
          </p>
        </div>
      </div>
        @forelse($post as $livro)
        <div class="col-span-2 sm:col-span-4 xl:col-span-4 justify-center" >
        <img src="public/img/imagem_anuncios">  
        <h3 class="font-semibold text-black">Nome do Livro: {{ $livro->nome }}</h3>
          
          <p>
         Categoria: {{ $livro->categoria }}
          </p>
          <p>
         Descrição: {{ $livro->descr }}
          </p>
          <p>
         Características: {{ $livro->caract }}
          </p>
          <p>
         Edição: {{ $livro->edicao }}
          </p>
          <p>
         Idioma: {{ $livro->idioma }}
          </p>
          <p>
         Autor :{{ $livro->autor_nome }}
          </p>
          <p>
        Editora:{{ $livro->editora_nome }}
          </p>
        </div>
        <div class="col-span-2 sm:col-span-1 xl:col-span-1 italic "></div>

    @empty 
    <p>Desculpe, mas não há anúncios. </p>
@endforelse