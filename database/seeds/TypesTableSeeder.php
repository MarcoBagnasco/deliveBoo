<?php

use Illuminate\Database\Seeder;
use App\Type;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['Pizza', 'Hamburger', 'Cinese', 'Panini', 'Giapponese', 'Americani', 'Messicano', 'Kebab', 'Dolci', 'Vegano'];

        foreach ($types as $type) {
            $new_type = new Type();

            $new_type->name = $type;

            $new_type->save();

        }
    }
}
