@extends('layouts.main')

@section('title', 'BTNH- Home')

@section('content')

<div class="container col-md-10 col-sm-10">

@foreach($artigos as $artigo )
  <div class="card">
      <div class="card-body col-lg-8 col-md-10 col-sm-10">
        <h1 class="card-title">{{ $artigo->title }}</h1>     
        <p >{{ $artigo->data_post }}</p> 
        <p>{!! $artigo->description !!}</p> 
      
        <p class="legenda">Por:{{ $artigo->autor }}</p>  
        </div>
                
  </div>
  
@endforeach 

 {{ $artigos->links() }}
  </div>
  
  @endsection