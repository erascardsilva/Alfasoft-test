<?php

/*
    Erasmo Cardoso da Silva
    App Desafio Alfasolft

*/

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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nome
            $table->string('contact', 9); // Contato com 9 dígitos
            $table->string('email')->unique(); // Email único
            $table->timestamps();
            $table->softDeletes(); // Exclusão suave
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
