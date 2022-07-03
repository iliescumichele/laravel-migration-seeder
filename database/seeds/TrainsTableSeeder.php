<?php

use Illuminate\Database\Seeder;
use App\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
        $newTrain->save();
    }
}
