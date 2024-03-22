<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{

    protected $model = Movie::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'director' => $this->faker->name,
            'created_at' => $this->faker->dateTimeBetween('-2 years'),
            'updated_at' => $this->faker->dateTimeBetween($this->faker->dateTimeBetween('-2 years'), 'now'),
        ];
    }
}
