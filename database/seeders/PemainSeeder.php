<?php

namespace Database\Seeders;

use App\Models\PemainModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PemainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PemainModel::factory(11)->create();
    }
}
