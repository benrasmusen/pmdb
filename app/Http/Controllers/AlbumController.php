<?php

namespace App\Http\Controllers;

use App\Album;
use App\Band;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAlbum;
use App\Http\Requests\UpdateAlbum;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::all();

        return view('albums.index', ['albums' => $albums]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $album = new Album;
        $bands = Band::all()->pluck('name', 'id')->all();

        return view('albums.create', ['album' => $album, 'bands' => $bands]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAlbum  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAlbum $request)
    {
        $album = Album::create($request->except(['_token']));

        return redirect('albums')->with('success', __('Album created successfully!'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album)
    {
        return view('albums.show', ['album' => $album]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function edit(Album $album)
    {
        $bands = Band::all()->pluck('name', 'id')->all();

        return view('albums.edit', ['album' => $album, 'bands' => $bands]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAlbum  $request
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAlbum $request, Album $album)
    {
        $album->fill($request->except(['_token']));

        if ($album->save()) {
            return redirect('albums')->with('success', __('Album updated successfully!'));
        }

        return back()->with('error', __('There was an error updating that album'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $album)
    {
        if ($album->delete()) {
            return redirect('albums')->with('success', __('Album deleted successfully!'));
        }

        return back()->with('error', __('There was an error deleting this album.'));
    }
}
