<?php

namespace Database\Seeders;

use App\Models\PetWalks;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PetWalksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PetWalks::factory()->times(1)->create();
    }
}
