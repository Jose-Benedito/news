@extends('layouts.main')

@section('title', 'BTNH- Postagem')

@section('content')



<div class="col-md-4 offset-md-3">
<!-- Formulário de notícias -->
<h2 class="text-center m-5">Login</h2>
<form action="/login-user" method="POST">
@if(Session::has('success'))
    <div class="alert alert-success">{{Session::get('success')}}</div>
    @endif
    @if(Session::has('fail'))
    <div class="alert alert-danger">{{Session::get('fail')}}</div>
    @endif 
    @csrf 
    <div class="form-group " id="noticia">
        <label for="email">Email:</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="email">
        <span class="text-danger">@error('email'){{ $message }} @enderror</span>
    </div>
    
  
    <div class="form-group">
        <label for="password">Senha:</label>
        <input type="password" class="form-control" id="password" name="password" >
        <span class="text-danger">@error('password'){{ $message }} @enderror</span> 
    </div>
    <br> 
    <button type="submit" class="btn btn-primary" >Logar</button>
    <br><br>
    <button class="btn btn-outline-primary"><a href="registration">Cadastra-se</a></button>

</form>
</div>

@endsection