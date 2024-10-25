<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Animal;  // Make sure to import the Animal model

class AnimalSeeder extends Seeder
{
    public function run()
    {
        // Use the factory to create 5 animals
        Animal::factory()->count(5)->create();
    }
}
