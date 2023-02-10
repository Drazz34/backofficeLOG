<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Categorie;
use App\Models\Jeu;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Categorie::factory(10)->create();

        Jeu::factory(10)->create();

        Tag::factory(50)->create();

        User::factory(10)->create();

        $jeux = Jeu::all();
        foreach($jeux as $jeu) {
            $jeu->tags()->attach(1); // attach pr ajouter, detach pour enlever ne pas oublier les () après tags
        }
    }
}
