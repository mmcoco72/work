<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiaryEmotionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diary_emotion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('diary_id');
            $table->foreign('diary_id')->references('id')->on('diaries')->onDelete('cascade');
            $table->unsignedInteger('emotion_id');
            $table->foreign('emotion_id')->references('id')->on('emotions')->onDelete('cascade');
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
        Schema::dropIfExists('diary_emotion');
    }
}
