<?php

use Illuminate\Database\Seeder;
use App\Dish;

class DishesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ( $i = 0; $i < 5; $i++) {
            $new_dish = new Dish();

            $new_dish->name = "dish" . $i;
            $new_dish->ingredients = "ingredient" . $i;
            $new_dish->description = "description" . $i;
            $new_dish->price = "price" . $i;
            $new_dish->visibility = true;
            $new_dish->restaurant_id = 1;


            $new_dish->save();

        }
    }
}
