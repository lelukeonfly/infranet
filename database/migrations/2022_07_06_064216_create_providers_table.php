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
         * This creates the table providers
         * cols:
         *  - id
         *  - img
         *  - url
         *  - created_at
         *  - updated_at
         */
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique(); //name of the provider
            $table->string('img')->unique();
            $table->string('url')->unique();
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
        Schema::dropIfExists('providers');
    }
};
