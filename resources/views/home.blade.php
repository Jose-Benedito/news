<!-- Diretivas do Laravel -->
@extends('layouts.main')

@section('title', 'BTNH- Home')

@section('content')





<!-- Postagens -->

<div class="container col-md-10 col-sm-4">
<h5 align="right">Visitante nª: {{ $conteudo }} </h5> 
  @foreach($manchetes as $manchete )
  <div class="card" style="width:95% ; margin-bottom:20px;">
    <a href="postagens/{{ $manchete->id}}">
      <div class="card-body ">
        <h1 class="card-title">{{ $manchete->title }}</h1> 
        <img src="storage/{{ $manchete->image}}"  style="width: 90%; height: 12rem;  padding:5px;" class="card-img-top" alt="escrita2">
        <p></p> 
      </div>
    </a>           
  </div>
  @endforeach
  <div class="row ">
    @foreach($noticias as $noticia )
    <div class="col-lg-2 col-sm-4 noticia">
             <div class="card">
           <img src="storage/{{ $noticia->image}}" style="height: 10rem;"class="card-img-top" alt="escrita2">
           <a href="postagens/{{ $noticia->id }}"> <div class="card-body">
                <h5 class="card-title" id="texto">{{ $noticia->title }}</h5>
              
       
              </div>
            </a>
            </div>
            
          </div>
       
 

      @endforeach
          @foreach($arts as $artigo)
            <div class="card aside" style="width:25rem ; margin-top:20px;">
              <div class="card-body">
                <h4>Artigo:</h4>  
           <img src="/image/foto.jpeg " class="card-img-top w-25 rounded-circle m-5" alt="escrita2"> 
            <a href="artigos/{{ $artigo->id }}" >  <h5 class="card-title text">{{ $artigo->title }}</h5>
                <p class="card-title">{{ $artigo->resumo }}</p>
                </div>
              </a>
              </div>
          @endforeach   
    </div>
  <div class="card" style="width:95%; margin-top:20px; ">
    <div class="card-body ">
      <img src="/image/escrita2.jpg"  style="width: 70%; height: 10rem;  padding:5px;" class="card-img-top" alt="escrita2">
      <a href="podcasts">
          <h1 class="card-title">PedraNews tem Podcast</h1>   
        </div>
      </a>           
  </div>

  
</div>

@endsection
