<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nom" => $this->faker->lastName,
            "noSerie" => $this->faker->swiftBicNumber,
            "imageUrl" => $this->faker->imageUrl(),
            "type_article_id" => rand(1,100),
            "estDisponible" => rand(0, 1)
            // les factory nous permet de generer d'une facon automatique les donnees dans notre BD
        ];
    }
}
