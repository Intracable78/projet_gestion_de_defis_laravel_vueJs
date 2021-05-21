<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean("admin")->default(0);
            $table->string("address");
            $table->string("phone");
            $table->string('email', 100)->unique();
            $table->date("birth");
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string("points_won")->nullable();

            $table->bigInteger("session_id")->unsigned()->nullable();

            $table->foreign('session_id')->references('id')->on('sessions_home')->onDelete("cascade")->onUpdate('cascade');
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
        Schema::dropIfExists('users');
    }
}
