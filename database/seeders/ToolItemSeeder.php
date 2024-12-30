<?php

namespace Database\Seeders;

use App\Models\ToolItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ToolItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ToolItem::factory()
            ->count(10)
            ->create();
    }
}
