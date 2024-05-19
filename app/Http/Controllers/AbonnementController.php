<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Abonnement;
use App\Models\Gare;
use App\Models\Trajet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AbonnementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $abonnements=Abonnement::all();
        return view('backend.abonnements.index',compact('abonnements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $trajets=Trajet::all();
        $gares= Gare::all();
        return view('abonnements.create',compact('trajets','gares'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|integer',
            'lieu' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'trajet_id' => 'required|exists:trajets,id',
            'garedepart_id' => 'required|exists:gares,id',
            'garearrive_id' => 'required|exists:gares,id',
        ]);
    
        // Handle the image upload
        if ($request->hasFile('image')) {
            $image = Storage::disk('public')->put('posts', $request->file('image'));
        } else {
            $image = null;
        }
    
        // Create a new Abonnement instance and fill it with validated data
        $newAbonnement = new Abonnement();
        $newAbonnement->nom = $validatedData['nom'];
        $newAbonnement->prenom = $validatedData['prenom'];
        $newAbonnement->email = $validatedData['email'];
        $newAbonnement->phone = $validatedData['phone'];
        $newAbonnement->lieu = $validatedData['lieu'];
        $newAbonnement->image = $image;
        $newAbonnement->trajet_id = $validatedData['trajet_id'];
        $newAbonnement->garedepart_id = $validatedData['garedepart_id'];
        $newAbonnement->garearrive_id = $validatedData['garearrive_id'];
    
        // Save the new Abonnement record to the database
        $newAbonnement->save();
    
        // Redirect to the show route with a success message
        return redirect()->route('abonnements.show', $newAbonnement->id)->with('success', 'Abonnement created successfully');
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
