<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->string('name');
            $table->string('email');
            $table->text('body');
            $table->unsignedBigInteger('game_id')->unsigned();
            $table->timestamps();
            $table->foreign('game_id')->references('id')->on('games');
        });
    }

    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
