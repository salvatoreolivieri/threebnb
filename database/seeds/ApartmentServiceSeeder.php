<?php

use Illuminate\Database\Seeder;
use App\Apartment;
use App\Service;

class ApartmentServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $apartments = config('apartments');

        foreach ($apartments as $defaultApartment) {

            $apartment = Apartment::find($defaultApartment['id']);

            for ($i=0; $i < count($defaultApartment['services']); $i++) {
                $apartment->services()->attach($defaultApartment['services'][$i]);
            }
        }
    }
}
