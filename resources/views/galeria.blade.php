@extends('layouts.main')

@section('title', 'BTNH- Postagem')

@section('content')
<div class="container col-lg-12 col-sm-4">
<div class="row">
    
<h2 class="text-center m-5">Redação</h2>
        @foreach($slides as $slide )

        <div class="col-lg-3 ">
            <figure class="figure">
            <img class="foto" onclick="aumentaImagem();"src="/storage/{{ $slide->image }}" style="height: 200px;" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
            <figcaption class="figure-caption">{{ $slide->description }}</figcaption>
            </figure>
        </div>
        @endforeach

        {{ $slides->links()}}
</div>
</div>

@endsection