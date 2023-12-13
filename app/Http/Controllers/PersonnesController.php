<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personne;
use App\Models\Film;
use App\Http\Requests\PersonnesRequest;
use Illuminate\Support\Facades\Log;

class PersonnesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personnes = Personne::all();
        $films = Film::all();
        $fillable = Personne::all();
        $shany = Personne::where('id', '=', 1)->get();
        $animation = Personne::where('id', '=', 2)->get();
        $animal = Personne::where('id', '=', 3)->get();
        return View('Personne.index', compact('personnes', 'films', 'fillable', 'shany', 'animation', 'animal')); 
    }

    /**
     * Show the form for creating a new resource.
     * @return IlluminateViewView
     */
    public function create()
    {
        return View('Personne.create');
    }


    /**
     * Store a newly created resource in storage.
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonnesRequest $request)
    {
        try
        {
            $personne = new Personne($request->all());
            $personne->save();
        }
        catch (\Throwable $e)
        {
            Log::debug($e);
        }
        return redirect()->route('personnes.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(Personne $personne)
    {
        return View('Personne.show', compact('personne'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Personne $personne)
    {
        return View('Personne.edit', compact('personne'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PersonnesRequest $request, Personne $personne)
    {
        try
        {
            $personne->nom = $request->nom;
            $personne->dateN = $request->dateN;
            $personne->photo = $request->photo;
            $personne->dateDece = $request->dateDece;
            $personne->sexe = $request->sexe;
            $personne->metier = $request->metier;
            $personne->save();
            return redirect()->route('personnes.index')->with('message', "Modification de " . $personne->nom . " réussi!");
        }
        catch(\Throwable $e)
        {
            Log::debug($e);
            return redirect()->route('personnes.index')->withErrors(['la modification n\'a pas fonctionné']);
        }
        return redirect()->route('personnes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try
        {
            $personne = Personne::findOrFail($id);
            //Si un film a des acteurs, on ne peut pas le supprimer.
            $personne->films()->detach();
            
            $personne->delete();
            return redirect()->route('personnes.index')->with('message', "Suppression de " . $personne->nom . " réussi!");
        }
        catch(\Throwable $e)
        {
            Log::debug($e);
            return redirect()->route('personnes.index')->withErrors(['la suppression n\'a pas fonctionné']);
        }
        return redirect()->route('personnes.index');
    }
}
