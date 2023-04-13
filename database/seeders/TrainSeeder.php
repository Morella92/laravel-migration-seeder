<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {

            $new_train = new Train();

            $new_train->agency = $faker->company;
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_time = $faker->time('H:i:s');
            $new_train->arrival_time = $faker->time('H:i:s');
            $new_train->train_code =$faker->bothify('??#');
            $new_train->num_carriages = $faker->numberBetween(1, 10);
            $new_train->created_at = $faker->dateTimeBetween();
            $new_train->updated_at = $faker->dateTimeBetween();
        
            $new_train->save();
        }
        
    }
}
