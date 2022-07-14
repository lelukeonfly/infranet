<?php

namespace Database\Seeders;

use App\Models\Fraction;
use App\Models\Municipality;
use App\Models\Number;
use App\Models\Street;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class RelationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;

        Municipality::factory($amount)->create()->each(function ($mun) use ($amount) {
            $mun->streets()->attach(Street::factory($amount)->create()->each(function ($str) use ($amount) {
                $str->numbers()->attach(Number::factory($amount)->create());
            }));
        });

        foreach (Municipality::all() as $m) {
            Fraction::factory(2)->create(['municipality_id' => Municipality::inRandomOrder()->first()->id]);
        }

    }
}
