<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $train = new Train();

        $train->company = "Trenitalia";
        $train->departure_station = "Roma Termini";
        $train->arrival_station = "Milano Centrale";
        $train->departure_time = "2024-03-21 08:00:00";
        $train->arrival_time = "2024-03-21 12:00:00";
        $train->train_code = "TR123";
        $train->number_of_carriages= 8;
        $train->on_time = 0;
        $train->cancelled = 0;

        $train->save();
    }
}
