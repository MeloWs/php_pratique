<?php

namespace Database\Factories;

use App\Models\Voyage;
use Illuminate\Database\Eloquent\Factories\Factory;

class VoyageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Voyage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->city,
            'country' => $this->faker->country,
            'date' => $this->faker->date($format = 'Y-m-d'),
            'agency' => $this->faker->company,
            'resume' => $this->faker->text,
            'cost' => $this->faker->numberBetween($min = 200, $max = 9000),
            'rating' => $this->faker->numberBetween($min = 0, $max = 10),
            'views' => $this->faker->numberBetween($min = 0, $max = 500)
        ];
    }
}
