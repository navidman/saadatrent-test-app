<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoffeeAddonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coffee_addon', function (Blueprint $table) {
            $table->unsignedBigInteger('coffee_id');
            $table->foreign('coffee_id')->references('id')->on('coffees')->onDelete('cascade');
            $table->unsignedBigInteger('addon_id');
            $table->foreign('addon_id')->references('id')->on('addons')->onDelete('cascade');
            $table->primary(['coffee_id' , 'addon_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coffee_addon');
    }
}
