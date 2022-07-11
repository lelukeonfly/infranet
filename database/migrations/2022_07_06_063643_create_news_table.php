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
         * This creates the table News
         * cols:
         *  - id
         *  - banner
         *  - title_de
         *  - slug_de
         *  - content_de
         *  - title_it
         *  - slug_ig
         *  - content_it
         *  - created_at
         *  - updated_at
         */
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('banner'); //titelbild
            $table->string('title_de'); //title of news article
            $table->string('slug_de')->unique(); //link to post in slug form so its not /news/76 but /news/glasfaser-in-montan
            $table->text('content_de'); //content of the article
            $table->string('title_it');
            $table->string('slug_it')->unique();
            $table->text('content_it');
            $table->timestamps(); //contains timestamps of when row created and when modified
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
};
