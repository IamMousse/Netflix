<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use DB;

class UsagersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usagers')->insert([
            [
                'nom_usager' => 'Shany4',
                'nom' => 'Jones',
                'prenom' => 'Bertholeme',
                'email' => 'shany.jones@hotmail.com',
                'role' => 1,
                'password' => Hash::make('7823'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom_usager' => 'Noua3',
                'nom' => 'Murphy',
                'prenom' => 'Eddie',
                'email' => 'noua.murphy@hotmail.com',
                'role' => 2,
                'password' => Hash::make('1234'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom_usager' => 'Yousouf8',
                'nom' => 'Dog',
                'prenom' => 'Snoop',
                'email' => 'yousouf.dog@hotmail.com',
                'role' => 3,
                'password' => Hash::make('8945'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
