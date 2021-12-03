@extends('layouts.main')

@section('title', 'Libri')


<html>
<head>   
</head>
<header class=" pt-8 pb-6 bg-white ">
   <a href="{{ url('/') }}" class="text-black underline  text-align: left">Voltar!</a>

</header>
   
   
   <div id="event-create-container" class="col-md-6 offset-md-3 text-gray-400">
      <h2 class="text-gray-400">Crie o seu Anúncio! </h2>
      <form action="/post" method="POST" enctype="multipart/form-data">
          <div class="form-group">  
<body class="bg-white" >          
          @csrf
       <div class="form-group text-gray-400">
           <label for="title">Qual será seu tipo de transação?</label>
           <select name="status" id="status" class="form-control">
               <option value="VENDA"> Venda </option>
               <option value="TROCA"> Troca </option>
               <option value="EMPRESTIMO"> Empréstimo </option>
        </div>
        

        <div class="form-group text-gray-400 bg-center">
           <label for="image">Imagem do Livro:</label>
           <input type="file" id="image" name="image" class="form-control-file">
        </div>  

        <div class="form-group text-gray-400 bg-center">
           <label for="title">Livro:</label>
           <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Livro">
        </div>

        <div class="form-group text-gray-400">
           <label for="title">Descrição:</label>
           <textarea name="descr" id="descr" cols="20" rows="" class="forms-control" placeholder="Sobre o que o livro se trata?"> </textarea>
        </div>  

        <div class="form-group text-gray-400 ">
           <label for="title">Estado:</label>
           <input type="text" class="form-control" id="caract" name="caract" placeholder="Como o livro está fisicamente ?">
        </div>    


        <div class="form-group text-gray-400">
           <label for="title">Edição:</label>
           <input type="text" class="form-control" id="edicao" name="edicao" placeholder="Edição do Livro">
        </div>  


        <div class="form-group text-gray-400">
           <label for="title">Categoria:</label>
           <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Categoria do Livro">
        </div>   


        <div class="form-group text-gray-400">
           <label for="title">idioma:</label>
           <input type="text" class="form-control" id="idioma" name="idioma" placeholder="Idioma do Livro">
        </div>   


        <div class="form-group text-gray-400">
           <label for="title">Autor:</label>
           <input type="text" class="form-control" id="autor_nome" name="autor_nome" placeholder="Autor do Livro">
        </div>

        
        <div class="form-group text-gray-400">
           <label for="title">Editora:</label>
           <input type="text" class="form-control" id="editora_nome" name="editora_nome" placeholder="Editora do Livro">
        </div>    
        <input type="submit" class="btn btn-primary text-black border-black bg-gray" value="Criar Anúncio!">
</div>
</body>
</html>
@section('content')

@endsection