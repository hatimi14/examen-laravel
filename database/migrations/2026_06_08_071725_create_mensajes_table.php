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
        Schema::create('mensajes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('remitente_id');
            $table->foreign('remitente_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('destinatario_id');
            $table->foreign('destinatario_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('asunto', 255);
            $table->text('mensaje');
            $table->boolean("leido")->default(false);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mensajes');
    }
};
