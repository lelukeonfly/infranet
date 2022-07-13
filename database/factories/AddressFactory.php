<?php

namespace Database\Factories;

use App\Models\Fraction;
use App\Models\Municipality;
use App\Models\Number;
use App\Models\Street;
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
            'municipality_id' => Municipality::factory(5)->create(),
            'fraction_id' => Fraction::factory(5)->create(),
            'street_id' => Street::factory(5)->create(),
            'number_id' => Number::factory(5)->create(),
            'istatnciv' => $this->faker->sentence(),
            'egon' => $this->faker->randomAscii(),
            'lat' => $this->faker->numerify('##.############'),
            'long' => $this->faker->numerify('###.############')
        ];
    }
}
