<?php

namespace Database\Factories;

use App\Models\Livre;
use Illuminate\Database\Eloquent\Factories\Factory;

class LivreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Livre::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titre' => $this->faker->sentence($nbWords = 4, $variableNbWords = true),
            'auteur' => $this->faker->firstName($gender = null),
            'resume' => $this->faker->text,
            'ISBN' => $this->faker->isbn13,
            'prix' => $this->faker->randomNumber($nbDigits = 2, $strict = false),
            'editeur' => $this->faker->firstName($gender = null)
        ];
    }
}
