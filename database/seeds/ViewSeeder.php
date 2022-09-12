<?php

use App\View;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ViewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 60; $i++) {
            $new_view = new View();
            $new_view->apartment_id = $faker->numberBetween(1, 21);
            $new_view->ip = long2ip(rand(0, "4294967295"));
            $new_view->save();
        }
    }
}
