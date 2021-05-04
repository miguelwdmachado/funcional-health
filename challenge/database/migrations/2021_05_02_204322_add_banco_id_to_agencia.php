<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBancoIdToAgencia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('agencia', function (Blueprint $table) {
          $table->unsignedBigInteger('banco_id');
          $table->foreign('banco_id')->onDelete('cascade')->onUpdate('cascade')->references('id')->on('banco');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('agencia', function (Blueprint $table) {
            //
        });
    }
}
