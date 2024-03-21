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

        $file = fopen(__DIR__ . "/../csv/train.csv","r");

        $first_line = true;
        while (!feof($file)) {
            $train_data = fgetcsv($file);
            if (!$first_line) {
                                             
                $train = new Train;
                $train->company = $train_data[0];
                $train->departure_station = $train_data[1];
                $train->arrival_station = $train_data[2];
                $train->departure_time = $train_data[3];
                $train->arrival_time = $train_data[4];
                $train->train_code = $train_data[5];
                $train->number_of_carriages= $train_data[6];
                $train->on_time = $train_data[7];
                $train->cancelled = $train_data[8];
                
                $train->save();  
            }
            
          
            $first_line = false;
        }
        
       


        // foreach ($trains_data as $train_data) {

        // $train->fill($train_data);


    }
}
