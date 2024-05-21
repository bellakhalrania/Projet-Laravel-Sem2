<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Chauffeur;
use App\Models\Chaufffeur;
use App\Models\Trajet;
use Illuminate\Http\Request;

class TrajetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trajets = Trajet::all();
        return view('backend.trajets.index', compact('trajets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $chauffeurs=Chauffeur::all();
        return view('backend.trajets.create',compact('chauffeurs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'departure' => 'required|string|max:255',
            'destination' => 'required|string|max:255',
            'departure_time' => 'required|date',
            'arrival_time' => 'required|date',
        ]);

        Trajet::create($request->all());
        return redirect()->route('trajets.index')->with('success', 'Trajet créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Trajet $trajet)
    {
        $trajet=Trajet::with('chauffeur')->findOrFail($id);
        return view('backend.trajets.show', compact('trajet'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trajet $trajet)
    {
        return view('trajets.edit', compact('trajet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Trajet $trajet)
    {
        $request->validate([
            'departure' => 'required|string|max:255',
            'destination' => 'required|string|max:255',
            'departure_time' => 'required|date',
            'arrival_time' => 'required|date',
        ]);

        $trajet->update($request->all());
        return redirect()->route('trajets.index')->with('success', 'Trajet mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trajet $trajet)
    {
        $trajet->delete();
        return redirect()->route('trajets.index')->with('success', 'Trajet supprimé avec succès.');
    }
}
