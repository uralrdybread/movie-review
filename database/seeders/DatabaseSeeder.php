<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Movie;
use App\Models\Review;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create 33 movies and generate random reviews for each movie
        Movie::factory(33)->create()->each(function ($movie) {
            // Generate a random number of reviews for each movie
            $numReviews = random_int(5, 30);

              // Create reviews for the movie using the Review factory
            Review::factory()->count($numReviews)
                ->good() // Apply the 'good' state to some reviews
                ->for($movie) // Associate the review with the movie
                ->create();
        });

        Movie::factory(33)->create()->each(function ($movie) {
            
            $numReviews = random_int(5, 30);

              
            Review::factory()->count($numReviews)
                ->average() 
                ->for($movie) 
                ->create();
        });

        Movie::factory(34)->create()->each(function ($movie) {
            
            $numReviews = random_int(5, 30);

             
            Review::factory()->count($numReviews)
                ->bad() 
                ->for($movie) 
                ->create();
        });
    }
}
