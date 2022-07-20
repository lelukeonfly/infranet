<?php

namespace Database\Factories;

use App\Models\Municipality;
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

        $municipality = Municipality::inRandomOrder()->pluck('id')->first();
        $fraction = Municipality::find($municipality)->fractions()->inRandomOrder()->pluck('id')->first();
        $street = Municipality::find($municipality)->streets()->inRandomOrder()->pluck('id')->first();
        $number = Street::find($street)->numbers()->inRandomOrder()->pluck('id')->first();

        return [
            'municipality_id' => $municipality,
            'fraction_id' => $fraction,
            'street_id' => $street,
            'number_id' => $number,
            // 'istatnciv' => fake()->asciify('**********'),
            'istatnciv' => fake()->countryCode(),
            'egon' => fake()->asciify('**********'),
            'lat' => fake()->numerify('##.##########'),
            'long' => fake()->numerify('##.##########'),
        ];
    }
}
