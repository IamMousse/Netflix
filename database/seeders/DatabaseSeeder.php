<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(PersonnesSeeder::class);
        $this->call(FilmsSeeder::class);
        $this->call(PersonneFilmSeeder::class);
        $this->call(UsagersSeeder::class);
        $this->call(GenresSeeder::class);
        $this->call(TypesSeeder::class);
    }
}
