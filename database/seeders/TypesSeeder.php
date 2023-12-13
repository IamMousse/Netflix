<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tables')->insert([
            [
                'id' => 1,
                'genre' => 'Comedie'
            ],
            [
                'id' => 2,
                'genre' => 'Criminel'
            ],
            [
                'id' => 3,
                'genre' => 'Horreur'
            ],
            [
                'id' => 4,
                'genre' => 'Western'
            ],
            [
                'id' => 5,
                'genre' => 'Science-Fiction'
            ],
            [
                'id' => 6,
                'genre' => 'Action'
            ],
            [
                'id' => 7,
                'genre' => 'Aventure'
            ],
            [
                'id' => 8,
                'genre' => 'Fantastique'
            ],
            [
                'id' => 9,
                'genre' => 'Romance'
            ],
            [
                'id' => 10,
                'genre' => 'Anime'
            ],
        ]);
    }
}
