@extends('layouts.main')

@section('title', 'BTNH- Postagem')

@section('content')

<section>
<h2>{{ $titulo }}</h2>
<img src="/image/desktop-cadastro.jpeg" class="img-fluid mb-5" alt="...">

@foreach($noticias as $noticia )
<!-- Formulário de notícias -->
<h2 class="text-center m-5">Postagem de notícias</h2>
<form action="/edit_not" method="POST" enctype="multipart/form-data">
    @csrf 
    <div class="form-group " id="noticia">
     
        <input type="hidden" class="form-control" id="id" name="id" value="{{ $noticia->id }}">

    </div>
    <div class="form-group " id="noticia">
        <label for="title">Título:</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $noticia->title }}">

    </div>
    <div class="form-group">
        <label for="subtitle">Subtítulo:</label>
        <input type="text" class="form-control" id="subtitle" name="subtitle"value="{{ $noticia->subtitle }}">

    </div>
    <div class="form-group">
        <label for="body">Texto:</label>
        <textarea type="text" class="form-control corpo" id="body" name="body" value="{{ $noticia->body }}">{{ $noticia->body }}</textarea>
        
    </div>
    <div class="form-group">
        <label for="image">Fotorreportagem:</label>
        <input type="file" class="form-control" id="image" name="image" value="storage/{{ $noticia->image}}">
        
    </div>
    <div class="form-group">
        <label for="foto_desc">Legenda da foto:</label>
        <input type="text" class="form-control" id="foto_desc" name="foto_desc" value="{{ $noticia->foto_desc }}">
        
    </div>
    <div class="form-group">
        <label for="data_post">Data do postagem:</label>
        <input type="text" class="form-control" id="data_post" name="data_post" value="{{ $noticia->data_post }}">
        
    </div>
    <br>
    <input type="submit" class="btn btn-primary" value="Editar">

</form>
@endforeach
<!-- Formulário de artigos -->
<h2 class="text-center m-5">Postagem de artigos</h2>

@foreach($artigos as $artigo )
<form action="/edit_art/{{ $artigo->id }}" method="POST">
    @csrf 
    <div class="form-group">
        
        <input type="hidden" class="form-control" id="id" name="id" value="{{ $artigo->id }}">

    </div>
    <div class="form-group">
        <label for="autor">Autor:</label>
        <input type="text" class="form-control" id="autor" name="autor" value="{{ $artigo->autor }}">

    </div>
    <div class="form-group">
        <label for="title">Título:</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $artigo->title }}">

    </div>
    <div class="form-group">
        <label for="resumo">Resumo:</label>
        <textarea type="text" class="form-control" id="resumo" name="resumo" value="{{ $artigo->resumo }}">{{ $artigo->resumo }}</textarea>

    </div>
    <div class="form-group">
        <label for="description">Descrição:</label>
        <textarea type="text" class="form-control corpo" id="description" name="description" value="{{ $artigo->description }}">{{ $artigo->description }}</textarea>
        
    </div>
    <div class="form-group">
        <label for="data_post">Data da postagem:</label>
        <input type="text" class="form-control" id="data_post" name="data_post" value="{{ $artigo->data_post }}">
        
    </div>
    <br>
    <input type="submit" class="btn btn-primary" value="Editar">

</form>
@endforeach
<!-- Formulário de fotos 

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
    <br>
    <input type="submit" class="btn btn-primary" value="Salvar foto">

</form>
-->

<!-- Formulário de Podcasts -->

<h2 class="text-center m-5">Postagem de podcasts</h2>
@foreach($podcasts as $podc )
<form action="/edit_podc" method="POST" enctype="multipart/form-data">
    @csrf 
    <div class="form-group">
        <label for="title">Título:</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $podc->title }}">

    </div>
    <div class="form-group">
        <label for="autor">Autor:</label>
        <input type="text" class="form-control" id="autor" name="autor" value="{{ $podc->autor }}" >

    </div>
    <div class="form-group">
        <label for="audio">Áudio:</label>
        <input type="file" class="form-control" id="audio" name="audio" >

    </div>
    <div class="form-group">
        <label for="description">Descrição:</label>
        <textarea type="text" class="form-control" id="description" name="description" value="{{ $podc->description }}">{{ $podc->description }}</textarea>
        
    </div>
    <div class="form-group">
        <label for="data_post">Data da postagem:</label>
        <input type="text" class="form-control" id="data_post" name="data_post" value="{{ $podc->data_post }}">
        
    </div>
    <br>
    <input type="submit" class="btn btn-primary" value="Editar">

</form>
@endforeach
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

