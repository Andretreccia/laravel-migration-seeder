<?php

use Illuminate\Database\Seeder;
use App\Models\TravelPackage;

class TravelPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $packages = [
            [
                'package_name' => 'Incantevole Evasione',
                'travel_destination' => "Lago Di Iseo",
                'description' => 'Un soggiorno immersi in caratteristiche location sarà un’occasione unica per scoprire scenari e paesaggi inconsueti. Un delizioso agriturismo farà da cornice a una fuga dalla quotidianità all’insegna del relax',
                'duration' => '3 giorni e 2 notti',
                'price' => '500',
                'package_image' => 'https://picsum.photos/1035/237/200/300',
            ],
            [
                'package_name' => 'Parentesi lusso e relax',
                'travel_destination' => 'Viterbo',
                'description' => 'Metti da parte lo stress con una fuga di 2 notti con colazione e accesso Spa per 2 persone',
                'duration' => '3 giorni e 2 notti',
                'price' => '400',
                'package_image' => 'https://picsum.photos/1035/237/200/300',
            ],
            [
                'package_name' => 'Hotel Incontro',
                'travel_destination' => 'Ariano Irpino',
                'description' => 'Ariano Irpino vi aspetta in uno dei più bei Comuni della Campania, immerso in un paesaggio collinare ricco di vegetazione e stimolante per gli eventi storici di cui conserva significative tracce. ',
                'duration' => '2 giorni e 1 notte',
                'price' => '180',
                'package_image' => 'https://picsum.photos/1035/237/200/300',
            ],
            [
                'package_name' => 'Ostello Angolo Verde',
                'travel_destination' => 'Angolo Terme, Lombardia',
                'description' => "Dotato di una terrazza solarium e di una vista sulla montagna, l'Ostello Angolo Verde sorge a Angolo Terme, in Lombardia, nei pressi di Brescia, immerso in una cornice tranquilla",
                'duration' => '1 giorno e 1 notte',
                'price' => '180',
                'package_image' => 'https://picsum.photos/1035/237/200/300',
            ],
            [
                'package_name' => 'Escursione in quad in Valtellina per 1 pilota e 1 passeggero',
                'travel_destination' => 'Lombardia - Sondrio',
                'description' => 'Incorniciata dalle Alpi, la valle è un paradiso per escursionisti e sciatori, ma tu che sogni una vita spericolata cerchi qualcosa di un po’ più vivace.',
                'duration' => '1 giorno',
                'price' => '100',
                'package_image' => 'https://picsum.photos/1035/237/200/300',
            ],
        ];
        foreach ($packages as $package) {
            $_package = new TravelPackage();
            $_package->package_name = $package['package_name'];
            $_package->travel_destination = $package['travel_destination'];
            $_package->description = $package['description'];
            $_package->duration = $package['duration'];
            $_package->duration = $package['duration'];
            $_package->price = $package['price'];
            $_package->package_image = $package['package_image'];
            $_package->save();
        }
    }
}