<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->increments('id');

            $table->string('public_id', 255);
            $table->string('filename', 255);
            $table->string('originalname', 255);
            $table->string('filepath', 255);
            $table->integer('user_id');
            $table->string('title', 255);
            $table->integer('courseid');
            $table->integer('documenttypeid');
            $table->integer('degreeid');
            $table->integer('pubyearid');
            $table->integer('fosid');
            $table->tinyInteger('hasbook');
            $table->string('booktitle', 255);
            $table->text('filedescription', 255);

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
        Schema::dropIfExists('files');
    }
}
