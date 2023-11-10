<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use App\Models\Personne;
use App\Models\Film;

use App\Http\Request\PersonnesRequest;

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

    public function create_film_personne()
    {
        $nom_personne = Personne::orderBy('nom')->get();
        $titre_film = Film::orderBy('titre')->get();
        return View('Netflix.create_film_personne', compact('nom_personne', 'titre_film'));
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

    public function store_film_personne (Request $request)
    {
        try
        {
            $personne = Personne::find($request->personne_id);
            $films = Film::find($request->film_id);

            //Vérifier si la relation existe déjà
            if($personne->films->contains($films))
            {
                Log::debug("La relation existe déjà");
            }
            else
            {
                $personne->films()->attach($films);
                $personne->save();
            }
            return redirect()->route('films.index');
        }
        catch (\Throwable $e)
        {
            Log::debug($e);
            return redirect()->route('films.index');
        }
        return redirect()->route('films.index');
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
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
