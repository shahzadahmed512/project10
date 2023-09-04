<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Topic;
use App\Models\Subcategory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Topic>
 */
class TopicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition(): array
    {
        $subcategory = Subcategory::inRandomOrder()->first();
        $user = User::inRandomOrder()->first();
        return [
            'subcategory_id' => $subcategory->subcategory_id,
            'user_id' => $user->id,
            'name' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph,
            'image_url' => $this->faker->imageUrl(),
            'status' => $this->faker->randomElement(['active', 'inactive']),
        ];
    }
}
