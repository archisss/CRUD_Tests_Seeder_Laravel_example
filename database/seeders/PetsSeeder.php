<?php

namespace Database\Seeders;

use App\Models\Pets;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class PetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pets::factory()->times(10)->create();
    }
}
