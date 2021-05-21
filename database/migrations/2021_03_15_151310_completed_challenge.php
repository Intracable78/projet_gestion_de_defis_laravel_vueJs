<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CompletedChallenge extends Migration
{
    /**
     * Run the migrations.
     *
     * @param $table
     * @return void
     */
    public function up()
    {
        Schema::create('completed_challenge', function (Blueprint $table) {

        $table->id();



        $table->bigInteger("user_id")->unsigned();
        $table->bigInteger("session_id")->unsigned();
        $table->bigInteger("challenge_id")->unsigned();

        $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade")->onUpdate("cascade");
        $table->foreign("session_id")->references("id")->on("sessions_homes")->onDelete("cascade")->onUpdate("cascade");
        $table->foreign("challenge_id")->references("id")->on("challenges")->onDelete("cascade")->onUpdate("cascade");
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
        //
    }
}
