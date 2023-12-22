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
                'photo' => 'https://fr.web.img6.acsta.net/c_310_420/pictures/19/07/02/14/35/4286615.jpg',
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
                'photo' => 'https://imagesvc.meredithcorp.io/v3/mm/image?url=https:%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F6%2F2017%2F06%2Fgettyimages-633942480-2000.jpg',
            ],
            [ /* Producteur */
                'id' => 8,
                'nom' => 'Robert Chartoff',
                'dateN' => '1933-08-26',
                'dateDece' => '2023-12-12',
                'sexe' => 'Homme',
                'metier' => 'producteur',
                //'genre_id' => 1,
                'photo' => 'https://th.bing.com/th/id/R.96f2d20d01680ee826801ab1b4b27466?rik=G4ifjsnZusVAtw&pid=ImgRaw&r=0',
            ],
            [ /* Acteur */
                'id' => 9,
                'nom' => 'Sylvester Stallone',
                'dateN' => '1946-07-06',
                'dateDece' => '2023-12-12',
                'sexe' => 'Homme',
                'metier' => 'acteur',
                //'genre_id' => 1,
                'photo' => 'https://mx.web.img2.acsta.net/pictures/19/05/24/14/51/3035180.jpg',
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
                'photo' => 'https://image.tmdb.org/t/p/w276_and_h350_face/35KZdQONjN0dx4noBhn9LX3sKdG.jpg',
            ],
            [ /* Producteur */
                'id' => 11,
                'nom' => 'Roman Frayssinet',
                'dateN' => '1994-05-06',
                'dateDece' => '2023-12-12',
                'sexe' => 'Homme',
                'metier' => 'producteur',
                //'genre_id' => 3,
                'photo' => 'https://image.tmdb.org/t/p/w276_and_h350_face/35KZdQONjN0dx4noBhn9LX3sKdG.jpg',
            ],
            [ /* Acteur */
                'id' => 12,
                'nom' => 'Roman Frayssinet',
                'dateN' => '1994-05-06',
                'dateDece' => '2023-12-12',
                'sexe' => 'Homme',
                'metier' => 'acteur',
                //'genre_id' => 3,
                'photo' => 'https://image.tmdb.org/t/p/w276_and_h350_face/35KZdQONjN0dx4noBhn9LX3sKdG.jpg',
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
                'photo' => 'https://th.bing.com/th/id/R.39399938ceb586b99ba4ee86c4021024?rik=DL6TY%2b1P9iRYXQ&pid=ImgRaw&r=0',
            ],
            [ /* Producteur */
                'id' => 14,
                'nom' => 'John Davis',
                'dateN' => '1954-07-20',
                'dateDece' => '2023-12-12',
                'sexe' => 'Homme',
                'metier' => 'producteur',
                //'genre_id' => 3,
                'photo' => 'https://alchetron.com/cdn/john-davis-producer-43d45684-a15e-49f5-b549-6912d8d3bad-resize-750.jpg',
            ],
            [ /* Acteur */
                'id' => 15,
                'nom' => 'Amber Midthunder',
                'dateN' => '1997-04-26',
                'dateDece' => '2023-12-12',
                'sexe' => 'Femme',
                'metier' => 'acteur',
                //'genre_id' => 3,
                'photo' => 'https://superstarsbio.com/wp-content/uploads/2018/11/4-Amber-Midthunder.jpg',
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
                'photo' => 'https://th.bing.com/th/id/R.9cefb1f08619a3520f54dec12cebf655?rik=RyreY0DPoDV2tg&riu=http%3a%2f%2ffr.web.img2.acsta.net%2fpictures%2f19%2f05%2f16%2f15%2f35%2f4731724.jpg&ehk=3UKaOKaBSqSw6SQi2LpOQALpYuKKdGviVkEvWY5haOk%3d&risl=&pid=ImgRaw&r=0',
            ],
            [ /* Producteur */
                'id' => 17,
                'nom' => 'Joel Silver',
                'dateN' => '1952-07-14',
                'dateDece' => '2023-12-12',
                'sexe' => 'Homme',
                'metier' => 'producteur',
                //'genre_id' => 2,
                'photo' => 'https://th.bing.com/th/id/R.47eaa9d63807c99bd93e14bb85c6efe3?rik=Z1o4YafLAHx6Tw&riu=http%3a%2f%2fwww.kino.de%2fwp-content%2fgallery%2fj%2fo%2fjoel-silver%2fsilver-joel-filmpremiere-ninja-assassin-8-rcm0x1920u.jpg&ehk=e%2b%2bYAwg%2fMd%2fDZzwG5So7q5xv1t4QApbymgf8xRd53No%3d&risl=&pid=ImgRaw&r=0',
            ],
            [ /* Acteur */
                'id' => 18,
                'nom' => 'Robert Downey Jr.',
                'dateN' => '1965-05-04',
                'dateDece' => '2023-12-12',
                'sexe' => 'Homme',
                'metier' => 'acteur',
                //'genre_id' => 2,
                'photo' => 'https://th.bing.com/th/id/R.a974526b0d8e713d6d10c6dbc35a5c91?rik=PxQRbin%2fOhnx2Q&riu=http%3a%2f%2fbr.web.img2.acsta.net%2fpictures%2f18%2f06%2f29%2f00%2f35%2f0101925.jpg&ehk=CSN0w13UxlvwbfQVwIRgLcU1NDeetirwL0F0KpsbOI0%3d&risl=&pid=ImgRaw&r=0',
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
                'photo' => 'https://th.bing.com/th/id/R.1922b816dcabd269897a54c6964d37b1?rik=FFjD4vnU%2fDk39Q&riu=http%3a%2f%2fcbsnews1.cbsistatic.com%2fhub%2fi%2f2016%2f11%2f15%2f538ee135-4354-45d4-8701-b66e5df9ebce%2fgettyimages-458663438-copy.jpg&ehk=F%2bi6Dd0BkOY7b7EG1D3HGfy%2bYZb5%2fBK%2fMoc9Gy8RfSM%3d&risl=&pid=ImgRaw&r=0',
            ],
            [ /* Producteur */
                'id' => 20,
                'nom' => 'Toru Hara',
                'dateN' => '1935-12-26',
                'dateDece' => '2023-12-12',
                'sexe' => 'Homme',
                'metier' => 'producteur',
                //'genre_id' => 3,
                'photo' => 'https://static.wikia.nocookie.net/studio-ghibli/images/e/e7/Toru_Hara.jpg/revision/latest?cb=20210402235706',
            ],
            [ /* Acteur */
                'id' => 21,
                'nom' => 'Noriko Hidaka',
                'dateN' => '1962-05-31',
                'dateDece' => '2023-12-12',
                'sexe' => 'Femme',
                'metier' => 'acteur',
                //'genre_id' => 1,
                'photo' => 'https://th.bing.com/th/id/OIP.BwcSPfuEHxivU8VeeVbHgQHaLH?pid=ImgDet&rs=1',
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
                'photo' => 'https://th.bing.com/th?id=OSK.144d7b28c9f8feef086af6d9cf353ef8&w=472&h=472&c=12&rs=2&o=6&pid=SANGAM',
            ],
            [ /* Producteur */
                'id' => 23,
                'nom' => 'Luke Korem',
                'dateN' => '1982-11-01',
                'dateDece' => '2023-12-12',
                'sexe' => 'Homme',
                'metier' => 'producteur',
                //'genre_id' => 1,
                'photo' => 'https://th.bing.com/th?id=OSK.144d7b28c9f8feef086af6d9cf353ef8&w=472&h=472&c=12&rs=2&o=6&pid=SANGAM',
            ],
            [ /* Acteur */
                'id' => 24,
                'nom' => 'Luke Korem',
                'dateN' => '1982-11-01',
                'dateDece' => '2023-12-12',
                'sexe' => 'Homme',
                'metier' => 'acteur',
                //'genre_id' => 2,
                'photo' => 'https://th.bing.com/th?id=OSK.144d7b28c9f8feef086af6d9cf353ef8&w=472&h=472&c=12&rs=2&o=6&pid=SANGAM',
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
                'photo' => 'https://th.bing.com/th/id/R.ab4f89b14769f709ef7fff79ca6b9ca9?rik=3ntSbq2g0lK1Hw&pid=ImgRaw&r=0',
            ],
            [ /* Producteur */
                'id' => 26,
                'nom' => 'Mark Johnson',
                'dateN' => '1945-12-27',
                'dateDece' => '2023-12-12',
                'sexe' => 'Homme',
                'metier' => 'producteur',
                //'genre_id' => 2,
                'photo' => 'https://th.bing.com/th/id/OIP.Iq_-knt54AGUDM8jdyznAQAAAA?pid=ImgDet&rs=1',
            ],
            [ /* Acteur */
                'id' => 27,
                'nom' => 'Tilda Swinton',
                'dateN' => '1960-11-05',
                'dateDece' => '2023-12-12',
                'sexe' => 'Homme',
                'metier' => 'acteur',
                //'genre_id' => 2,
                'photo' => 'https://th.bing.com/th/id/OIP._n644eu144rJ5qBcZNE80QC1Es?pid=ImgDet&rs=1',
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
                'photo' => 'https://th.bing.com/th/id/OIP.dbdaBxXU__BLfpjvH4XjNQHaKR?pid=ImgDet&rs=1',
            ],
            [ /* Producteur */
                'id' => 29,
                'nom' => 'Matt Tolmach',
                'dateN' => '1964-01-01',
                'dateDece' => '2023-12-12',
                'sexe' => 'Homme',
                'metier' => 'producteur',
                //'genre_id' => 3,
                'photo' => 'https://cdn.howold.co/uploads/photo/600x600/110/matt-tolmach.jpg',
            ],
            [ /* Acteur */
                'id' => 30,
                'nom' => 'Dwayne Johnson',
                'dateN' => '1972-05-02',
                'dateDece' => '2023-12-12',
                'sexe' => 'Homme',
                'metier' => 'acteur',
                //'genre_id' => 1,
                'photo' => 'https://fr.web.img6.acsta.net/c_310_420/pictures/14/07/24/17/14/366516.jpg',
            ],

        ]);    
    }
}
