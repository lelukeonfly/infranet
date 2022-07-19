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
        /**
         * This creates the table addresses
         * cols:
         *  - id
         *  - postal
         *  - municip_de
         *  - frac_de
         *  - str_de
         *  - num
         */

/**
TODO:
 - REWRITE COMMENTS OF DATABASE STRUCTURE
 - REWORK FACTORY AND SEEDER -> ON IT
 - REWORK DATABASE RELATIONS AND -> OK
 - NEW TABLES -> OK
 */

        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            //foreign keys
            $table->foreignId('municipality_id')->constrained()->cascadeOnDelete();
            $table->foreignId('fraction_id')->constrained()->cascadeOnDelete();
            $table->foreignId('street_id')->constrained()->cascadeOnDelete();
            $table->foreignId('number_id')->constrained()->cascadeOnDelete();
            //foreign keys/
            $table->string('istatnciv');
            $table->string('egon');
            $table->float('lat', 16, 14);
            $table->float('long', 17, 14);
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
        Schema::dropIfExists('addresses');
    }
};
