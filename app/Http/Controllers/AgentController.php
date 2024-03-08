<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agent;

class AgentController extends Controller
{
    public function index()
    {
        // Récupérer tous les agents
        $agents = Agent::all();

        // Retourner la vue avec les agents
        return view('content.agents.agents', ['agents' => $agents]);
    }
    public function create()
    {
        // Récupérer tous les agents
        $agents = Agent::all();

        // Retourner la vue avec les agents
        return view('content.agents.add-agent', ['agents' => $agents]);
    }
    public function edit($agentId)
    {
        $agent = Agent::findOrFail($agentId);
        return view('content.agents.edit-agent', compact('agent'));
    }

    public function update(Request $request, $agentId)
    {
        $agent = Agent::findOrFail($agentId);
        $agent->update($request->all());
        return redirect()->route('agents')->with('success', 'Agent modifié avec succès.');
    }

    public function destroy($agentId)
    {
        $agent = Agent::findOrFail($agentId);
        $agent->delete();
        return redirect()->route('agents')->with('success', 'Agent supprimé avec succès.');
    }
    public function store(Request $request)
    {
        // Validation des données reçues
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:agents',
            'phone_number' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'postal_code' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
        ]);

        // Création d'un nouvel agent avec les données validées
        $agent = Agent::create($validatedData);

        // Redirection vers une route spécifique (à définir) avec un message de succès
        return redirect()->route('agents')->with('success', 'Agent créé avec succès.');

    }
}
