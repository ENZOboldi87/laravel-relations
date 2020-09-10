<h3>ciao sono su show artisti</h3>

<h4>il nome dell artista selezionato e: {{$artist->name}}</h4>

<h5>Album di quest artista</h5>
@foreach ($artist->album as $album)
  <ul>
    <li> <a href="{{route('albums.show', $album)}}">{{$album->title}}</a></li>
  </ul>
@endforeach
