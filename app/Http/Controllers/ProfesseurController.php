<?php

namespace App\Http\Controllers;

use App\Models\Professeur;
use Illuminate\Http\Request;

class ProfesseurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $professeurs = Professeur::all();

        return view('professeurs.index', compact('professeurs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('professeurs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required',
            'filiere' => 'required',
            'materiel' => 'required'
        ]);

        Professeur::create($validated);

        return redirect()->route('professeurs.index')
        ->with('success', 'Demande ajouté avec succès!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Professeur $professeur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Professeur $professeur)
    {
        return view('professeurs.index', compact('professeurs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Professeur $professeur)
    {
        $validated = $request->validate([
            'nom' => 'required',
            'filiere' => 'required',
            'materiel' => 'required'
        ]);
        $professeur->update($validated);

        return to_route('professeurs.index')
                ->with('success', 'Demande modifié avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Professeur $professeur)
    {
        $professeur->delete();

        return back()
        ->with('success', 'Catégorie supprimé avec succès !');
    }
}
