<?php

namespace Database\Factories;

use App\Models\Animal;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnimalFactory extends Factory
{
    protected $model = Animal::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'species' => $this->faker->word,
            'age' => $this->faker->numberBetween(1, 10),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'description' => $this->faker->sentence,
        ];
    }
}
