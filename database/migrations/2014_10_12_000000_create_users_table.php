<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');

            $table->string('username', 191);
            $table->string('name', 191);

            $table->string('email')->unique();
            //$table->string('password');
            $table->string('image', 191);

            $table->integer('campusid');
            $table->integer('fosid');

            $table->string('role', 191);
            $table->string('api_token', 255);

            $table->rememberToken();


            $table->string('canvas_key', 191);
            $table->string('canvas_refresh', 255);
            $table->integer('canvas_id');

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
