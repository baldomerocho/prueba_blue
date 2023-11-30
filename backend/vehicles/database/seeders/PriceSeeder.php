<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prices = [
            ["name"=> "Oficial", "price"=> 0.0],
            ["name"=> "Residente", "price"=> 0.05],
            ["name"=> "No residente", "price"=> 0.50],
        ];

        foreach ($prices as $price) {
            \App\Models\V1\Price::factory()->create($price);
        }
    }
}
