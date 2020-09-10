@extends('layouts.layouts')
@section('title')
  EnzoBoldify - {{$artist->name}}
@endsection
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="title-page">
          <h1 class="text-center p-5">Hai selezionato {{$artist->name}}</h1>
        </div>
      </div>
    </div>
  </div>
<div class="container-fluid">
  <h2 class="text-center">Discografia</h2>
  <div class="d-flex flex-row justify-content-center">
    @foreach ($artist->album as $album)
  <div class="p-2">
    <div class="">
      <a href="{{route('albums.show', $album)}}"><img src="{{$album->image->url}}" alt="..." class="img-thumbnail"></a>
    </div>
    <p class="text-center mb-0"><a href="{{route('albums.show', $album)}}">{{$album->title}}
    </a></p>
    <div>
      <p class="text-center">{{$album->year}}</p>
    </div>
  </div>
    @endforeach
  </div>
</div>
@endsection

{{-- <div class="container-fluid">
  <div class="d-flex flex-row justify-content-center">
    @foreach ($artists as $artist)
      <div class="p-2">
        <a href="{{route('artists.show', $artist)}}"><h2>{{$artist->name}}</h2></a>
      </div>
    @endforeach
  </div>
</div> --}}
