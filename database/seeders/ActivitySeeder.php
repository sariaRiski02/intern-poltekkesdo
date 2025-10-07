<?php

namespace Database\Seeders;

use App\Models\activity;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        activity::factory()->count(10)->create();
    }
}
