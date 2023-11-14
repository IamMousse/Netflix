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
        return View('Netflix.personne', compact('personnes', 'films', 'fillable')); 
    }

    /**
     * Show the form for creating a new resource.
     * @return IlluminateViewView
     */
    public function create()
    {
        return View('Netflix.create_personne');
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
        return View('Netflix.show_personne', compact('personne'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Personne $personne)
    {
        return View('Netflix.edit_personne', compact('personne'));
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
