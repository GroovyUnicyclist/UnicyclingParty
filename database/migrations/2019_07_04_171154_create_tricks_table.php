<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTricksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tricks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->json('alts')->nullable();
            $table->string('definition');
            $table->string('video')->nullable();
            $table->bigInteger('rider_id')->nullable();
            $table->year('year')->nullable();
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
        Schema::dropIfExists('tricks');
    }
}
