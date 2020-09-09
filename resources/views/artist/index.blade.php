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
  <div class="d-flex flex-row justify-content-center">
    @foreach ($artists as $artist)
      <div class="p-2">{{$artist->artist}}
        <div class="d-flex flex-column justify-content-center">
          @foreach ($artist->album as $album)
          <div class="p-2">
            <a href="{{route('albums.show', $album)}}">{{$album->album}}</a>
          </div>
          @endforeach
        </div>
      </div>
        @endforeach
      </div>
  </div>
</div>

{{-- <ul>
  @foreach ($artists as $artist)
    <li>{{$artist->artist}}</li>
    <ul>
      @foreach ($artist->album as $album)
        <li><a href="{{route('albums.show', $album)}}">{{$album->album}}</a></li>
      @endforeach
    </ul>
  @endforeach
</ul> --}}
