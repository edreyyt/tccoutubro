<h1>Criar seu Anúncio</h1>
<a href="{{ url('/') }}">Voltar</a>

<div id="event-create-container" class="col-md-6 offset-md-3">
   <h2>Crie o seu evento! </h2>
   <form action="/post" method="POST" enctype="multipart/form-data">
       <div class="form-group">
          
          @csrf
       <div class="form-group">
           <label for="title">Qual será seu tipo de transação?</label>
           <select name="transacao" id="transacao" class="form-control">
               <option value="VE"> Venda </option>
               <option value="TR"> Troca </option>
               <option value="EM"> Empréstimo </option>
        </div>
        

        <div class="form-group">
           <label for="image">Imagem do Livro:</label>
           <input type="file" id="image" name="image" class="form-control-file">
        </div>  

        <div class="form-group">
           <label for="title">Livro:</label>
           <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Livro">
        </div>

        <div class="form-group">
           <label for="title">Descrição:</label>
           <textarea name="descr" id="descr" cols="20" rows="" class="forms-control" placeholder="Sobre o que o livro se trata?"> </textarea>
        </div>  

        <div class="form-group">
           <label for="title">Característica:</label>
           <input type="text" class="form-control" id="caract" name="caract" placeholder="Característica do Livro">
        </div>    


        <div class="form-group">
           <label for="title">Edição:</label>
           <input type="text" class="form-control" id="edicao" name="edicao" placeholder="Edição do Livro">
        </div>  


        <div class="form-group">
           <label for="title">Categoria:</label>
           <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Categoria do Livro">
        </div>   


        <div class="form-group">
           <label for="title">idioma:</label>
           <input type="text" class="form-control" id="idioma" name="idioma" placeholder="Idioma do Livro">
        </div>   


        <div class="form-group">
           <label for="title">Autor:</label>
           <input type="text" class="form-control" id="autor_nome" name="autor_nome" placeholder="Autor do Livro">
        </div>

        
        <div class="form-group">
           <label for="title">Editora:</label>
           <input type="text" class="form-control" id="editora_nome" name="editora_nome" placeholder="Editora do Livro">
        </div>    
        <input type="submit" class="btn btn-primary" value="Criar Anúncio!">
</div>
