@extends('layouts.layouts')

<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="title-page">
        <h1 class="text-center p-5">Qui trovi tutti gli artisti</h1>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid">
  

</div>

<ul>
  @foreach ($artists as $artist)
    <li>Nome Artista:{{$artist->artist}}
      @foreach ($artist->album as $album)
        <li>
          <a href="{{route('albums.show', $album)}}">{{$album->album}}</a>
        </li>
      @endforeach
    </li>


  <hr>
  @endforeach
</ul>

@foreach ($artists as $artist)
<div class="">
    {{$artist->artist}}
    @foreach ($artist->album as $album)
    <div class="">
      <p>{{$album->album}}</p>
    </div>
    @endforeach
</div>

@endforeach
