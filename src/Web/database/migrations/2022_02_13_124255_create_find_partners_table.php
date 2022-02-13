<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFindPartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('find_partners', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->longText('visi')->nullable();
            $table->longText('misi')->nullable();
            $table->longText('budayakerja')->nullable();
            $table->longText('milestone')->nullable();
            $table->longText('kebutuhanmitra')->nullable();
            $table->longText('tujuanbermitra')->nullable();
            $table->longText('kompetensimitra')->nullable();
            $table->longText('catatan')->nullable();

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
        Schema::dropIfExists('find_partners');
    }
}
