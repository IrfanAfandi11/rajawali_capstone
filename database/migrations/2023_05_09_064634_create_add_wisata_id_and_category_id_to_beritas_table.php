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
        Schema::create('add_wisata_id_and_category_id_to_beritas', function (Blueprint $table) {
            $table->foreignId('wisata_id');
            $table->foreign('wisata_id')->references('wisata_id')->on('wisatas');
            $table->foreignId('category_id');
            $table->foreign('category_id')->references('category_id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('beritas', function (Blueprint $table) {
            $table->dropColumn('wisata_id');
            $table->dropColumn('category_id');
        });    
    }
};
