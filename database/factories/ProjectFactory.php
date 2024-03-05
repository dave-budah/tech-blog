<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(3),
            'source' => $this->faker->url(),
            'url' => $this->faker->url(),
            'image' => $this->faker->imageUrl(),
            'featured' => $this->faker->boolean(50),

        ];
    }
}
