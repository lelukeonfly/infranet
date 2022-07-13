<?php

namespace Database\Seeders;

use App\Models\Fraction;
use App\Models\Municipality;
use App\Models\Number;
use App\Models\Street;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Municipality::factory(10)//create 10 Municipalities
        // ->create()
        // ->each(function ($municipality)
        // {
        //     Fraction::factory(5)//for every municipality create 5 Fractions it belongs to
        //     ->create(['municipality_id' => $municipality->id]);

        //     Street::factory(5)
        //     ->create(/*['municipality_id' => $municipality->id]*/)//TODO: check if working because n:m relation
        //     ->each(function ($street)
        //     {
        //         Number::factory(5)
        //     ->create(/*['street_id' => $street->id]*/);//TODO: check if working because n:m relation
        //     });
        // });
    }
}
