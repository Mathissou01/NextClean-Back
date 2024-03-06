<?php

namespace App\Http\Controllers\tables;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agent;

class Basic extends Controller
{
  public function index()
  {
    // Récupérer tous les agents
    $agents = Agent::all();

    // Retourner la vue avec les agents
    return view('content.tables.tables-basic', ['agents' => $agents]);
  }
}
