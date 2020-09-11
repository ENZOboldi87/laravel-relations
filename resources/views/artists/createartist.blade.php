@extends('layouts.layouts')
@section('title')
  EnzoBoldify - Inserisci Artista
@endsection
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="title-page">
          <h1 class="text-center p-5">Inserisci un nuovo Artista</h1>
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

  <form action="{{route('artists.store')}}" method="post">
    @csrf
    @method('POST')
    <label>Nome</label>
    <input type="text" name="name" value="{{old('name')}}" placeholder="Nome">
    <input type="submit" name="" value="salva">

  </form>

@endsection
