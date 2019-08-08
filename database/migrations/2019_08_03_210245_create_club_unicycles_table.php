<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubUnicyclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('club_unicycles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uni_id')->unique();
            $table->string('description');
            $table->boolean('in_use');
            $table->bigInteger('last_used_by')->nullable();
            $table->timestamp('last_checked_out_at')->nullable();
            $table->timestamp('last_returned_at')->nullable();
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
        Schema::dropIfExists('club_unicycles');
    }
}
