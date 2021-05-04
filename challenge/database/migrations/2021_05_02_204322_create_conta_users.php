<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContaUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conta_users', function (Blueprint $table) {
          $table->id();
          $table->unsignedBigInteger('user_id');
          $table->foreign('user_id')->onDelete('cascade')->onUpdate('cascade')->references('id')->on('users');
          $table->unsignedBigInteger('conta_id');
          $table->foreign('conta_id')->onDelete('cascade')->onUpdate('cascade')->references('id')->on('banco');
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
        Schema::table('conta_users', function (Blueprint $table) {
            //
        });
    }
}
