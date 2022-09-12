<?php

use App\Sponsorship;
use Illuminate\Database\Seeder;

class SponsorshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sponsorships = [
            [
                'name' => 'light',
                'price' => 2.99,
                'time_amount' => 24,
            ],
            [
                'name' => 'medium',
                'price' => 5.99,
                'time_amount' => 72,
            ],
            [
                'name' => 'large',
                'price' => 9.99,
                'time_amount' => 144,
            ],
        ];

        foreach ($sponsorships as $sponsorship) {
            $new_sponsorship = new Sponsorship;
            $new_sponsorship->name = $sponsorship['name'];
            $new_sponsorship->price = $sponsorship['price'];
            $new_sponsorship->time_amount = $sponsorship['time_amount'];
            $new_sponsorship->save();
        }
    }
}
