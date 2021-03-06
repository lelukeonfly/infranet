<?php

namespace Database\Seeders;

use Database\Factories\UserFactory;
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
        $this->call([
            RelationSeeder::class,
            AddressSeeder::class,
            ProviderSeeder::class,
            NewsSeeder::class,
            UserSeeder::class,
        ]);
    }
}
