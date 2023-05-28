<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker ;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i <20 ; $i++) {
            $train= new Train();
            $train->company =$faker->company();
            $train->departure_station=$faker->randomElement(['Roma', 'Napoli','Ancona','Salerno','Battipaglia'] );
            $train->arrival_station=$faker->randomElement(['Riccione', 'Baronissi','Malta','Amsterdam']);
            $train->departure_time=$faker->dateTimeBetween('-1 day','+1 day');
            $train->arrivals_time=$faker->dateTimeBetween();
            $train->train_code='AB' . $faker->randomDigit();
            $train->wagons_number=$faker->randomDigitNot(0);
            $train->on_time=$faker->randomElement([true, false]);
            $train->save();
        }
    }
}
