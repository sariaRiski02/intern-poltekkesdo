<?php

namespace Database\Seeders;

use App\Models\visitor;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VisitorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        visitor::factory()->count(10)->create();
    }
}
