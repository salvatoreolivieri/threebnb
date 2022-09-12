<?php

use App\Apartment;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\User;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $apartments = config('apartments');

        foreach ($apartments as $apartment) {

            $new_apartment = new Apartment();
            $new_apartment->user_id = $apartment['user_id'];
            $new_apartment->title = $apartment['title'];
            $new_apartment->rooms = $apartment['rooms'];
            $new_apartment->beds = $apartment['beds'];
            $new_apartment->bathrooms = $apartment['bathrooms'];
            $new_apartment->sqm = $apartment['sqm'];
            $new_apartment->address = $apartment['address'];
            $new_apartment->latitude = $apartment['latitude'];
            $new_apartment->longitude = $apartment['longitude'];
            $new_apartment->image = $apartment['image'];
            $new_apartment->image_original_name = $apartment['image_original_name'];
            $new_apartment->visible = $apartment['visible'];

            $new_apartment->save();
        }
    }
}
