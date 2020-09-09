@extends('layouts.layouts')

<h1 class="">Qui trovi tutti gli album</h1>

<ul>
  @foreach ($albums as $album)
    <li>Title:
      <a href="{{route('album.show', $album)}}">{{$album->title}}</a>
    </li>
  @endforeach
</ul>
