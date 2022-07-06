<?php

namespace Database\Seeders;

use App\Models\News;
use App\Models\Provider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //News::factory(10)->create();
        //Provider::factory()->create();
        $this->call(ProviderSeeder::class);
        $this->call(NewsSeeder::class);
    }
}
