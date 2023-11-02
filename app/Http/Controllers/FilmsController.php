<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;

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
        return View('Netflix.index', compact('films','documentaires', 'horreurs', 'actions', 'animes', 'comedies')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
