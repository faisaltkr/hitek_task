<?php

namespace Database\Seeders;

use App\Models\Handset;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HandsetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Handset::factory(10)->create();
    }
}
