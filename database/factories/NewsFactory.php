<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title_de' => $this->faker->sentence,
            'slug_de' => $this->faker->slug,
            'content_de' => $this->faker->text,
            'title_it' => $this->faker->sentence,
            'slug_it' => $this->faker->slug,
            'content_it' => $this->faker->text
        ];
    }
}
