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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('nameClient', 40)->nullable();
            $table->string('lastname', 40)->nullable();
            $table->string('s_lastname', 40)->nullable();
            $table->string('email', 50)->nullable();
            $table->bigInteger('phone')->nullable();
            $table->foreignId('id_state');
            $table->foreignId('id_town');
            $table->timestamps();

            $table->foreign('id_town')->references('id')->on('towns')->onDelete('cascade') ->onUpdate('cascade');
            $table->foreign('id_state')->references('id')->on('states')->onDelete('cascade') ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
