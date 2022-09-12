<?php

use App\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $servicesList = [
            [
                'name' => "Wi-Fi",
                'icon' => "fa-solid fa-wifi",
            ],

            [
                'name' => "Posto Macchina",
                'icon' => "fa-solid fa-square-parking",
            ],

            [
                'name' => "Piscina",
                'icon' => "fa-solid fa-person-swimming",
            ],

            [
                'name' => "Portineria",
                'icon' => "fa-solid fa-bell-concierge",
            ],
            [
                'name' => "Idromassaggio",
                'icon' => "fa-solid fa-bath",
            ],
            [
                'name' => "Camino",
                'icon' => "fa-solid fa-fire",
            ],
            [
                'name' => "Aria Condizionata",
                'icon' => "fa-regular fa-snowflake",
            ],
            [
                'name' => "Sauna",
                'icon' => "fa-solid fa-hot-tub-person",
            ],
            [
                'name' => "Vista Mare",
                'icon' => "fa-solid fa-house-flood-water",
            ],
            [
                'name' => "BBQ",
                'icon' => "fa-solid fa-bacon",
            ]
        ];

        foreach ($servicesList as $service) {
            $new_service = new Service;
            $new_service->name = $service['name'];
            $new_service->icon = $service['icon'];
            $new_service->save();
        }
    }
}
