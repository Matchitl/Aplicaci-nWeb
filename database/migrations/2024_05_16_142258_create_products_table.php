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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nameProduct', 50)->nullable()->default('Producto');
            $table->integer('stock')->unsigned()->nullable();
            $table->decimal('unit_price', 6, 2)->nullable();
            $table->foreignId('id_brand');
            $table->string('image', 100)->nullable()->default('imagen');
            $table->timestamps();

            $table->foreign('id_brand')->references('id')->on('brands')->onDelete('cascade') ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
