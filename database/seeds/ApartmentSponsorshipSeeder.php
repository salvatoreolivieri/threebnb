<?php

use Illuminate\Database\Seeder;
use App\Sponsorship;
use App\Apartment;
use Carbon\Carbon;

class ApartmentSponsorshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $apartments = config('apartments');

        for ($i=0; $i < count($apartments); $i++) { 

            $apartment = Apartment::find($apartments[$i]['id']);
            
            if($apartments[$i]['sponsorships'] != 0){
                
                $apartment->sponsorships()->attach($apartments[$i]['sponsorships']);

                if($apartments[$i]['sponsorships'] == 1){
                    $apartment->sponsorships[0]->expired_at = Carbon::now()->addDays(1);
                }
                else if($apartments[$i]['sponsorships'] == 2){
                    $apartment->sponsorships[0]->expired_at = Carbon::now()->addDays(3);
                }
                else{
                    $apartment->sponsorships[0]->expired_at = Carbon::now()->addDays(6);
                }
    
                $apartment->push();

            }
        }
    }
}
