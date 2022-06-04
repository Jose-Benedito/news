@extends('layouts.main')

@section('title', 'BNTH - Postagens')

@section('content')
<div class="container col-lg-10 col-sm-4 ">
    <h2>{{ $titulo }}</h2>
    <img src="/image/slide3.jpg" class="d-block w-100 mb-5" alt="slide3.jpg">
    <div class="container">
     <div class="row"> 




     @foreach($audio as $mp3)
     
       <p class="item"> {{ $mp3->title }} </p>
        <p class="itemAutor">{{ $mp3->autor }}</p>      
      @endforeach 





     <div class="player-box"> 
      <img  class="thumb" src="/image/escrita1.jpg" alt="">
      <div class="descricao">
         <h2 > {{ $mp3->autor }} </h2>
         <i> {{ $mp3->title }}</i>
      </div>

      <div class="duracao">
          <div class="barra">
            <progress value="0" max="1"></progress>
            <div class="ponto"></div>
          </div>
            <div class="tempo">
              <p class="inicio">0:00</p>
              <p class="fim">3:40</p>
            </div>

        </div>
        <div class="player">

          <i class="fas fa-step-backward setas anterior"></i>
          <i class="fas fa-play-circle botao-play"></i>
          <i class="fas fa-pause-circle botao-pause"></i>
          <i class="fas fa-step-forward setas proxima"></i>
        </div>
        <audio src="/media/modal01.mp3" type="audio/mpeg"></audio>
      
     </div>






    <!--
      <div class="embed-responsive embed-responsive-3by4 d-flex justify-content-center">
              <iframe  class="embed-responsive-item w-100 m-3 " src= "/storage/{{ $mp3->audio }}" allowfullscreen></iframe>
      </div>  -->
        
    </div>
  
</div>


<!-- SEGUNDA VERSÃO DO PLAYER  -->
<div class="container-player">
<div class="music-player">
  <div class="player02">
  <img  class="record" src="/image/escrita1.jpg" alt="">
    <h2 id="title">Song name</h2>
    <div class="slidercontainer">
      <i class="fas fa-volume-down"></i>
      <input type="range" min="0" max="100" value="50" class="slider">
      <i class="fas fa-volume-up"></i>
    </div>
    <div class="controls">
      <button class="previous" id="previous"><i class="fas fa-step-backward"></i></button>
      <button class="play-pause" id="play-pause"><i class="fas fa-play"></i></button>
      <button class="next" id="next"><i class="fas fa-step-forward"></i></button>
    </div>
  </div>
  </div>
    <div class="playlist">
        <h2>Playlist</h2>
        <ul class="song-list">
          <li data-src="/storage/{{ $mp3->audio }}" data-name="Song Modal" data-index="0"><span>Song Modal</span><span>01:40</span></li>
          <li data-src="/storage/{{ $mp3->audio }}" data-name="dançante 01" data-index="0"><span>dançante 01</span><span>01:40</span></li>
          <li data-src="/storage/{{ $mp3->audio }}" data-name="O sonho acabou" data-index="0"><span>O sonho acabou</span><span>01:40</span></li>
          <li data-src="/storage/{{ $mp3->audio }}" data-name="Tarde em Sampa" data-index="0"><span>Tarde em Sampa</span><span>01:40</span></li>
          <li data-src="/storage/{{ $mp3->audio }}" data-name="Está no ar" data-index="0"><span>Está no ar"</span><span>01:40</span></li>
          <li data-src="/storage/{{ $mp3->audio }}" data-name="Mágica magia" data-index="0"><span>Mágica magia</span><span>01:40</span></li>
        </ul>
        <audio src="" id="audioPod"></audio>
    </div>
</div>
</div>
</div>
<!-- SEGUNDA VERSÃO DO PLAYER  -->
@endsection
