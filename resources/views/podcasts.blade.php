@extends('layouts.main')

@section('title', 'BNTH - Postagens')

@section('content')
<div class="container col-lg-10 col-sm-4">
    <h2>{{ $titulo }}</h2>
    <img src="/image/slide3.jpg" class="d-block w-100 mb-5" alt="slide3.jpg">
    <div class="container">
     <div class="row"> 
     @foreach($audio as $mp3)
       <h2 class="text-left">{{ $mp3->title }}</h2>
       <h3>Compositor:{{ $mp3->autor }}</h3>
       <div class="col-lg-8 col-md-4">

          <audio autoplay controls>
            <source src="/storage/{{ $mp3->audio }}"  type="audio/mpeg">
         
          </audio>
          <p>{{ $mp3->description }}</p>
          <p>Postado: {{ $mp3->data_post }}</p>
      </div>
      @endforeach 
      <div class="embed-responsive embed-responsive-3by4 d-flex justify-content-center">
              <iframe  class="embed-responsive-item w-100 m-3 " src= "/storage/{{ $mp3->audio }}" allowfullscreen></iframe>
      </div>
        
    </div>
  
</div>
</div>
@endsection
