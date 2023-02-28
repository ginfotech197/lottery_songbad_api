<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManualResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manual_results', function (Blueprint $table) {
            $table->id();
            $table ->foreignId('draw_master_id')->references('id')->on('draw_masters')->onDelete('cascade');
            $table ->foreignId('rank_id')->references('id')->on('ranks')->onDelete('cascade');
            $table->date('game_date');
            $table->string('value');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manual_results');
    }
}
