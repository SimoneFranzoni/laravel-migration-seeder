<?php

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

use App\Trip;
class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for($i = 0; $i<100; $i++){
            
            $new_trip = new Trip();
            $new_trip->address = $faker -> streetAddress();
            $new_trip->city = $faker -> city();
            $new_trip->state = $faker -> state();
            $new_trip->number_of_night = $faker -> numberBetween(1, 30);
            $new_trip->number_of_person = $faker -> numberBetween(1, 10);
            $new_trip->description = $faker -> text(200);
            $new_trip->price = $faker -> numberBetween(50, 10000);
            $new_trip->save();
        
        }
}
}
