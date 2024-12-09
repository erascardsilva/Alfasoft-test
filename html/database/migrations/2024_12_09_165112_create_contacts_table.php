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
            $table->string('name');  // Nome do contato
            $table->string('contact', 9);  // Contato (9 dígitos)
            $table->string('email')->unique();  // E-mail do contato, deve ser único
            $table->timestamps();  // Campos de timestamps para created_at e updated_at
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
