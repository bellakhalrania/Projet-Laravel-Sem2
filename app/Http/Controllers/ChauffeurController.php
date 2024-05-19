<?php

namespace App\Http\Controllers;

use App\Models\Chauffeur;
use Illuminate\Http\Request;

class ChauffeurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chauffeurs=Chauffeur::all();
        return view('chauffeurs.index',compact('chauffeurs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('chauffeurs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newChauffeur=new Chauffeur();
        $newChauffeur->ncin=$request->ncin;
        $newChauffeur->nom=$request->nom;
        $newChauffeur->prenom=$request->prenom;
        $newChauffeur->salaire=$request->salaire;
        $newChauffeur->adresse=$request->adresse;

        $newChauffeur->save();
        return redirect()->route('chauffeurs.show', $newChauffeur->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $chauffeur=Chauffeur::findOrFail($id);
        return view('chauffeurs.show',compact('chauffeur'));
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
