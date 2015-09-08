<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGentsDressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gents_dress', function (Blueprint $table) {
            $table->increments('id');
            $table->string('gents_dress_img_id',20)->nullable();
            $table->string('gents_dress_img_path',300)->nullable();
            $table->string('gents_dress_title',200)->nullable();
            $table->string('gents_dress_des',500);
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
        Schema::drop('gents_dress');
    }
}
