<?php

use Illuminate\Database\Seeder;

use App\Trip;
class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $new_trip = new Trip();
        $new_trip->address = "via fasulla 0";
        $new_trip->city = "Salerno";
        $new_trip->state = "Italia";
        $new_trip->number_of_night = 5;
        $new_trip->number_of_person = 2;
        $new_trip->description = "None";
        $new_trip->price = 199;
        $new_trip->city = true;
        $new_trip->save();
    }
}
