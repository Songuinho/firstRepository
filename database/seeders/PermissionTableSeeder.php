<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("permissions")->insert([
            ["nom"=>"ajouter client"],
            ["nom"=>"consulter un client"],
            ["nom"=>"editer un client"],

            ["nom"=>"ajouter  une location"],
            ["nom"=>"consulter une location"],
            ["nom"=>"editer une location"],


            ["nom"=>"ajouter  une article"],
            ["nom"=>"consulter une article"],
            ["nom"=>"editer une article"],

        ]);
    }
}
