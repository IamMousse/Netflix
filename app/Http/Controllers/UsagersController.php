<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use App\Models\Usager;



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
        return redirect()->route('films.index')->with("message",'Déconnexion réussi');
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
    public function show(string $id)
    {
        //
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
