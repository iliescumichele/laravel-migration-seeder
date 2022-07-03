<?php

use Illuminate\Database\Seeder;
use App\Train;

//importofaker e creo un alias
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i=0; $i < 20; $i++) {
            $newTrain = new Train();
            $newTrain-> Azienda = $faker->word();
            $newTrain-> Stazione_partenza = $faker->city();
            $newTrain-> Stazione_arrivo = $faker->city();
            $newTrain-> Orario_partenza = $faker->time();
            $newTrain-> Orario_arrivo = $faker->time();
            $newTrain-> Codice_treno = $faker->regexify('[A-Z]{5}[0-4]{3}');
            $newTrain-> Numero_carrozze = $faker->numberBetween(4, 20);
            $newTrain-> In_orario = '1';
            $newTrain-> Cancellato = '0';
            $newTrain->save();
        }

      /*
        $newTrain = new Train();
        $newTrain -> Azienda = 'Italo';
        $newTrain -> Stazione_partenza = 'Rovereto';
        $newTrain-> Stazione_arrivo = 'Verona';
        $newTrain-> Orario_partenza = '08:11:00';
        $newTrain-> Orario_arrivo = '09:00:00';
        $newTrain-> Codice_Treno = 'AX407PX';
        $newTrain-> Numero_Carrozze = '12';
        $newTrain-> In_orario = '1';
        $newTrain-> Cancellato = '0';
        //uso il dump per vedere in dati nella console
        //dump($newTrain);
        $newTrain->save();
      */
    }
}
