<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWomenDressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('women_dress', function (Blueprint $table) {
            $table->increments('id');
            $table->string('women_dress_img_id',20)->nullable();
            $table->string('women_dress_img_path',300)->nullable();
            $table->string('women_dress_title',200)->nullable();
            $table->string('women_dress_des',500);
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
        Schema::drop('women_dress');
    }
}
