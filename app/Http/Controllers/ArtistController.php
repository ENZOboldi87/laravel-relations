<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artist;
use App\Album;
use App\Image;

class ArtistController extends Controller
{
  public function index()
  {

    $artists = Artist::all();
    // dd($artists[1]->album->image_id);
    // dd($album);

    return view('artists.index', compact('artists'));
  }

  public function show(Artist $artist)
  {
    return view('artists.show', compact('artist'));
  }



}
