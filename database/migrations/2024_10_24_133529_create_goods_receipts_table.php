<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('goods_receipts', function (Blueprint $table) {
            $table->id();
            $table->string('po_number');
            $table->string('material_code');
            $table->integer('received_quantity');
            $table->date('received_date');
            $table->string('storage_location');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('goods_receipts');
    }
};
