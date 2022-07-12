<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'postal' => $this->faker->numberBetween(10000,99999),
            'istatnciv' => $this->faker->sentence,
            'egon' => $this->faker->randomAscii,
            'lat' => $this->faker->numerify('##.############'),
            'long' => $this->faker->numerify('###.############')
        ];
    }
}
