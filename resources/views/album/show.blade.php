<h2>{{$album->album}}</h2>

<p>{{ $album->artist}}</p>

<p>{{$album->year}}</p>

<ul>
  @foreach ($album->songs as $song)
  <li>{{ $song->song }}</li>
  @endforeach
</ul>
