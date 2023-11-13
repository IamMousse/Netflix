<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Personne;
use App\Http\Requests\FilmRequest;
use Illuminate\Support\Facades\Log;

class FilmsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $films = Film::all();
        $documentaires = Film::where('genre', '=', 'Documentaire')->get();
        $horreurs = Film::where('genre', '=', 'Horreur')->get();
        $actions = Film::where('genre', '=', 'Action')->get();
        $animes = Film::where('genre', '=', 'Anime')->get();
        $comedies = Film::where('genre', '=', 'Comedie')->get();
        $fillable = Film::all();
        return View('Netflix.index', compact('films','documentaires', 'horreurs', 'actions', 'animes', 'comedies', 'fillable')); 
    }

    /**
     * Show the form for creating a new resource.
     * @return IlluminateViewView
     */
    public function create()
    {
        $films = Film::all();
        $personnes_nom = Personne::orderBy('nom')->get(); 
        return View('Netflix.create_film', compact('personnes_nom', 'films'));
    }

    /**
     * Store a newly created resource in storage.
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try
        {
            $film = new Film($request->all());
            $film->save();
        }
        catch (\Throwable $e)
        {
            Log::debug($e);
        }
        return redirect()->route('films.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return IlluminateViewView
     */
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
    public function store_film_personne (Request $request)
    {
        try
        {
            $personnes = Personne::find($request->personne_id);
            $films = Film::find($request->film_id);

            //Vérifier si la relation existe déjà
            if($personnes->films->contains($films))
            {
                Log::debug("La relation existe déjà");
            }
            else
            {
                $personnes->films()->attach($films);
                $personnes->save();
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
    public function show(Film $film)
    {
        return View('Netflix.show_film', compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Film $film)
    {
        return View('Netflix.edit_film', compact('film'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FilmRequest $request, Film $film)
    {
        try
        {
            $film->titre = $request->titre;
            $film->duree = $request->duree;
            $film->annee = $request->annee;
            $film->rating = $request->rating;
            $film->genre = $request->genre;
            $film->resumer = $request->resumer;
            $film->trailer = $request->trailer;
            $film->pochetteURL = $request->pochetteURL;

            $film->save();
            return redirect()->route('films.index')->with('message', "Modification de " . $film->titre . " réussi!");
        }
        catch(\Throwable $e)
        {
            Log::debug($e);
            return redirect()->route('films.index')->withErrors(['la modification n\'a pas fonctionné']);
        }
        return redirect()->route('films.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
