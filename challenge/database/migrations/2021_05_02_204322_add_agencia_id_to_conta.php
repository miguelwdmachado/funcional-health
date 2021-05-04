<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAgenciaIdToConta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('conta', function (Blueprint $table) {
          $table->unsignedBigInteger('agencia_id');
          $table->foreign('agencia_id')->onDelete('cascade')->onUpdate('cascade')->references('id')->on('agencia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('conta', function (Blueprint $table) {
            //
        });
    }
}
