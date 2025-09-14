<?php

namespace Database\Seeders;

use App\Models\requirment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RequirmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        requirment::factory(15)->create();
    }
}
