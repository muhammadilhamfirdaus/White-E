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
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->string('item_code');        // Menambahkan kolom item_code
            $table->string('item_name');        // Menambahkan kolom item_name
            $table->string('unit_of_measure');  // Menambahkan kolom unit_of_measure
            $table->string('group');            // Menambahkan kolom group
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materials');
    }
};
