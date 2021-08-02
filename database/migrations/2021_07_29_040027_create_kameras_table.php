<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKamerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kameras', function (Blueprint $table) {
            $table->id('operasikamera_id');
            $table->string('status_healthcheck', 50);
            $table->integer('jumlah_trafik');
            $table->string('notifikasi', 100);
            $table->date('tarikh');
            $table->string('lokasi', 50);
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
        Schema::dropIfExists('kameras');
    }
}
