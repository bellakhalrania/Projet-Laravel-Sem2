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
        $request->validate($this->validationRules());
        $newChauffeur=new Chauffeur();
        $newChauffeur->ncin=$request->ncin;
        $newChauffeur->nom=$request->nom;
        $newChauffeur->prenom=$request->prenom;
        $newChauffeur->salaire=$request->salaire;
        $newChauffeur->adresse=$request->adresse;

        $newChauffeur->save();
        
        return redirect()->route('chauffeurs.show', $newChauffeur->id)->with('success', 'Chauffeur created successfully.');
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
        $chauffeur=Chauffeur::findOrFail($id);
        return view('chauffeurs.edit',compact('chauffeur'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate($this->validationRules());
        $chauffeur=Chauffeur::findOrFail($id);
        
        $chauffeur->ncin=$request->ncin;
        $chauffeur->nom=$request->nom;
        $chauffeur->prenom=$request->prenom;
        $chauffeur->salaire=$request->salaire;
        $chauffeur->adresse=$request->adresse;

        $chauffeur->save();
        
        return redirect()->route('chauffeurs.show', $chauffeur->id)->with('success', 'Chauffeur updated successfully.');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function validationRules(){
        return[
            'ncin' => 'required|digits:8',
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'salaire' => 'required|numeric',
            'adresse' => 'required|string|max:255',
        ];
    }
}
