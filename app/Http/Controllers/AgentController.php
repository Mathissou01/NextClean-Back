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
        return view('content.tables.agents', ['agents' => $agents]);
    }
    public function create()
    {
        // Récupérer tous les agents
        $agents = Agent::all();

        // Retourner la vue avec les agents
        return view('content.tables.add-agent', ['agents' => $agents]);
    }
    public function modify()
    {
        // Récupérer tous les agents
        $agents = Agent::all();

        // Retourner la vue avec les agents
        return view('content.tables.modify-agent', ['agents' => $agents]);
    }
}
