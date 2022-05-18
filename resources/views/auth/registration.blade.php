@extends('layouts.main')

@section('title', 'BTNH- Postagem')

@section('content')



<div class="col-md-4 offset-md-3">
<!-- Formulário de notícias -->
<h2 class="text-center m-5">Registro para login</h2>
<form action="register-user" method="POST">
    @if(Session::has('success'))
    <div class="alert alert-success">{{Session::get('success')}}</div>
    @endif
    @if(Session::has('fail'))
    <div class="alert alert-danger">{{Session::get('fail')}}</div>
    @endif  
    @csrf 
    <div class="form-group " id="noticia">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Nome">
        <span class="text-danger">@error('name'){{ $message }} @enderror</span>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="email válido">
        <span class="text-danger">@error('email'){{ $message }} @enderror</span>
    </div>
  
    <div class="form-group">
        <label for="password">Senha:</label>
        <input type="password" class="form-control" id="password" name="password" >
        <span class="text-danger">@error('password'){{ $message }} @enderror</span> 
    </div>
    <br> 
    <button type="submit" class="btn btn-primary">Registrar</button>
    <br><br>
    <a href="login">Login</a>
</form>
</div>

@endsection