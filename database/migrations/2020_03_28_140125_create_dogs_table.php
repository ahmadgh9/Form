<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dogs', function (Blueprint $table) {
            $table->id();
            $table->string('breed');
            $table->string('name');
            $table->string('image')->unique();
            $table->unsignedInteger('apartment');
            $table->unsignedInteger('sound');
            $table->unsignedInteger('hair_loss');
            $table->unsignedInteger('daily_exercise');
            $table->unsignedInteger('health_care');
            $table->unsignedInteger('maintenance');
            $table->unsignedInteger('attention');
            $table->unsignedInteger('compatibility_with_dogs');
            $table->unsignedInteger('compatibility_with_children');
            $table->unsignedInteger('compatibility_with_cats');
            $table->unsignedInteger('iq');
            $table->unsignedInteger('guard');
            $table->unsignedInteger('stranger');
            $table->string('link');
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
        Schema::dropIfExists('dogs');
    }
}
