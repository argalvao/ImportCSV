<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class TblData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('hora');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('altitude');
            $table->string('temperatura');
            $table->string('humidade');
            $table->string('co2');
            $table->string('luminosidade');
            $table->string('pressao');
            $table->string('radiacao');
            $table->rememberToken();
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
        //
    }
}
