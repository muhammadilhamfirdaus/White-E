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
        Schema::create('purchase_orders', function (Blueprint $table) {
            $table->id();
            $table->string('code_material');          // Kode material
            $table->string('nama_material');          // Nama material
            $table->string('unit_of_measure');        // Satuan unit
            $table->integer('quantity');              // Kuantitas
            $table->decimal('price', 8, 2)->nullable(); // Harga (optional, bisa 0)
            $table->string('vendor');                 // Nama vendor
            $table->date('delivery_date');            // Tanggal pengiriman
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_orders');
    }
};
