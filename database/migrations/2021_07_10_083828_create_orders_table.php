<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->float('tot_paid', 5,2);
            $table->string('customer_name', 20);
            $table->string('customer_lastname', 20);
            $table->string('customer_address');
            $table->char('phone_number', 10);
            $table->dateTime('date');
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
        Schema::dropIfExists('orders');
    }
}
