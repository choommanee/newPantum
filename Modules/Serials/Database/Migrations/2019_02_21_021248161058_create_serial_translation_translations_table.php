<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSerial_translationsTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serial_translations_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('serial_translations_id');

            $table->string('locale');

            $table->unique(['serial_translations_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('serial_translations_translations');
    }
}
