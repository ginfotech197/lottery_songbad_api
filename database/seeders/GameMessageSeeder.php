<?php

namespace Database\Seeders;

use App\Models\GameMessage;
use Illuminate\Database\Seeder;

class GameMessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GameMessage::insert([
            ['message'=> 'BHUTAN STATE LOTTERY'],
            ['message'=> 'NODI'],
            ['message'=> 'MOTI WEEKLY MORNING'],
            ['message'=> '60st Draw at 01/02/2023 MRP 6/-'],
        ]);
    }
}
