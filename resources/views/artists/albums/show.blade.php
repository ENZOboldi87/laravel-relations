{{-- <h2>{{$album->album}}</h2>

<p>{{ $album->artist}}</p>

<p>{{$album->year}}</p> --}}
{{--
<h1>{{$album->album}}</h1>

<ul>
  @foreach ($album->songs as $song)
  <li>{{ $song->song }}</li>
  @endforeach
</ul> --}}

<h1>nome album: {{$album->title}}</h1>
<h2>dei{{$artists->name}}</h2>
{{-- @foreach ($artist->albums as $album)
  <h1>{{$album->title}}</h1>
@endforeach --}}
