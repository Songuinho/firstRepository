<?php

namespace Database\Seeders;

use App\Models\users;
use App\Models\client;
use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TypeArticletableseeder::class); // les seeders nous permettent d'insserer les donnees de facon manuel dans notre BD  

        Article::factory(10)->create();
        client::factory(10)->create();
        users::factory(10)->create();

        $this->call(RoleTableSeeder::class);
        $this->call(StatutLocationTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(DureeLocationTableSeeder::class);
        
        users::find(1)->roles()->attach(1);
        users::find(2)->roles()->attach(2);
        users::find(3)->roles()->attach(3);
        users::find(4)->roles()->attach(4);
    }
}
