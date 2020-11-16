<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idDivisi');
            $table->foreign('idDivisi')->references('idDiv')->on('divisi');
            $table->string('nama');
            $table->string('jabatan');
            $table->string('angkatanTelu');
            $table->string('angkatanLab');
            $table->unique('email');
            $table->unique('line');
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
        Schema::dropIfExists('anggota');
    }
}
