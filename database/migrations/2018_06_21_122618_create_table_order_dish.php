<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOrderDish extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_dish', function ($table) {
            $table->integer('order_id')
                ->unsigned()
                ->index();
            $table->foreign('order_id')
                ->references('id')
                ->on('orders');
            $table->integer('dish_id')
                ->unsigned()
                ->index();
            $table->foreign('dish_id')
                ->references('id')
                ->on('dishes');
            $table->primary(['order_id', 'dish_id']);
        }
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
