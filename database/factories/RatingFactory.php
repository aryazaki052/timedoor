<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rating>
 */
class RatingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    $ratingValue = $this->faker->randomFloat(1, 0, 10); // Menghasilkan bilangan float dengan 1 digit di belakang koma antara 0 dan 10

    return [
        'book_id' => $this->faker->numberBetween(1, 100000), 
        'nilai' => $ratingValue, 
        'created_at' => $this->faker->dateTimeBetween('-2 years', 'now'),
        'updated_at' => $this->faker->dateTimeBetween('-2 years', 'now'),
    ];
}


}
