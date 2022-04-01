<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Location::factory()->create([
            'address' => 'Local Mar de Niebla',
            'resource_id' => rand(1, 6),
        ]);

        Location::factory()->create([
            'address' => 'CMI Ateneo',
            'resource_id' => rand(1, 6),
        ]);

        Location::factory()->create([
            'address' => 'Local Abierto hasta el amanecer',
            'resource_id' => rand(1, 6),
        ]);

        Location::factory()->create([
            'address' => 'Pabellón Mata Jove',
            'resource_id' => rand(1, 6),
        ]);

        Location::factory()->create([
            'address' => 'Cocina de Diego',
            'resource_id' => '7',
        ]);
    }
}
