<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeArticletableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("types_articles")->insert([
            ["nom"=>"voiture"],
            ["nom"=>"Immobilier"],
            ["nom"=>"Appareils Electroniques"],
            ["nom"=>"Salle"],
            ["nom"=>"Occasion"],
            ["nom"=>"Meuble"],
            ["nom"=>"Bijoux"],
            ["nom"=>"Chaussures"],
            ["nom"=>"Vetements"],
            ["nom"=>"Objets patisserie"],
        ]);
    }
}
