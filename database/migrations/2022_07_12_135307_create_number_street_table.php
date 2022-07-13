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
        Schema::create('number_street', function (Blueprint $table) {
            // $table->id();
            // $table->unsignedBigInteger('number_id');
            // $table->unsignedBigInteger('street_id');
            // $table->timestamps();
            $table->foreignId('number_id')->constrained();
            $table->foreignId('street_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('number_street');
    }
};
