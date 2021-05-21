<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChallengesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('challenges', function (Blueprint $table) {
            $table->id();

            $table->string("title")->nullable();
            $table->text("description");

            $table->integer("points");

            $table->bigInteger("session_id")->unsigned();

            $table->foreign("session_id")->references("id")->on("sessions_homes")->onDelete("cascade")->onUpdate("cascade");

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
        Schema::dropIfExists('challenges');
    }
}
