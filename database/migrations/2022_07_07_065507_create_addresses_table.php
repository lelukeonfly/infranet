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
 - REWORK FACTORY
 - REWORK DATABASE RELATIONS AND
 - NEW TABLES
 */

        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            //foreign keys
            $table->integer('municipality_id');//done
            $table->integer('fraction_id');//done
            $table->integer('street_id');//done
            $table->integer('number_id');//done
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
