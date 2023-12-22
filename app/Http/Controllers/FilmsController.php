<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Personne;
use App\Models\Type;
use App\Http\Requests\FilmRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class FilmsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $films = Film::all();
        $personnes = Personne::all();
        $fillable = Film::all();
        $types = Type::all();
        $comedies = Film::where('type_id', '=', 1)->get();
        $criminels = Film::where('type_id', '=', 2)->get();
        $horreurs = Film::where('type_id', '=', 3)->get();
        $westerns = Film::where('type_id', '=', 4)->get();
        $sciencefictions = Film::where('type_id', '=', 5)->get();
        $actions = Film::where('type_id', '=', 6)->get();
        $aventures = Film::where('type_id', '=', 7)->get();
        $fantastiques = Film::where('type_id', '=', 8)->get();
        $romances = Film::where('type_id', '=', 9)->get();
        $animes = Film::where('type_id', '=', 10)->get();

        return View('Netflix.index', compact('films', 'personnes', 'types', 'comedies', 'criminels', 'horreurs', 'westerns', 'sciencefictions', 'actions', 'aventures', 'fantastiques', 'romances', 'animes', 'fillable')); 
    }

    /**
     * Show the form for creating a new resource.
     * @return IlluminateViewView
     */
    public function create()
    {
        $types = Type::orderBy('genre')->get();
        $personnes_nom = Personne::orderBy('nom')->get(); 
        return View('Netflix.create', compact('personnes_nom', 'types'));
    }

    /**
     * Store a newly created resource in storage.
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $films = new Film($request->all());
            $uploadedFile= $request->file('pochetteURL');
            $films->type_id = $request->input('type_id');
            $nomFichierUnique = str_replace(' ', '_', $films->titre) . '-' . uniqid() . '.' . $uploadedFile->extension();
            try
            {
                $request->pochetteURL->move(public_path('img/films'), $nomFichierUnique);
            }
            catch(\Symfony\Component\HttpFoundation\File\Exception\FileException $e) 
            {
                Log::error("Erreur lors du téléversement du fichier. ", [$e]);
            }
            $films->pochetteURL = $nomFichierUnique;
            $films->save();
            return redirect()->route('films.index')->with('message', "Ajout du film " . $films->titre . " réussi!");

        }
        catch (\Throwable $e)
        {
            //gere l'erreur
            Log::debug($e);
            return redirect()->route('films.index')->withErrors(['l\'ajout n\'a pas fonctionné']);
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
        return View('Netflix.show', compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Film $film)
    {
        $realisateur = $film->realisateur;
        $producteur = $film->producteur;
        $acteur = $film->acteur;
        $type = $film->type;
        $personnes_nom = Personne::orderBy('nom')->get(); 
        $types = Type::orderBy('genre')->get();
        return View('Netflix.edit', compact('film', 'personnes_nom', 'realisateur', 'producteur', 'acteur', 'type', 'types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FilmRequest $request, Film $film)
    {
        try
        {
            $film->titre = $request->titre;
            $film->resumer = $request->resumer;
            $film->duree = $request->duree;
            $film->annee = $request->annee;
            $film->rating = $request->rating;
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
        try
        {
            $film = Film::findOrFail($id);
            $film->personnes()->detach();
            $film->delete();
            return redirect()->route('films.index')->with('message', "Suppression de " . $film->titre . " réussi");
        }
        catch(\Throwable $e)
        {
            Log::debug($e);
            return redirect()->route('films.index')->withErrors(['La suppression n\'a pas fonctionné']);
        }
        return redirect()->route('films.index');
    }

    public function destroy_film_personne (Request $request, string $id)
    {
        try
        {
            $personnes = Personne::find($request->personne_id);
            $films = Film::find($request->film_id);

            //Vérifier si la relation existe déjà
            if($personnes->films->contains($films))
            {
               // $films = Film::findOrFail($id);
                //$films->personnes()->detach();

               // DB::table('film_personne')->where('personne_id',$request->personne_id)->where('film_id',$request->film_id)->delete();
                dd($request->personne_id);
                //$personnes = Personne::findOrFail($id);
                //$personnes->films()->detach();

                //$personnes->films()->detach($films);
                //$films->personnes()->detach($personnes);
                //$personnes->delete();
            }
            else
            {
                Log::debug("La relation n existe pas");

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
}
