<?php

namespace App\Http\Controllers;

use App\Actor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Ci tornerà tutti gli attori
        $name = 'Lino';
        //dd(DB::select("select * from actors where name = ?", [$name]));
        //dd(DB::table('actors')->get());
        //dd(DB::table('actors')->select('name', 'surname')->get());
        //return response()->json(Actor::all('name', 'surname'));
        //dd(Actor::all()->load('movies'));
        $actors = Actor::all()->load('movies');
        return view('actors.index', ['actors' => $actors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Ci restituisce il form di creazione dell'attore
        return view('actors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Ci consente di crea l'attore
        //$actor = Actor::create($request->all());
        //return response()->json($actor)
        $this->validate($request, [
            'name' => 'required|alpha',
            'surname' => 'required',
            'year' => 'required'
        ], [
            'name.required' => 'Il campo nome è obbligatorio',
            'name.alpha' => 'Il campo nome non può essere numerico',
            'surname.required' => 'Il cognome non può essere lasciato vuoto',
            'year.required' => "Vuoi nascondere l'anno di nascita? Non puoi"
        ]);
        Actor::create($request->all());
        return redirect()->route('actors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function show(Actor $actor)
    {
        // Ci consente di vedere i dati di un singolo attore
        //dd($actor);
        //$actor = Actor::with('movies:id,title,actor_id')->select('id', 'name', 'surname')->get()->find($id);
        //return response()->json($actor);
        return view('actors.show', compact('actor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function edit(Actor $actor)
    {
        // Ci restituisce il form per aggiornare l'attore
        return view('actors.edit', compact('actor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actor $actor)
    {
        // Ci consente di aggiornare i dati dell'attore
        $actor->update($request->all());
        return redirect()->route('actors.show', $actor->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actor $actor)
    {
        // Eliminare i dati del singolo attore
    }
}
