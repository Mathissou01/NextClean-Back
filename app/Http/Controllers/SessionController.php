<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Session;
use App\Models\Campus;
use App\Models\Agent;


class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sessions = Session::with('campus')->get();
        return view('content.session.sessions', compact('sessions'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $agents = Agent::all(); // Récupère tous les agents
        $campuses = Campus::all(); // Récupère tous les campus
        return view('content.session.create-session', compact('agents', 'campuses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'campus_id' =>'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        Session::create($validatedData);
        return redirect()->route('content.session.index')->with('success', 'Session créée avec succès.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $session = Session::findOrFail($id);
        $campuses = Campus::all();
    
        return view('content.session.edit-session', compact('session', 'campuses'));
    }       

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'campus_id' => 'required|integer',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after_or_equal:start_time',
        ]);
    
        $session = Session::findOrFail($id);
        $session->campus_id = $validatedData['campus_id'];
        $session->start_time = $validatedData['start_time'];
        $session->end_time = $validatedData['end_time'];
        $session->save();
    
        return redirect()->route('sessions')->with('success', 'Session mise à jour avec succès.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $session = Session::findOrFail($id);
        $session->delete();
        return back()->with('success', 'Session supprimée avec succès.');
    }
}
