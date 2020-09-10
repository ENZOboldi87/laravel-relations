@extends('layouts.layouts')

{{-- <div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="title-page">
        <h1 class="text-center p-5">Qui trovi tutti gli artisti</h1>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="d-flex flex-row justify-content-center">
    @foreach ($artists as $artist)
      <div class="p-2"> <a href="{{route('albums.show', $artist)}}">
        {{$artist->name}}</a></div>
        <div class="d-flex flex-column justify-content-center"> --}}
          {{-- @foreach ($artist->title as $album)
          <div class="p-2">
            {{-- <a href="{{route('album.show', $album)}}">{{$album->album}}</a> --}}
          {{-- </div>
          {{-- @endforeach --}}
        {{-- </div>
      </div>
        @endforeach --}}
      {{-- </div> --}}
  {{-- </div>
</div> --}}


<h1>lista artisti</h1>

@foreach ($artists as $artist)
  <div>
    <a href="{{route('artists.show', $artist)}}"><h2>{{$artist->name}}</h2></a>
  </div>
@endforeach
  {{-- <ul>
    @foreach ($artist->album as $album)
      <li> {{$album->title}}
        <img src="{{$album->image->url}}" alt="">
      </li>
    @endforeach
  </ul> --}}
