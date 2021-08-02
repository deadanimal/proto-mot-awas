<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSemakansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semakans', function (Blueprint $table) {
            $table->id('semakan_id');
            $table->foreignId('saman_id');
            $table->foreignId('fail_id');
            $table->date('tarikh');
            $table->string('status', 100);
            $table->string('nama', 100);
            $table->string('jenis_kenderaan', 100);
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
        Schema::dropIfExists('semakans');
    }
}
