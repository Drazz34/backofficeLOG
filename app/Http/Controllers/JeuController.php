<?php

namespace App\Http\Controllers;

use App\Models\Jeu;
use Illuminate\Http\Request;

class JeuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jeux = Jeu::orderBy('id', 'asc')->get();
        
        return view('jeux.index', ['jeux' => $jeux]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jeux.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->validate([
            'titre' => 'required|string|max:45|min:2',
            'description' => 'required|string|min:3'
        ])) {
            $titre = $request->input('titre');
            $description = $request->input('description');
            $jeu = new Jeu();
            $jeu->titre = $titre;
            $jeu->description = $description;
            $jeu->save();
            return redirect()->route('jeux.show', $jeu->id);
        } else {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jeu = Jeu::find($id);
        $categorie = $jeu->categorie;
        return view('jeux.show', compact('jeu', 'categorie'));
        // [
        //     'jeu' => $jeu,
        //     'categorie' => $categorie
        // ]
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jeu = Jeu::find($id);
        return view('jeux.edit', [
            'jeu' => $jeu
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->validate([
            'titre' => 'required|string|max:45|min:2',
            'description' => 'required|string|min:3'
        ])) {
            $titre = $request->input('titre');
            $description = $request->input('description');
            $jeu = Jeu::find($id);
            $jeu->titre = $titre;
            $jeu->description = $description;
            $jeu->save();
            return redirect()->route('jeux.show', $jeu->id);
        } else {
            return redirect()->back();
        }
        die;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Jeu::destroy($id);
        return redirect()->route('jeux.index');
    }
}
