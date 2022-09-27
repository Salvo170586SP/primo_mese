<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Flight;
use App\Models\Passenger;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flight_passenger', function (Blueprint $table) {
            $table->foreignIdFor(Passenger::class);
            $table->foreignIdFor(Flight::class);
            $table->timestamps();
            $table->primary(['flight_id', 'passenger_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flight_passenger');
    }
};
