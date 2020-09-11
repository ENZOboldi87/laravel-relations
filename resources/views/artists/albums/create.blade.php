@extends('layouts.layouts')
@section('title')
  EnzoBoldify - Inserisci Album
@endsection
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="title-page">
          <h1 class="text-center p-5">Inserisci un nuovo Album</h1>
        </div>
      </div>
    </div>
  </div>
  {{-- Validazione form --}}
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  {{-- qua mi dice Missing required parameters per salvare, presumo sia l'id dell artista, ho provato varie vie ma non riesco --}}
  <form action="{{route('artists.albums.store', [$artist_id, $image_id])}}" method="post">
    {{-- fine  --}}
    @csrf
    @method('POST')
    <label>Titolo</label>
    <input type="text" name="title" value="{{old('title')}}" placeholder="Titolo">
    <label>Anno</label>
    <input type="number" name="year" value="{{old('year')}}" placeholder="Anno">

    <input type="submit" name="" value="salva">

  </form>

@endsection
