<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'=>fake()->randomElement([1,2,3,4,5,6,7,8,9,10]),
        'image'=>fake()->imageUrl(640 , 480 , 'musique', true),
        'title'=>fake()->word(),
        'description'=>fake()->sentence(),
        ];
    }
}
