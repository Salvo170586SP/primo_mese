<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('flights', function (Blueprint $table) {
            $table->unsignedBigInteger('capitan_id')->nullable();
            $table->foreign('capitan_id')->references('id')->on('capitans')->onDelete('set null');
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('flights', function (Blueprint $table) {
             //elimina prima la relazione
             $table->dropForeign('flights_capitan_id_foreign');
             //elimina la colonna
             $table->dropColumn('capitan_id');
        });
    }
};
