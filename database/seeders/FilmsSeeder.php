<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class FilmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('films')->insert([
            [
                'id' => 1,
                'titre' => 'La Matrix',
                'resumer' => "Programmeur anonyme dans un service administratif le jour, Thomas Anderson devient Neo la nuit venue. Sous ce pseudonyme, 
                              il est l'un des pirates les plus recherchés du cyber-espace. A cheval entre deux mondes, Neo est assailli par d'étranges songes 
                              et des messages cryptés provenant d'un certain Morpheus. Celui-ci l'exhorte à aller au-delà des apparences et à trouver la réponse 
                              à la question qui hante constamment ses pensées : qu'est-ce que la Matrice ? Nul ne le sait, et aucun homme n'est encore parvenu à en 
                              percer les defenses. Mais Morpheus est persuadé que Neo est l'Elu, le libérateur mythique de l'humanité annoncé selon la prophétie. 
                              Ensemble, ils se lancent dans une lutte sans retour contre la Matrice et ses terribles agents...",
                'duree' => 130,
                'annee' => '1999',
                'trailer' => "https://www.youtube.com/embed/m8e-FF8MsqU?si=dZIaurAUMo8io7yN",
                'pochetteURL' => 'matrix.jpg',
                'rating' => 83,
                'realisateur_id' => 1,
                'producteur_id' =>  2,
                'acteur_id' => 3,
                'type_id' => 6,
            ],
            [
                'id' => 2,
                'titre' => 'A Classic Horror Story',
                'resumer' => "Cinq inconnus font du co-voiturage à bord d'un camping-car, mais après un accident, ils se retrouvent
                              dans une forêt peuplée d'êtres étranges dont il est impossible de sortir.",
                'duree' => 95,
                'annee' => '2021',
                'trailer' => "https://www.youtube.com/embed/PHqyFhrb3uU?si=7UEp9ZV2bnuXuURc",
                'pochetteURL' => 'a_classsic_horror_story.jpg',
                'rating' => 58,
                'realisateur_id' => 4,
                'producteur_id' =>  5,
                'acteur_id' => 6,
                'type_id' => 3,
            ],
            [
                'id' => 3,
                'titre' => 'Rocky',
                'resumer' => "Dans les quartiers populaires de Philadelphie, Rocky Balboa dispute de temps à autre, pour quelques dizaines de dollars, 
                              des combats de boxe sous l'appellation de l'étalon italien. Cependant, Mickey, son vieil entraîneur, le laisse tomber. 
                              Pendant ce temps, Apollo Creed, le champion du monde de boxe catégorie poids lourd, recherche un nouvel adversaire pour 
                              remettre son titre en jeu. Son choix se portera sur Rocky.",
                'duree' => 120,
                'annee' => '1976',
                'trailer' => "https://www.youtube.com/embed/-Hk-LYcavrw?si=R5tM0GtJhyMl4NVh",
                'pochetteURL' => 'rocky.jpg',
                'rating' => 92,
                'realisateur_id' => 7,
                'producteur_id' => 8,
                'acteur_id' => 9,
                'type_id' => 6,
            ],
            [
                'id' => 4,
                'titre' => "ROMAN FRAYSSINET, SPECTACLE 'ALORS'",
                'resumer' => "Roman Frayssinet, depuis la scène de l'Olympia, présente son spectacle Alors, mélange d'humour surréaliste, d'absurde, de stand-up,
                              interprété avec passion et authenticité. L'humoriste dévoile dans ses envolées romanesques...",
                'duree' => 64,
                'annee' => '2023',
                'trailer' => "https://www.youtube.com/embed/cZB0NO0jnz0?si=tWxZnBLGyW3BgydL",
                'pochetteURL' => 'alors.jfif',
                'rating' => 80,
                'realisateur_id' => 10,
                'producteur_id' =>  11,
                'acteur_id' => 12,
                'type_id' => 1,
            ],
            [
                'id' => 5,
                'titre' => "Prey",
                'resumer' => "Il y a trois siècles sur le territoire des Comanches, Naru, une farouche et brillante guerrière, se fait désormais un devoir de 
                              protéger sa tribu dès qu’un danger la menace. Elle découvre que la proie qu’elle traque en ce moment n’est autre qu’un prédateur 
                              extraterrestre particulièrement évolué doté d’un arsenal de pointe des plus sophistiqués. Une confrontation aussi perverse que terrifiante 
                              s’engage bientôt entre les deux adversaires...",
                'duree' => 99,
                'annee' => '2022',
                'trailer' => "https://www.youtube.com/embed/WhD3xAIZzeg?si=B2lqB2ANAg9-Mls7",
                'pochetteURL' => 'prey.png',
                'rating' => 94,
                'realisateur_id' => 13,
                'producteur_id' =>  14,
                'acteur_id' => 15,
                'type_id' => 3,
            ],
            [
                'id' => 6,
                'titre' => "Sherlock Holmes (2010)",
                'resumer' => "Aucune énigme ne résiste longtemps à Sherlock Holmes... Flanqué de son fidèle ami le Docteur John Watson, l'intrépide et légendaire 
                              détective traque sans relâche les criminels de tous poils. Ses armes : un sens aigu de l'observation et de la déduction, une érudition 
                              et une curiosité tous azimuts; accessoirement, une droite redoutable...
                              Mais une menace sans précédent plane aujourd'hui sur Londres - et c'est exactement le genre de challenge dont notre homme a besoin pour ne 
                              pas sombrer dans l'ennui et la mélancolie. Après qu'une série de meurtres rituels a ensanglanté Londres, Holmes et Watson réussissent à 
                              intercepter le coupable : Lord Blackwood. A l'approche de son éxécution, ce sinistre adepte de la magie noire annonce qu'il reviendra du 
                              royaume des morts pour exercer la plus terrible des vengeances.
                              La panique s'empare de la ville après l'apparente résurrection de Blackwood. Scotland Yard donne sa langue au chat, et Sherlock Holmes se 
                              lance aussitôt avec fougue dans la plus étrange et la plus périlleuse de ses enquêtes...",
                'duree' => 128,
                'annee' => '2010',
                'trailer' => "https://www.youtube.com/embed/iKUzhzustok?si=_ClcK7ugdcgcHwpn",
                'pochetteURL' => 'sherlock_holmes.jpg',
                'rating' => 70,
                'realisateur_id' => 16,
                'producteur_id' =>  17,
                'acteur_id' => 18,
                'type_id' => 6,
            ],
            [
                'id' => 7,
                'titre' => "Mon voisin totoro",
                'resumer' => "Deux petites filles, Mei et Satsuki, viennent s'installer avec leur père dans une grande maison à la campagne afin 
                              de se rapprocher de l'hôpital où séjourne leur mère. Elles vont découvrir l'existence de leurs nouveaux voisins, invisible 
                              aux yeux des autres humains, des créatures merveilleuses, mais très discrètes : Grand Totoro, Moyen Totoro (Chū-Totoro) et Petit 
                              Totoro (Chibi-Totoro). Avec son ventre rebondi, Totoro est un être rare et fascinant, un esprit de la forêt... Il se nourrit de 
                              glands et de noix. Il peut voler, se déplacer en « Chat-Bus ». Il dort le jour, mais les nuits de pleine lune, il aime jouer avec 
                              des ocarinas magiques...",
                'duree' => 87,
                'annee' => '1999',
                'trailer' => "https://www.youtube.com/embed/bQPeA_ekBpc?si=F-QEowPBZhzKGtxt",
                'pochetteURL' => 'mon_voisin_totoro.jfif',
                'rating' => 93,
                'realisateur_id' => 19,
                'producteur_id' =>  20,
                'acteur_id' => 21,
                'type_id' => 10,
            ],
            [
                'id' => 8,
                'titre' => "Milli Vanilli",
                'resumer' => "L'histoire vraie et inédite de la plus grande escroquerie de l'histoire de la musique - Milli Vanilli. De son ascension 
                              fulgurante à sa chute publique, ce documentaire captivant retrace les circonstances inédites entourant le tristement célèbre 
                              duo pop et son scandale de lip-syncing des années 1990.",
                'duree' => 106,
                'annee' => '2023',
                'trailer' => "https://www.youtube.com/embed/rtVkM9C6V38?si=GCKVmDmDf5ebWaV0",
                'pochetteURL' => 'milli_vanilli.jpg',
                'rating' => 66,
                'realisateur_id' => 22,
                'producteur_id' =>  23,
                'acteur_id' => 24,
                'type_id' => 5,
            ],
            [
                'id' => 9,
                'titre' => "Le Monde de Narnia",
                'resumer' => "Le Monde de Narnia : chapitre 1 conte la lutte entre le bien et le mal qui oppose le magnifique lion Aslan 
                              aux forces des ténèbres dans le monde magique de Narnia. Grâce à ses sombres pouvoirs, la Sorcière Blanche a 
                              plongé Narnia dans un hiver qui dure depuis un siècle, mais une prédiction révèle que quatre enfants aideront Aslan à 
                              rompre la malédiction. Lorsque Lucy, Susan, Edmund et Peter Pevensie, quatre frères et soeurs, découvrent ce monde enchanté 
                              en y pénétrant à travers une armoire, tout est en place pour une bataille de proportions épiques...",
                'duree' => 140,
                'annee' => '2005',
                'trailer' => "https://www.youtube.com/embed/pF2quEzhAhs?si=DrWzbzNcIyCa29Dz",
                'pochetteURL' => 'narnia.jfif',
                'rating' => 75,
                'realisateur_id' => 25,
                'producteur_id' =>  26,
                'acteur_id' => 27,
                'type_id' => 6,
            ],
            [
                'id' => 10,
                'titre' => "Jumanji: Welcome to the jungle",
                'resumer' => "Le destin de quatre lycéens en retenue bascule lorsqu’ils sont aspirés dans le monde de Jumanji. Après avoir découvert une 
                              vieille console contenant un jeu vidéo dont ils n’avaient jamais entendu parler, les quatre jeunes se retrouvent mystérieusement 
                              propulsés au cœur de la jungle de Jumanji, dans le corps de leurs avatars. Ils vont rapidement découvrir que l’on ne joue pas à Jumanji, 
                              c’est le jeu qui joue avec vous… Pour revenir dans le monde réel, il va leur falloir affronter les pires dangers et triompher de l’ultime 
                              aventure. Sinon, ils resteront à jamais prisonniers de Jumanji…",
                'duree' => 119,
                'annee' => '2017',
                'trailer' => "https://www.youtube.com/embed/2QKg5SZ_35I?si=jLAgPj_uR426YlDH",
                'pochetteURL' => 'jumanji.jpg',
                'rating' => 76,
                'realisateur_id' => 28,
                'producteur_id' =>  29,
                'acteur_id' => 30,
                'type_id' => 1,
            ],
        ]);    
    }
}
