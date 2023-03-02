<?php

namespace Database\Seeders;

use App\Models\Rank;
use Illuminate\Database\Seeder;

class RankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rank::insert([
            ['rank_name'=> '1st Prize','prize' => 900],
            ['rank_name'=> '2nd Prize','prize' => 800],
            ['rank_name'=> '3rd Prize','prize' => 700],
            ['rank_name'=> '4th Prize','prize' => 600],
            ['rank_name'=> '5th Prize','prize' => 500],
            ['rank_name'=> '6th Prize','prize' => 400]
        ]);
    }
}
