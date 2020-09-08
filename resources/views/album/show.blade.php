<h2>{{$album->title}}</h2>

<p>{{ $album->artist}}</p>

<p>{{$album->year}}</p>

<ul>
  @foreach ($album->songs as $song)
  <li>{{ $song->title }}</li>
  @endforeach
</ul>
