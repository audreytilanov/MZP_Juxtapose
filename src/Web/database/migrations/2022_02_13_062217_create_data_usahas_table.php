<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataUsahasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_usahas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('usaha_id');
            $table->string('file_prospektus')->nullable();
            $table->string('foto')->nullable();
            $table->string('harga_saham')->nullable();
            $table->string('total_saham')->nullable();
            $table->string('dividen')->nullable();
            $table->string('penawaran')->nullable();
            $table->string('desc_pemilik')->nullable();
            $table->string('foto2')->nullable();


            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('usaha_id')->references('id')->on('usahas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_usahas');
    }
}
