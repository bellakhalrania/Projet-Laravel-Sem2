<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Gare;
use Illuminate\Http\Request;

class GareController extends Controller
{

    public function index()
    {
       
        $gares=Gare::all();
        return view('backend.gares.index',compact('gares'));
    }

    public function create()
    {
        return view('backend.gares.create');
        
    }

    public function store(Request $request)
    {
       
            $validatedData = $request->validate([
            'nom_gare' => 'required|string|max:255',
            'lieu' => 'required|string|max:255',
            'address' => 'required'
        ]);
    
    
        
        $newGare = new Gare();
        $newGare->nom_gare = $validatedData['nom_gare'];
        $newGare->lieu = $validatedData['lieu'];
        $newGare->address = $validatedData['address'];
       
        $newGare->save();
    
        return redirect()->route('gares.show', $newGare->id)->with('success', 'Gare created successfully');
    }


    public function show(string $id)
{
    $gare = Gare::findOrFail($id);
    return view('backend.gares.show', compact('gare'));
}

public function edit(string $id)
{
    $gare = Gare::findOrFail($id);
    return view('backend.gares.edit', compact('gare'));
}


    public function update(Request $request, string $id)
    {
       
          $gare = Gare::findOrFail($id);
              // Mettre à jour le post avec le contenu du formulaire
        $gare->nom_gare = $request->nom_gare;
        $gare->lieu = $request->lieu ;
        $gare->address= $request->address;

        // Enregister le Post mis à jour
        $gare->save();

        return redirect()->route('gares.show', $gare->id)->with('success', 'Gare updated successfully');
  
    }

    public function destroy(string $id){
    $gare = Gare::findOrFail($id);       
    $gare->delete();
               return redirect()->route('gares.index')->with('success', 'Gare deleted successfully');
    }

}


