<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use Illuminate\Http\Request;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Buses=Bus::all();
        return view('Buses.index',compact('Buses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
            $request->validate([
                'name' => 'required',
                'matricule' => 'required',
                'model' => 'required',
                'line' => 'required',
                'etat' => 'required|boolean',
            ]);
    
            Bus::create($request->all());
            return redirect()->route('buses.index')
                             ->with('success', 'Bus created successfully.');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Bus $bus)
    {
        return view('buses.show', compact('bus'));
    }

    public function edit(Bus $bus)
    {
        return view('buses.edit', compact('bus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bus $bus)
    {
        $request->validate([
            'name' => 'required',
            'matricule' => 'required',
            'model' => 'required',
            'line' => 'required',
            'etat' => 'required|boolean',
        ]);

        $bus->update($request->all());
        return redirect()->route('buses.index')
                         ->with('success', 'Bus updated successfully.');
    }

    public function destroy(Bus $bus)
    {
        $bus->delete();
        return redirect()->route('buses.index')
                         ->with('success', 'Bus deleted successfully.');
    }
}
