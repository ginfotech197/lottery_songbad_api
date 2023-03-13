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
        $this->call(DrawMasterSeeder::class);
        $this->call(RankSeeder::class);
        $this->call(GameMessageSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
