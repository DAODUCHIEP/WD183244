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
        Schema::create('oders_detail', function (Blueprint $table) {
            $table->increments('oders_detail_id');
            $table->dropUnique('oder_id');
            $table->dropUnique('product_id');
            $table->integer('quantity');
            $table->float('price',10,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oders_detail');
    }
};