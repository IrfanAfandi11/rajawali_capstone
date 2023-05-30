<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
// <<<<<<< HEAD:database/migrations/2023_05_21_042611_create_transaksis_table.php
            $table->unsignedBigInteger('id_wisata');
            $table->foreign('id_wisata')->references('id')->on('wisatas');
            $table->unsignedBigInteger('id_cart');
            $table->foreign('id_cart')->references('id')->on('carts');
            $table->integer('jumlah');
            $table->integer('jumlah_harga');
// =======
// >>>>>>> 532b90912c86b32efbf468ae600cfe9ce1490c4c:database/migrations/2023_05_07_010955_create_transaksis_table.php
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
        Schema::dropIfExists('transaksis');
    }
};
