<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterbarangSuratkeluar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masterbarang_suratkeluar', function (Blueprint $table) {
            $table->foreignId('masterbarang_id')->constrained('masterbarang');
            $table->foreignId('suratkeluar_id')->constrained('suratkeluar');
            $table->integer('jumlah')->unsigned();

            $table->foreign('masterbarang_id')->references('id')->on('masterbarang')->constrained()->onDelete('cascade');
            $table->foreign('suratkeluar_id')->references('id')->on('suratkeluar')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('masterbarang_suratkeluar');
    }
}
