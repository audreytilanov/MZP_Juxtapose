<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsahasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usahas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('nama_usaha')->nullable();
            $table->string('no_npwp')->nullable();
            $table->string('tahun_berdiri')->nullable();
            $table->string('alamat_usaha')->nullable();
            $table->string('desc_usaha')->nullable();
            $table->string('jenis_usaha')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usahas');
    }
}
