<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManualResult extends Model
{
    use HasFactory;

    protected $hidden = [
        "created_at","updated_at"
    ];

    public function ranks(){
        return $this->belongsTo(Rank::class,'rank_id');
    }

    public function drawMasters(){
        return $this->belongsTo(drawMaster::class,'draw_master_id');
    }

}
