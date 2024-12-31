<?php

namespace Database\Seeders;

use App\Models\Evaluee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EvalueeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Evaluee::factory()
            ->count(25)
            ->create();
    }
}
