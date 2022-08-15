@extends('layouts.main')

@section('title', 'BTNH- Dashboard')

@section('content')

<section>
<h1>Dashboard</h1>
<a href="postagem"><button class="btn btn-success">Cadastar Postagens</button></a>
<h3>Notícias</h3>
<article>
@foreach($noticias as $noticia )
  
  <p  id="titulo">{{ $noticia->title }}</p> 
  <a href="editar/{{ $noticia->id}}"><button>Editar</button></a>
  <a href="postagens/{{ $noticia->id}}"><button>Excluir</button></a>

@endforeach
</article>
<h3>Artigos</h3>
@foreach($artigos as $artigo )
  
  <p  id="titulo">{{ $artigo->title }}</p> 
  <a href="editar/{{ $artigo->id}}"><button>Editar</button></a>
  <a href="postagens/{{ $artigo->id}}"><button>Excluir</button></a>

@endforeach
<article>

</article>
<h3>Podcasts</h3>
<article>
@foreach($podcasts as $podc )
  
  <p  id="titulo">{{ $podc->title }}</p> 
  <a href="editar/{{ $podc->id}}"><button>Editar</button></a>
  <a href="postagens/{{ $podc->id}}"><button>Excluir</button></a>

@endforeach
</article>
</section>

@endsection