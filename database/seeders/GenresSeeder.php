<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genre_personnes')->insert([
            [
                'id' => 1,
                'typegenre' => 'Shany'
            ],
            [
                'id' => 2,
                'typegenre' => 'Animation'
            ],
            [
                'id' => 3,
                'typegenre' => 'Animal'
            ],
        ]); 
    }
}
