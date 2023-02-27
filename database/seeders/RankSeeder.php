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
            ['rank_name'=> '1st Prize'],
            ['rank_name'=> '2nd Prize'],
            ['rank_name'=> '3rd Prize'],
            ['rank_name'=> '4th Prize'],
            ['rank_name'=> '5th Prize'],
            ['rank_name'=> '6th Prize']
        ]);
    }
}
