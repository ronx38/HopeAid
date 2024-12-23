<?php

namespace Database\Seeders;

use App\Models\Donasi;
use App\Models\JenisDonasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DonasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JenisDonasi::create([
            'item_donasi' => 'Uang'
        ]);

        JenisDonasi::create([
            'item_donasi' => 'Barang'
        ]);
    }
}
