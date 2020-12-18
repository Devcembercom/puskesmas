<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diares', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_nagari');
            $table->string('nama_jorong');
            $table->string('bulan');
            $table->string('tanggal');
            $table->string('l')->nullable();
            $table->string('p')->nullable();
            $table->string('tanggal_sakit');
            $table->string('tanpa_dehidrasi')->nullable();
            $table->string('oralit')->nullable();
            $table->string('zinc')->nullable();
            $table->string('a')->nullable();
            $table->string('b')->nullable();
            $table->string('c')->nullable();
            $table->string('keterangan')->nullable();
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
        Schema::dropIfExists('diares');
    }
}
