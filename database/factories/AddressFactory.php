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
            'municip_de' => $this->faker->country,
            'frac_de' => $this->faker->city,
            'str_de' => $this->faker->streetName,
            'num' => $this->faker->buildingNumber,
            'municip_it' => $this->faker->country,
            'frac_it' => $this->faker->city,
            'str_it' => $this->faker->streetName,
            'istatnciv' => $this->faker->sentence,
            'egon' => $this->faker->randomAscii,
            //'lat' => $this->faker->randomDigit,
            //'long' => $this->faker->randomDigit
            // 'lat' => $this->faker->randomFloat(14,16),
            // 'long' => $this->faker->randomFloat(5,5)
            'lat' => $this->faker->numerify('##.############'),
            'long' => $this->faker->numerify('###.############')
        ];
    }
}
