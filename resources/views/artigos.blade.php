@extends('layouts.main')

@section('title', 'BTNH- Home')

@section('content')

<section class="materia">
@foreach($artigos as $artigo )
  
      
        <h1 class="titulo">{{ $artigo->title }}</h1>     
        <p >{{ $artigo->data_post }}</p> 
        <p>{!! $artigo->description !!}</p> 
      
        <p class="legenda">Por:{{ $artigo->autor }}</p>  
        
                

  
@endforeach 

</section>
 

  
  @endsection