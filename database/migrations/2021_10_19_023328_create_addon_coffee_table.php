<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddonCoffeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('addon_coffee', function (Blueprint $table) {

            $table->integer('addon_id')->unsigned();

            $table->integer('coffee_id')->unsigned();

            $table->foreign('addon_id')->references('id')->on('addons')

                ->onDelete('cascade');

            $table->foreign('coffee_id')->references('id')->on('coffees')

                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addon_coffee');
    }
}
