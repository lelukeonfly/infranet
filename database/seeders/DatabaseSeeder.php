<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(AddressSeeder::class);
        $this->call(RelationSeeder::class);
        $this->call(ProviderSeeder::class);
        $this->call(NewsSeeder::class);
    }
}
