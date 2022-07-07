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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->mediumInteger('postal');
            $table->string('municip_de');
            $table->string('frac_de');
            $table->string('str_de');
            $table->string('num');
            $table->string('municip_it');
            $table->string('frac_it');
            $table->string('str_it');
            $table->string('istatnciv');
            $table->string('egon');
            // $table->float('lat');
            // $table->float('long');
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
