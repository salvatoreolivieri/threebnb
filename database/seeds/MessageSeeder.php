<?php

use App\Apartment;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Message;

class MessageSeeder extends Seeder
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

            for ($i=0; $i < count($apartment['messages-text']); $i++) {
                $new_message = new Message();
                $new_message->apartment_id = $apartment['id'];
                $new_message->text = $apartment['messages-text'][$i];
                $new_message->email = $apartment['messages-email'][$i];
                $new_message->save();
            }

        }


    }
}
