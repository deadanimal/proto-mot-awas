<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImejvideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imejvideos', function (Blueprint $table) {
            $table->id('fail_id');
            $table->date('tarikh');
            $table->integer('bil_imej');
            $table->integer('bil_vid');
            $table->string('lokasi', 100);
            $table->float('saiz', 8, 2);
            $table->float('kualiti', 8, 2);
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
        Schema::dropIfExists('imejvideos');
    }
}
