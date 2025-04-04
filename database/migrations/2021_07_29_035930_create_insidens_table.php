<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsidensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insidens', function (Blueprint $table) {
            $table->id('admin_id');
            $table->foreignId('semakin_id');
            $table->string('keputusan', 100);
            $table->date('tarikh');
            $table->string('jenis_kesalahan', 100);
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
        Schema::dropIfExists('insidens');
    }
}
