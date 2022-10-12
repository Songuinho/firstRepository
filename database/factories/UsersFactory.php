<?php

namespace Database\Factories;

use App\Models\users;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = users::class;


    public function definition()
    {
        return [
            "nom" => $this->faker->name(),
            "prenom" => $this->faker->lastName(),
            "sexe" => array_rand(["F", "H", 1]),
            'email' => $this->faker->unique()->safeEmail(),
            'telephone1' => $this->faker->unique()->phoneNumber(),
            'telephone2' => $this->faker->unique()->phoneNumber(),
            'pieceIdentite' => array_rand(["CNI","PASSPORT","PERMIS DE CONDUIRE"], 1),
            'numeroPieceIdentite' => $this->faker->unique()->bankAccountNumber(),
            'photo' => $this->faker->imageUrl(),
            'password' =>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        ];
    }
}
