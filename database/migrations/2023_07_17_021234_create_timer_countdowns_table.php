<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timer_countdowns', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_play');
            $table->integer('time');
            $table->integer('duration');
            $table->integer('is_countdown');
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
        Schema::dropIfExists('timer_countdowns');
    }
};
