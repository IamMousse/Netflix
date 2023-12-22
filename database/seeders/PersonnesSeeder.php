<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class PersonnesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('personnes')->insert([
            /* Matrix */
            [ /* Realisateur */
                'id' => 1,
                'nom' => 'Lana Wachowski',
                'dateN' => '1965-06-21',
                'dateDece' => '2023-12-12',
                'sexe' => 'Femme',
                'metier' => 'realisateur',
                //'genre_id' => 1,
                'photo' => 'lana_wachowski.jpg',
            ],
            [ /* Producteur */
                'id' => 2,
                'nom' => 'Joel Silver',
                'dateN' => '1952-07-14',
                'dateDece' => '2023-12-12',
                'sexe' => 'Homme',
                'metier' => 'producteur',
                //'genre_id' => 1,
                'photo' => 'joel_silver.jfif',
            ],
            [ /* Acteur */
                'id' => 3,
                'nom' => 'Keanu Reeves',
                'dateN' => '1964-09-02',
                'dateDece' => '2023-12-12',
                'sexe' => 'Homme',
                'metier' => 'acteur',
                //'genre_id' => 1,
                'photo' => 'keanu_reeves.jfif',
            ],

            /* A Classic Horror Story */
            [ /* Realisateur */
                'id' => 4,
                'nom' => 'Roberto De Feo',
                'dateN' => '1981-08-08',
                'dateDece' => '2023-12-12',
                'sexe' => 'Homme',
                'metier' => 'realisateur',
                //'genre_id' => 2,
                'photo' => 'roberto_de_feo.webp',
            ],
            [ /* Producteur */
                'id' => 5,
                'nom' => 'Maurizio Totti',
                'dateN' => '1954-01-07',
                'dateDece' => '2023-12-12',
                'sexe' => 'Homme',
                'metier' => 'producteur',
                //'genre_id' => 2,
                'photo' => 'maurizio-totti_.jpeg',
            ],
            [ /* Acteur */
                'id' => 6,
                'nom' => 'Matilda Lutz',
                'dateN' => '1992-01-28',
                'dateDece' => '2023-12-12',
                'sexe' => 'Femme',
                'metier' => 'acteur',
                //'genre_id' => 2,
                'photo' => 'matilda_lutz.jpg',
            ],

            /* Rocky 1 */
            [ /* Realisateur */
                'id' => 7,
                'nom' => 'John G. Avildsen',
                'dateN' => '1935-12-21',
                'dateDece' => '2023-12-12',
                'sexe' => 'Homme',
                'metier' => 'realisateur',
                //'genre_id' => 1,
                'photo' => 'john_g_avilsen.jpg',
            ],
            [ /* Producteur */
                'id' => 8,
                'nom' => 'Robert Chartoff',
                'dateN' => '1933-08-26',
                'dateDece' => '2023-12-12',
                'sexe' => 'Homme',
                'metier' => 'producteur',
                //'genre_id' => 1,
                'photo' => 'robert_chartoff.jfif',
            ],
            [ /* Acteur */
                'id' => 9,
                'nom' => 'Sylvester Stallone',
                'dateN' => '1946-07-06',
                'dateDece' => '2023-12-12',
                'sexe' => 'Homme',
                'metier' => 'acteur',
                //'genre_id' => 1,
                'photo' => 'sylvester_stallone.webp',
            ],
            
            /* ROMAN FRAYSSINET, SPECTACLE 'ALORS' */
            [ /* Realisateur */
                'id' => 10,
                'nom' => 'Roman Frayssinet',
                'dateN' => '1994-05-06',
                'dateDece' => '2023-12-12',
                'sexe' => 'Homme',
                'metier' => 'realisateur',
                //'genre_id' => 3,
                'photo' => 'roman_frayssinet.jpg',
            ],
            [ /* Producteur */
                'id' => 11,
                'nom' => 'Roman Frayssinet',
                'dateN' => '1994-05-06',
                'dateDece' => '2023-12-12',
                'sexe' => 'Homme',
                'metier' => 'producteur',
                //'genre_id' => 3,
                'photo' => 'roman_frayssinet.jpg',
            ],
            [ /* Acteur */
                'id' => 12,
                'nom' => 'Roman Frayssinet',
                'dateN' => '1994-05-06',
                'dateDece' => '2023-12-12',
                'sexe' => 'Homme',
                'metier' => 'acteur',
                //'genre_id' => 3,
                'photo' => 'roman_frayssinet.jpg',
            ],

            /* Prey */
            [ /* Realisateur */
                'id' => 13,
                'nom' => 'Dan Trachtenberg',
                'dateN' => '1981-05-11',
                'dateDece' => '2023-12-12',
                'sexe' => 'Homme',
                'metier' => 'realisateur',
                //'genre_id' => 3,
                'photo' => 'dan_trachtenberg.jfif',
            ],
            [ /* Producteur */
                'id' => 14,
                'nom' => 'John Davis',
                'dateN' => '1954-07-20',
                'dateDece' => '2023-12-12',
                'sexe' => 'Homme',
                'metier' => 'producteur',
                //'genre_id' => 3,
                'photo' => 'john_davis.jpg',
            ],
            [ /* Acteur */
                'id' => 15,
                'nom' => 'Amber Midthunder',
                'dateN' => '1997-04-26',
                'dateDece' => '2023-12-12',
                'sexe' => 'Femme',
                'metier' => 'acteur',
                //'genre_id' => 3,
                'photo' => 'amber_midthunder.jpg',
            ],

            /* Sherlock Holmes (2010) */
            [ /* Realisateur */
                'id' => 16,
                'nom' => 'Guy Ritchie',
                'dateN' => '1968-09-10',
                'dateDece' => '2023-12-12',
                'sexe' => 'Homme',
                'metier' => 'realisateur',
                //'genre_id' => 2,
                'photo' => 'guy_ritchie.jfif',
            ],
            [ /* Producteur */
                'id' => 17,
                'nom' => 'Joel Silver',
                'dateN' => '1952-07-14',
                'dateDece' => '2023-12-12',
                'sexe' => 'Homme',
                'metier' => 'producteur',
                //'genre_id' => 2,
                'photo' => 'joel_silver.jfif',
            ],
            [ /* Acteur */
                'id' => 18,
                'nom' => 'Robert Downey Jr.',
                'dateN' => '1965-05-04',
                'dateDece' => '2023-12-12',
                'sexe' => 'Homme',
                'metier' => 'acteur',
                //'genre_id' => 2,
                'photo' => 'robert_downey_jr.jfif',
            ],

            /* Mon voisin totoro */
            [ /* Realisateur */
                'id' => 19,
                'nom' => 'Hayao Miyazaki',
                'dateN' => '1941-01-05',
                'dateDece' => '2023-12-12',
                'sexe' => 'Femme',
                'metier' => 'realisateur',
                //'genre_id' => 3,
                'photo' => 'hayao_miyazaki.jfif',
            ],
            [ /* Producteur */
                'id' => 20,
                'nom' => 'Toru Hara',
                'dateN' => '1935-12-26',
                'dateDece' => '2023-12-12',
                'sexe' => 'Homme',
                'metier' => 'producteur',
                //'genre_id' => 3,
                'photo' => 'toru_hara.webp',
            ],
            [ /* Acteur */
                'id' => 21,
                'nom' => 'Noriko Hidaka',
                'dateN' => '1962-05-31',
                'dateDece' => '2023-12-12',
                'sexe' => 'Femme',
                'metier' => 'acteur',
                //'genre_id' => 1,
                'photo' => 'noriko_hidaka.jfif',
            ],

            /* Milli Vanilli */
            [ /* Realisateur */
                'id' => 22,
                'nom' => 'Luke Korem',
                'dateN' => '1982-11-01',
                'dateDece' => '2023-12-12',
                'sexe' => 'Homme',
                'metier' => 'realisateur',
                //'genre_id' => 1,
                'photo' => 'luke_korem.jfif',
            ],
            [ /* Producteur */
                'id' => 23,
                'nom' => 'Luke Korem',
                'dateN' => '1982-11-01',
                'dateDece' => '2023-12-12',
                'sexe' => 'Homme',
                'metier' => 'producteur',
                //'genre_id' => 1,
                'photo' => 'luke_korem.jfif',
            ],
            [ /* Acteur */
                'id' => 24,
                'nom' => 'Luke Korem',
                'dateN' => '1982-11-01',
                'dateDece' => '2023-12-12',
                'sexe' => 'Homme',
                'metier' => 'acteur',
                //'genre_id' => 2,
                'photo' => 'luke_korem.jfif',
            ],

            /* Narnia */
            [ /* Realisateur */
                'id' => 25,
                'nom' => 'Andrew Adamson',
                'dateN' => '1966-12-01',
                'dateDece' => '2023-12-12',
                'sexe' => 'Homme',
                'metier' => 'realisateur',
                //'genre_id' => 2,
                'photo' => 'andrew_adamson.jfif',
            ],
            [ /* Producteur */
                'id' => 26,
                'nom' => 'Mark Johnson',
                'dateN' => '1945-12-27',
                'dateDece' => '2023-12-12',
                'sexe' => 'Homme',
                'metier' => 'producteur',
                //'genre_id' => 2,
                'photo' => 'mark_johnson.jfif',
            ],
            [ /* Acteur */
                'id' => 27,
                'nom' => 'Tilda Swinton',
                'dateN' => '1960-11-05',
                'dateDece' => '2023-12-12',
                'sexe' => 'Homme',
                'metier' => 'acteur',
                //'genre_id' => 2,
                'photo' => 'tilda_swinton.jfif',
            ],

            /* Jumanji: Welcome to the jungle */
            [ /* Realisateur */
                'id' => 28,
                'nom' => 'Jake Kasdan',
                'dateN' => '1974-10-28',
                'dateDece' => '2023-12-12',
                'sexe' => 'Homme',
                'metier' => 'realisateur',
                //'genre_id' => 3,
                'photo' => 'jake_kasdan.jfif',
            ],
            [ /* Producteur */
                'id' => 29,
                'nom' => 'Matt Tolmach',
                'dateN' => '1964-01-01',
                'dateDece' => '2023-12-12',
                'sexe' => 'Homme',
                'metier' => 'producteur',
                //'genre_id' => 3,
                'photo' => 'matt-tolmach.jpg',
            ],
            [ /* Acteur */
                'id' => 30,
                'nom' => 'Dwayne Johnson',
                'dateN' => '1972-05-02',
                'dateDece' => '2023-12-12',
                'sexe' => 'Homme',
                'metier' => 'acteur',
                //'genre_id' => 1,
                'photo' => 'dwayne_johnson.webp',
            ],

        ]);    
    }
}
