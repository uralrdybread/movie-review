<?php

namespace Database\Factories;

use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{

    protected $model = Review::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'movie_id' => null,
            'review' => $this->faker->paragraph,
            'rating' => $this->faker->numberBetween(1, 5),
            'created_at' => $this->faker->dateTimeBetween('-2 years'),
            'updated_at' => $this->faker->dateTimeBetween($this->faker->dateTimeBetween('-2 years'), 'now'),
        ];
    }

    // Research if theirs a way to repeat this code with a component

    public function good() {
        return $this->state(function (array $attributes) {
        return [
            'rating' => $this->faker->numberBetween(4, 5)
            ];
        });
    }

        public function average() {
        return $this->state(function (array $attributes) {
        return [
            'rating' => $this->faker->numberBetween(2, 5)
            ];
        });
    }

        public function bad() {
        return $this->state(function (array $attributes) {
        return [
            'rating' => $this->faker->numberBetween(1, 3)
            ];
        });
    }


}
