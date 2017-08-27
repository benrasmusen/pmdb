<?php

namespace App\Http\Controllers;

use App\Band;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBand;
use App\Http\Requests\UpdateBand;

class BandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bands = Band::all();

        return view('bands.index', ['bands' => $bands]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $band = new Band;

        return view('bands.create', ['band' => $band]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBand  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBand $request)
    {
        $band = Band::create($request->except(['_token']));

        return redirect('/')->with('success', __('Band created successfully!'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Band  $band
     * @return \Illuminate\Http\Response
     */
    public function show(Band $band)
    {
        return view('bands.show', ['band' => $band]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Band  $band
     * @return \Illuminate\Http\Response
     */
    public function edit(Band $band)
    {
        return view('bands.edit', ['band' => $band]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBand  $request
     * @param  \App\Band  $band
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBand $request, Band $band)
    {
        $band->fill($request->except(['_token']));

        if ($band->save()) {
            return redirect('/')->with('success', __('Band updated successfully!'));
        }

        return back()->with('error', __('There was an error updating that band'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Band  $band
     * @return \Illuminate\Http\Response
     */
    public function destroy(Band $band)
    {
        if ($band->delete()) {
            return redirect('/')->with('success', __('Band deleted successfully!'));
        }

        return back()->with('error', __('There was an error deleting this band.'));
    }
}
