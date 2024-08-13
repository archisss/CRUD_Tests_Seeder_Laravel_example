<?php

namespace Database\Seeders;

use DB;
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
        DB::table('pet_walks')->insert(
            array(
                'pet_id' => 11,
                'location' => 'el parque',
                'walk_date' => '2024-02-14'
            )
        );
    }
}
