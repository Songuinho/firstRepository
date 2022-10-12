<?php

namespace Database\Factories;

use App\Models\client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    protected $model = client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nom" => $this->faker->firstName(),
            "prenom" => $this->faker->lastName(),
            "sexe" => array_rand(["F","H", 1]),
            "dateNaissance" => $this->faker->dateTimeBetween("1980-01-01","2020-12-30"),
            "lieuNaissance" => $this->faker->country." ".$this->faker->city,
            "nationalite" => $this->faker->country,
            "pays" => $this->faker->country,
            "ville" => $this->faker->city,
            "adresse" => $this->faker->address,
            "telephone1" => $this->faker->phoneNumber,
            "telephone2" => $this->faker->phoneNumber,
            "pieceIdentite" => array_rand(["CNI", "PASSPORT", "PERMIS DE CONDUIRE", 1]),
            "noPieceIdentite" => $this->faker->creditCardNumber

        ];
    }
}
