<?php

namespace Database\Seeders;

use App\Models\drawMaster;
use Illuminate\Database\Seeder;

class DrawMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DrawMaster::insert([
            ['draw_name'=> '','start_time'=>'00:00:00','end_time'=>'14:00:00','visible_time'=>'02:00 pm','active'=>1],
            ['draw_name'=> '','start_time'=>'14:00:00','end_time'=>'21:00:00','visible_time'=>'09:00 pm','active'=>1],
        ]);
    }
}
