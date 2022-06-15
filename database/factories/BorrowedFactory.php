<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Borrowed>
 */
class BorrowedFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'book_id' => $this->faker,
            'user_id' => $this->faker,
            'borrowed_at' => $this->faker,
            'return_by' => $this->faker,
            //, 'return_by'
        ];
    }
}
