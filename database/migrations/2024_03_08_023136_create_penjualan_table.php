<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('penjualan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigINteger('PelangganID');
            $table->date('Tanggal_Penjualan');  
            $table->float('Total_Harga');
            $table->timestamps();

            $table->foreign('PelangganID')->refrences('id')->on('pelanggans')->onDelete('caseCode');   
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualan');
    }
};
