<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class PersonneFilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('film_personne')->insert([
            [
                'id' => 1,
                'film_id' => 1,
                'personne_id' => 3,
            ],
            [
                'id' => 2,
                'film_id' => 2,
                'personne_id' => 6,
            ],
            [
                'id' => 3,
                'film_id' => 3,
                'personne_id' => 9,
            ],
            [
                'id' => 4,
                'film_id' => 4,
                'personne_id' => 12,
            ],
            [
                'id' => 5,
                'film_id' => 5,
                'personne_id' => 15,
            ],
            [
                'id' => 6,
                'film_id' => 6,
                'personne_id' => 18,
            ],
            [
                'id' => 7,
                'film_id' => 7,
                'personne_id' => 21,
            ],
            [
                'id' => 8,
                'film_id' => 8,
                'personne_id' => 24,
            ],
            [
                'id' => 9,
                'film_id' => 9,
                'personne_id' => 27,
            ],
            [
                'id' => 10,
                'film_id' => 10,
                'personne_id' => 30,
            ],
        ]);   
    }
}
