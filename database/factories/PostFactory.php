<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->realText(50),
            'excerpt' => $this->faker->sentence,
            'body' => $this->faker->paragraph(1, true),
            'category_id' => Category::factory()
        ];
    }
}
