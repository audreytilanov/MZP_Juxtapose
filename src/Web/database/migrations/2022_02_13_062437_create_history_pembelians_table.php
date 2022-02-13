<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryPembeliansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_pembelians', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('usaha_id')->nullable();
            $table->string('total_saham')->nullable();
            $table->string('bukti')->nullable();

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
        Schema::dropIfExists('history_pembelians');
    }
}
