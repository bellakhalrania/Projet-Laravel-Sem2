<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Trajet;
use Illuminate\Http\Request;

class find_trajet extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trajets=Trajet::all();
        return view('find_trajets.index',compact('trajets'));
    }


    public function store(Request $request){
        $departure = $request->input('departure');
        $destination = $request->input('destination');

        if ($request->isMethod('POST')) {
            $trajets = Trajet::where('departure', 'like', "%{$departure}%")
                ->where('destination', 'like', "%{$destination}%")
                ->get();
        } else {
            $trajets = [];
        }
        
        return view('find_trajets.index', compact('trajets', 'departure', 'destination'));
    }
}