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
        Schema::table('users', function (Blueprint $table) {
            $table->string('company_name')->nullable();
            $table->string('company_address')->nullable();
            $table->string('language')->nullable();
            $table->string('country')->nullable();
            $table->string('currency')->nullable();
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('company_name');
            $table->dropColumn('company_address');
            $table->dropColumn('language');
            $table->dropColumn('country');
            $table->dropColumn('currency');
        });
    }

};
