<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->string('address', 100);
            $table->string('city', 50);
            $table->string('state', 50);
            $table->tinyInteger('number_of_night')->unsigned(); // unsigned prende solo i numeri positivi
            $table->tinyInteger('number_of_person')->unsigned();
            $table->text('description')->nullable();
            $table->integer('price')->unsigned();
            $table->boolean('is_avaible')->unsigned()->default(1); // 1 sta per true
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trips');
    }
}
