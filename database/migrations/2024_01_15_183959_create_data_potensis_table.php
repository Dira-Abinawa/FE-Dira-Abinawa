<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPotensisTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_potensis', function (Blueprint $table) {
            $table->id('id');
            $table->string('gudep');
            $table->string('male_builder');
            $table->string('famale_builder');
            $table->integer('male_member');
            $table->integer('famale_member');
            $table->integer('bantara_member');
            $table->integer('laksana_member');
            $table->integer('garuda_member');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('data_potensis');
    }
}
