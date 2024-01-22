<?php

namespace Database\Seeders;

use App\Models\Building;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BuildingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Building::create(['name' => 'Cramer']);
        Building::create(['name' => 'Workman']);
        Building::create(['name' => 'MSEC']);
        Building::create(['name' => 'Speare']);
        Building::create(['name' => 'Weir']);
    }
}
