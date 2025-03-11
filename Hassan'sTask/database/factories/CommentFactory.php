<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->randomElement(\App\Models\User::pluck('id')->toArray()),
            'post_id' => $this->faker->randomElement(\App\Models\Post::pluck('id')->toArray()),
            'parent_id' => null,
            'content' => $this->faker->paragraph,
            'is_published' => $this->faker->boolean,
            'is_approved' => $this->faker->boolean,
        ];
    }
}
