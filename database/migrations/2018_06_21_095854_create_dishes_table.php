<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dishes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->string('name');
            $table->integer('price');
            $table->integer('restaurant_id')->unsigned;
            $table->string('image');
            $table->timestamps();
        });

        Schema::table('dishes', function($table) {
            $table->foreign('restaurant_id')->references('id')->on('restaurants');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dishes');
    }
}
