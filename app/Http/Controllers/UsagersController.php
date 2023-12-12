<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

use App\Models\Usager;
use App\Models\Film;

use App\Http\Controllers\FilmsController;
use App\Http\Requests\UsagerRequest;
use Illuminate\Support\Facades\Hash;


class UsagersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fillable = Usager::all();
        return view('Auth.login', compact('fillable'));
    }

    /**
     * Validation if allowed to see website
     */
    public function login(Request $request)
    {
        $reussi = Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        Log::debug(''.$reussi);
        if($reussi){
            return redirect()->route('films.index')->with('message', "Connexion réussi");
        }
        else{
            return redirect()->route('login')->withErrors(['Informations invalides']);
        }
    }

    public function logout (Request $request)
    {
        Log::debug("NOOOOOOOOOOOOOOOOOOO");
        Auth::logout();
        Session::flush();
        return redirect()->route('showLoginForm')->with("message",'Déconnexion réussi');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roleuser = Usager::orderBy('role')->get();
        return View('Auth.create', compact('roleuser'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UsagerRequest $request)
    {
        try{
            $usagers = new Usager($request->all());
            $usagers->save();
        }
        catch(\Throwable $e) {
            Log::debug($e);
        }
        return redirect()->route('films.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Usager $usager)
    {
        return View('Auth.show', compact('usager'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usager $usager)
    {
        $roleuser = Usager::orderBy('role')->get();
        return View('Auth.edith', compact('usager', 'roleuser'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UsagerRequest $request, Usager $usager)
    {
        log::debug('asdf');
        try
        {
            log::debug('qwerty');
            $usager->nomUsager  = $request->nomUsager;
            $usager->nom        = $request->nom;
            $usager->prenom     = $request->prenom;
            //$usager->role       = $request->role;
            $usager->password   = $request->password;
            
            $usager->save();
            return redirect()->route('Auth.index')->with('message', "Modification de " . $usager->nomUsager . " réussi!");
            log::debug('fin');
        }
        catch(\Throwable $e)
        {log::debug('ddddd');
            Log::debug($e);
            return redirect()->route('Auth.index')->withErrors(['la modification n\'a pas fonctionné']);
        }
        return redirect()->route('Auth.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try
        {
            $usager = Usager::findOrFail($id);
            //Si un film a des acteurs, on ne peut pas le supprimer.
           // $personne->films()->detach();

            $usager->delete();
            return redirect()->route('Auth.index')->with('message', "Suppression de " . $usager->nom . " réussi!");
        }
        catch(\Throwable $e)
        {
            Log::debug($e);
            return redirect()->route('Auth.index')->withErrors(['la suppression n\'a pas fonctionné']); 
        }
            return redirect()->route('Auth.index');
    }
}
