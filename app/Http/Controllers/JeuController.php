<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Jeu;
use App\Models\Tag;
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
        $categorie = $jeu->categorie;
        $categories = Categorie::all();
        return view('jeux.edit', compact('jeu', 'categorie', 'categories'));
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
            'description' => 'string|min:3',
            'categorie' => 'required'
        ])) {
            $titre = $request->input('titre');
            $description = $request->input('description');
            $categories = $request->input('categorie');
            $jeu = Jeu::find($id);
            $jeu->titre = $titre;
            $jeu->description = $description;
            $categorie = Categorie::find($categories);
            $jeu->categorie()->associate($categorie);  // la méthode associate permet de lier une instance de Categorie à une instance de Jeu
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

    public function attach(Request $request, $id_jeu)
    {
        if ($request->validate([
            'tag' => 'required|string|max:45|min:2'
        ])) {
            $nom_tag = $request->input('tag');
            $tag = Tag::firstOrCreate([        //firstOfCreate() crée une nouveau tag sauf s'il existe déjà
                'nom' => $nom_tag
            ]);
            
            $jeu = Jeu::find($id_jeu);
            $jeu->tags()->attach($tag->id);     // la méthode attach sert à lier le tag trouvé (ou créé) au jeu enregistré en utilisant la relation tags définie dans la classe Jeu.
            // $tags = $jeu->tags;
            // $bool = $tags->contains(1);
            return redirect()->route('jeux.show', $jeu->id);
        } else {
            return redirect()->back();
        }
        die;
    }
}
