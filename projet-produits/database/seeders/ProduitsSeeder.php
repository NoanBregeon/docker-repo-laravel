<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProduitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('produits_table')->insert([
            ['nom' => 'deo', 'prix' => 2.99],
            ['nom' => 'pain', 'prix' => 0.99],
            ['nom' => 'oeuf', 'prix' => 3.49],
            ['nom' => 'fromage', 'prix' => 4.99],
        ]);
    }
}
