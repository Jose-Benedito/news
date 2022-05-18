@extends('layouts.main')

@section('title', 'BTNH- Postagem')

@section('content')



<div class="col-md-4 offset-md-3">
<!-- Formulário de notícias -->
<h2 class="text-center m-5">Login</h2>
<form action="/posts" method="POST">
    @csrf 
    <div class="form-group " id="noticia">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">

    </div>
    
  
    <div class="form-group">
        <label for="password">Senha:</label>
        <input type="password" class="form-control" id="password" name="password" >
        
    </div>
    <br> 
    <button type="submit" class="btn btn-primary" >Logar</button>
    <br><br>
    <a href="registration">Novo registro</a>

</form>
</div>

@endsection