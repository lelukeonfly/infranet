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
        Schema::table('addresses', function (Blueprint $table) {
            $table->foreign('municipality_id')->references('id')->on('municipalities')->onDelete('cascade');
            $table->foreign('fraction_id')->references('id')->on('fractions')->onDelete('cascade');
            $table->foreign('street_id')->references('id')->on('streets')->onDelete('cascade');
            $table->foreign('number_id')->references('id')->on('numbers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
