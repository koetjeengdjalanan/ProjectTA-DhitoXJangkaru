<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlogPosts>
 */
class BlogPostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2, 8)),
            'category_id' => mt_rand(1, 3),
            'user_id' => mt_rand(1, 2),
            'uuid' => $this->faker->uuid(),
            'thumbnail' => $this->faker->imageUrl(397, 241, 'campus'),
            'created_at' => now()->addSecond(mt_rand(0, 9999999)),
            'published' => now()->addSecond(mt_rand(0, 9999999)),
            'updated_at' => now()->addSecond(mt_rand(0, 9999999)),
            'excerpt' => $this->faker->words(20, true),
            'body' => '<p>' . $this->faker->paragraph(5) . '</p><p>' . $this->faker->paragraph(5) . '</p><p>' . $this->faker->paragraph(5) . '</p><p>' . $this->faker->paragraph(5) . '</p>',
        ];
    }
}
