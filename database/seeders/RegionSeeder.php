<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regions = [
            ['name' => 'Sumatera', 'debitur' => 1000, 'nilai' => 2000],
            ['name' => 'Kalimantan', 'debitur' => 1200, 'nilai' => 2500],
            ['name' => 'Jawa', 'debitur' => 1100, 'nilai' => 2200],
            ['name' => 'Sulawesi', 'debitur' => 1500, 'nilai' => 3000],
            ['name' => 'Bali', 'debitur' => 500, 'nilai' => 1000],
            ['name' => 'Papua', 'debitur' => 1300, 'nilai' => 2700],
        ];

        foreach ($regions as $region) {
            Region::create($region);
        }
    }
}
