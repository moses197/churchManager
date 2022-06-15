<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           'title' => $this->faker->title(),
           'tags' => $this->faker->word(),
           'company' => $this->faker->company(),
           'location' => $this->faker->city(),
           'website' => $this->faker->word(),
           'email' => $this->faker->email(),
           'description' => $this->faker->text(),
        ];
    }
}
