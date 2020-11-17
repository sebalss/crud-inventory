<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterbarangSuratmasuk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masterbarang_suratmasuk', function (Blueprint $table) {
            $table->foreignId('masterbarang_id')->constrained('masterbarang');
            $table->foreignId('suratmasuk_id')->constrained('suratmasuk');
            $table->integer('jumlah')->unsigned();

            $table->foreign('masterbarang_id')->references('id')->on('masterbarang')->constrained()->onDelete('cascade');
            $table->foreign('suratmasuk_id')->references('id')->on('suratmasuk')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('masterbarang_suratmasuk');
    }
}
