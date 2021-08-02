<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSamanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('samans', function (Blueprint $table) {
            $table->id('saman_id');
            $table->foreignId('fail_id');
            $table->string('jenis_kesalahan', 100);
            $table->date('tarikh');
            $table->string('lokasi', 100);
            $table->float('jumlah_saman', 8, 2);
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
        Schema::dropIfExists('samans');
    }
}
