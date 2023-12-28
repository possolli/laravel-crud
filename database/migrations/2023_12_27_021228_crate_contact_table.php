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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('email');
            $table->string('subject');
            $table->string('message');
            $table->timestamps(); // Isso adiciona automaticamente created_at e updated_at
            $table->softDeletes(); // Isso adiciona automaticamente deleted_at para suporte a exclusão suave
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts'); // Corrigido o nome da tabela
    }
};