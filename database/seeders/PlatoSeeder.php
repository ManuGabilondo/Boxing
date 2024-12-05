<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PlatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('platos')->insert([
            ['id' => 1, 'nombre' => 'Espaguetis a la boloñesa'],
            ['id' => 2, 'nombre' => 'Pollo al curry'],
        ]);
    }
}
