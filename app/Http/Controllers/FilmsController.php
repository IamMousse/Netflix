<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use App\Models\Film;
use App\Models\Personne;

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
     * Display the specified resource.
     */
    public function show(Film $film)
    {
        return View('Netflix.show_film', compact('film'));
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
