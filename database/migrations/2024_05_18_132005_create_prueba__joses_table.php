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
            $table->string('Jose_Maria_Escobar');
            $table->string('Miguel_Flores_Copa');
            $table->string('Miguel_Angel_Lopez ');
            $table->string('Marcos_evelio_Riveria');
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
