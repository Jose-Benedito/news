@extends('layouts.main')

@section('title', 'BTNH- Postagem')

@section('content')

<section>
<h2>{{ $titulo }}</h2>
<img src="/image/desktop-cadastro.jpeg" class="img-fluid mb-5" alt="...">
@if($busca != '')
    <p>O Usuário está buscando por: {{ $busca }}</p>
@endif

<!-- Formulário de notícias -->
<h2 class="text-center m-5">Postagem de notícias</h2>
<form action="/posts" method="POST" enctype="multipart/form-data">
    @csrf 
    <div class="form-group " id="noticia">
        <label for="title">Título:</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Titulo da notícia">

    </div>
    <div class="form-group">
        <label for="subtitle">Subtítulo:</label>
        <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Subtítulo da notícia">

    </div>
    <div class="form-group">
        <label for="body">Texto:</label>
        <textarea type="text" class="form-control corpo" id="body" name="body" placeholder="Corpo da notícia"></textarea>
        
    </div>
    <div class="form-group">
        <label for="image">Fotorreportagem:</label>
        <input type="file" class="form-control" id="image" name="image" >
        
    </div>
    <div class="form-group">
        <label for="foto_desc">Legenda da foto:</label>
        <input type="text" class="form-control" id="foto_desc" name="foto_desc" placeholder="Legenda  da reportagem">
        
    </div>
    <div class="form-group">
        <label for="data_post">Data do postagem:</label>
        <input type="text" class="form-control" id="data_post" name="data_post" placeholder="Data da Postagem">
        
    </div>
    <input type="submit" class="btn btn-primary" value="Criar post">

</form>

<!-- Formulário de artigos -->
<h2 class="text-center m-5">Postagem de artigos</h2>

<form action="/posts_art" method="POST">
    @csrf 
    <div class="form-group">
        <label for="autor">Autor:</label>
        <input type="text" class="form-control" id="autor" name="autor" placeholder="Nome do autor">

    </div>
    <div class="form-group">
        <label for="title">Título:</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Nome do título">

    </div>
    <div class="form-group">
        <label for="resumo">Resumo:</label>
        <textarea type="text" class="form-control" id="resumo" name="resumo" placeholder="primeiras linhas do artigo"></textarea>

    </div>
    <div class="form-group">
        <label for="description">Descrição:</label>
        <textarea type="text" class="form-control corpo" id="description" name="description" placeholder="Texto do artigo"></textarea>
        
    </div>
    <div class="form-group">
        <label for="data_post">Data da postagem:</label>
        <input type="text" class="form-control" id="data_post" name="data_post" placeholder="Data da Postagem">
        
    </div>
    <input type="submit" class="btn btn-primary" value="Salvar artigo">

</form>

<!-- Formulário de fotos -->

<h2 class="text-center m-5">Postagem de fotos</h2>

<form action="/posts_foto" method="POST" enctype="multipart/form-data">
    @csrf 
    <div class="form-group">
        <label for="title">Título:</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="titulo da foto">

    </div>
    <div class="form-group">
        <label for="image">Foto:</label>
        <input type="file" class="form-control" id="image" name="image" >

    </div>
    <div class="form-group">
        <label for="description">Descrição:</label>
        <textarea type="text" class="form-control" id="description" name="description" placeholder="Breve descrição"></textarea>
        
    </div>
    <div class="form-group">
        <label for="data_post">Data da postagem:</label>
        <input type="text" class="form-control" id="data_post" name="data_post" placeholder="Data da Postagem">
        
    </div>
    <input type="submit" class="btn btn-primary" value="Salvar foto">

</form>


<!-- Formulário de Podcasts -->

<h2 class="text-center m-5">Postagem de podcasts</h2>

<form action="/posts_podcasts" method="POST" enctype="multipart/form-data">
    @csrf 
    <div class="form-group">
        <label for="title">Título:</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="titulo da foto">

    </div>
    <div class="form-group">
        <label for="autor">Autor:</label>
        <input type="text" class="form-control" id="autor" name="autor" placeholder="Nome do autor" >

    </div>
    <div class="form-group">
        <label for="audio">Áudio:</label>
        <input type="file" class="form-control" id="audio" name="audio" >

    </div>
    <div class="form-group">
        <label for="description">Descrição:</label>
        <textarea type="text" class="form-control" id="description" name="description" placeholder="Breve descrição"></textarea>
        
    </div>
    <div class="form-group">
        <label for="data_post">Data da postagem:</label>
        <input type="text" class="form-control" id="data_post" name="data_post" placeholder="Data da Postagem">
        
    </div>
    <input type="submit" class="btn btn-primary" value="Salvar foto">

</form>
</section>

<script>
    $(document).ready(function() {
    $('#body').summernote({
        tabsize: 2,
         height: 400
    });

});



$(document).ready(function() {
    $('#description').summernote({
        tabsize: 2,
        height: 400
    });
});

</script>
@endsection

