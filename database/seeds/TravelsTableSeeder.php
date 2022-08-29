<?php

use Illuminate\Database\Seeder;
use App\Travel;
use Faker\Generator as Faker;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for($i = 0; $i < 10; $i++){
            $newTravel = new Travel();

            $newTravel->partenza = $faker->city();
            $newTravel->destinazione = $faker->city();
            $newTravel->orario_partenza = $faker->dateTimeThisYear();
            $newTravel->orario_arrivo = $faker->dateTimeThisYear('+6 month');
            $newTravel->prezzo = $faker->randomFloat(2, 1, 10000);
            $newTravel->numero_camere = $faker->randomDigitNotNull(1,4);
            $newTravel->numero_persone = $faker->randomDigitNotNull(1,4);
            $newTravel->wifi_gratis = $faker->numberBetween(0,1);

            $newTravel->save();
        }
    }
}
