<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     *
     */


    public function up()
    {
        Schema::create('sessions_homes', function (Blueprint $table) {
            $table->id();

            $table->string("title");
            $table->text("description");

            $table->date("start")->nullable();
            $table->date("end")->nullable();

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
        Schema::dropIfExists('sessions_homes');
    }
}
