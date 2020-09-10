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

    return view('artist.index', compact('artists'));
  }



}
