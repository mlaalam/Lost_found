<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->title(),
            'description' => fake()->paragraph(3),
            'status' =>fake()->randomElement(['lost','found']),
            'date_lost_found' =>fake()->dateTime(),
            'address' => fake()->address(),
            'user_id' => User::where('role','user')->inRandomOrder()->first()->id,
        ];
    }
}
