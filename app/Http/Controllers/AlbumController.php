<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artist;
use App\Album;
use App\Image;
use App\Song;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($artist_id)
    {
      $albums = Album::where('artist_id', $artist_id)->get();
      $artist = Artist::find($artist_id);

      return view('artists.albums.index', compact('albums', 'artist_id', 'artist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $albums = Album::all();


        return view('artists.albums.create', compact ('albums'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      dd($artist_id);
      $request->validate($this->validationArtist());
      $requested_data = $request->all();
      $new_album = new Album();
      $new_album->title = $requested_data['title'];
      $new_album->year = $requested_data['year'];
      $new_album->save();
      return redirect()->route('artists.index', $new_album);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($artist_id, Album $album)
    {
        return view ('artists.albums.show', compact('artist_id', 'album'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function validationAlbum() {
      return [
        'title' => 'required|max:255',
        'year' => 'required|integer',
      ];
    }
}
