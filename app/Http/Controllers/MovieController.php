<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Actor;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Actor $actor)
    {
        return view('movies.create', compact('actor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'year' => 'required'
        ], [
            'title.required' => 'Il titolo del film è obbligatorio',
            'year.required' => "L'anno è obbligatorio"
        ]);
        //dd($request->all());
        $movie = Movie::create($request->all());
        return redirect()->route('movies.show', $movie->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return response()->json($movie);
        //return view('movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {

        return view('movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        //dd($request->all());
        $this->validate($request, [
            'title' => 'required',
            'year' => 'required'
        ], [
            'title.required' => 'Il titolo del film è obbligatorio',
            'year.required' => "L'anno è obbligatorio"
        ]);
        $movie->update($request->all());

        return redirect()->route('movies.show', $movie->id);
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        $idActor= $movie->actor_id;
        $movie->delete();
        return redirect()->route('actors.show', $idActor);
    }
}
