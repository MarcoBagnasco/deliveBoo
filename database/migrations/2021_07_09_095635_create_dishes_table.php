<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dishes', function (Blueprint $table) 
        {
            $table->id();
            $table->string('name', 50);
            $table->string('ingredients');
            $table->text('description');
            $table->float('price', 5,2);
            $table->boolean('visibility');
            $table->string('image')->nullable();
            $table->unsignedBigInteger('restaurant_id');
            $table->timestamps();
            // define foreign key
            $table->foreign('restaurant_id')->references('id')->on('restaurants')->onDelete('cascade');
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
