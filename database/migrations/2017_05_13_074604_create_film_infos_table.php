<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('film_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->text('content');
            $table->float('imdb');
            $table->integer('year');
            $table->string('time');
            $table->string('episode');
            $table->string('quality');
            $table->string('resolution');
            $table->string('directory');
            $table->text('image');
            $table->string('type');
            $table->integer('film_id')->unsigned();
            $table->foreign('film_id')->references('id')->on('films')->onDelete('cascade');
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
        Schema::dropIfExists('film_infos');
    }
}
