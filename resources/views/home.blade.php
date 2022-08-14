<!-- Diretivas do Laravel -->
@extends('layouts.main')

@section('title', 'BTNH- Home')

@section('content')





<!-- Postagens -->


<section>
    <article>
      <h5> {{ $conteudo }} views </h5> 

          @foreach($manchetes as $manchete )
  
               <a href="postagens/{{ $manchete->id}}">
      
               <h1  id="titulo">{{ $manchete->title }}</h1> 
               <img src="storage/{{ $manchete->image}}" class="foto-manchete" alt="escrita2">
        
    
               </a>           
  
          @endforeach
  </article>
  <article class="noticias">
          @foreach($noticias as $noticia )
                 
                <img src="storage/{{ $noticia->image}}" class="fotorreportagem" alt="escrita2">
                <a  href="postagens/{{ $noticia->id }}"> 
                <h5 class="titulo" id="texto">{{ $noticia->title }}</h5>
                </a>

          @endforeach
  </article>
</section>

    <aside>
      <h2>Artigos</h2>
          @foreach($arts as $artigo)
              
                  <img src="/image/foto.jpeg " class="foto-perfil" alt="foto do perfil"> 
                    <a href="artigos/{{ $artigo->id }}" >  <h5 class="titulo">{{ $artigo->title }}</h5>
                   <p class="titulo">{{ $artigo->resumo }}</p>
                
              </a>
          @endforeach   
          <div class="">      
            <img src="/image/escrita2.jpg"  style="width: 50%; height: 10rem;  padding:5px;" class="card-img-top" alt="escrita2">
            <a href="podcasts">
              <h2 class="card-title">Podcast</h2>   
            </a> 
          </div>
    </aside>
          
          

     


@endsection
