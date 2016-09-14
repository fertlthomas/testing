<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Spieler extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spieler', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name');
            $table->string('Position');
            $table->string('Herkunft');
            $table->integer('Nummer');
            $table->integer('team_id');
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
        Schema::drop('spieler');
    }
}
