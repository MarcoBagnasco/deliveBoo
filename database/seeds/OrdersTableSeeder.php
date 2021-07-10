<?php

use Illuminate\Database\Seeder;
use App\Order;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ( $i = 0; $i < 5; $i++) {
            $new_order = new Order();

            $new_order->customer_name = "Strunz" . $i;
            $new_order->customer_lastname = "ingredient" . $i;
            $new_order->customer_phonenumber = "description" . $i;
            $new_order->customer_address = "price" . $i;
            $new_order->date = 2021-07-10;
            $new_order->restaurant_id = 1;
            $new_order->tot_paid = 50;


            $new_order->save();

        }
    }
}
