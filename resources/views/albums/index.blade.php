@extends('layouts.layouts')

<h1 class="">Qui trovi tutti gli album</h1>

<ul>
  {{-- @foreach ($albums as $album) --}}
    <li>albums dei {{$artist->name}}
      {{-- {{$album->title}} --}}
      {{-- <img src="{{$album->image->url}}" alt=""> --}}
    </li>
  {{-- @endforeach --}}
</ul>


{{-- <a href="{{route('album.show', $album)}}"></a> --}}
