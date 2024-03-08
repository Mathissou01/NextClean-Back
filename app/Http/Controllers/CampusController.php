<?php

namespace App\Http\Controllers;

use App\Models\Campus;
use Illuminate\Http\Request;

class CampusController extends Controller
{
    public function index()
    {
        $campuses = Campus::all();
        return view('content.campuses.campuses', ['campuses' => $campuses]);
    }

    public function create()
    {
        return view('content.campuses.create-campus');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'location' => 'required|string',
        ]);
        Campus::create($validated);
        return redirect()->route('campuses.index')->with('success', 'Campus ajouté avec succès.');
    }

    public function show(Campus $campus)
    {
        return view('campuses.show', compact('campus'));
    }

    public function edit(Campus $campus)
    {
        return view('content.campuses.edit-campus', compact('campus'));
    }

    public function update(Request $request, Campus $campus)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'postal_code' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'fillingRate' => 'required|numeric|between:0,100', // Assurez-vous que la plage de validation est appropriée pour votre cas d'usage
        ]);
        
        $campus->update($validated);
    
        return redirect()->route('campuses.index')->with('success', 'Campus mis à jour avec succès.');
    }    

    public function destroy(Campus $campus)
    {
        $campus->delete();
        return back()->with('success', 'Campus supprimé avec succès.');
    }
}
