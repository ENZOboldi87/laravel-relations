@extends('layouts.layouts')
@section('title')
  EnzoBoldify - {{$album->artist->name}}
@endsection
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="title-page">
          <h1 class="text-center p-5">{{$album->artist->name}}</h1>
          <h2 class="text-center p-5">{{$album->title}}</h2>
          <div class="float-left">
            <img src="{{$album->image->url}}" alt="..." class="img-thumbnail">
          </div>
          <div class=" float-left ml-3">
            <p>TRACCE</p>
            <ol class="lista">
            @foreach ($album->songs as $song)
              <li class="list-item h4">{{$song->song}}</li>
            @endforeach
            </ol>
          </div>

        </div>
      </div>
    </div>
  </div>
  <a class="btn btn-primary" href="{{route('artists.albums.index', [$artist_id])}}" role="button">Torna indietro</a>

  <a class="btn btn-primary" href="{{route('artists.index')}}" role="button">Torna alla Home</a>
@endsection
