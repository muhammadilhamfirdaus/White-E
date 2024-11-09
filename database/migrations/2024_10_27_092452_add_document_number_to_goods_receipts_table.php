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
        Schema::table('goods_receipts', function (Blueprint $table) {
            $table->string('document_number')->unique()->after('id');
        });
    }

    public function down()
    {
        Schema::table('goods_receipts', function (Blueprint $table) {
            $table->dropColumn('document_number');
        });
    }

};
