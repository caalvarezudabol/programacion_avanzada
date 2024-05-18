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
        Schema::create('prueba__joses', function (Blueprint $table) {
            $table->id();
            $table->string('Jose Maria Escobar');
            $table->string('Miguel Flores Copa');
            $table->string('Miguel Angel Lopez ');
            $table->string('Marcos evelio Riveria');
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
        Schema::dropIfExists('prueba__joses');
    }
};
