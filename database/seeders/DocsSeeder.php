<?php

namespace Database\Seeders;

use App\Models\docs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        docs::factory(10)->create();
    }
}
