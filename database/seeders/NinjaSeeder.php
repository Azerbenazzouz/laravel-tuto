<?php

namespace Database\Seeders;

use App\Models\Ninja;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NinjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ninja::factory()->count(50)->create();
    }
}
