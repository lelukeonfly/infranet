<?php

namespace Database\Seeders;

use App\Models\Municipality;
use App\Models\Number;
use App\Models\Street;
use Illuminate\Database\Seeder;

class RelationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Municipality::factory(5)->create();
        //$municipalities = Municipality::all()->pluck('id');


        foreach (Municipality::all() as $municipality) {

            Street::factory(5)->create();
            //$streets = Street::all()->pluck('id');
            $streets = Street::inRandomOrder()->take(5)->pluck('id');

            $municipality->streets()->attach($streets);

            foreach (Street::all() as $street) {

                Number::factory(5)->create();
                // $numbers = Number::all()->pluck('id');
                $numbers = Number::inRandomOrder()->take(5)->pluck('id');

                $street->numbers()->attach($numbers);

            }

        }
    }
}
