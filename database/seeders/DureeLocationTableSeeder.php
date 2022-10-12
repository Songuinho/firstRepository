<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DureeLocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("duree_location")->insert([
            ["libelle"=>"Journée", "valeurEnheure"=>24],
            ["libelle"=>"Demi-journée", "valeurEnheure"=>12],
            
        ]);
    }
}
