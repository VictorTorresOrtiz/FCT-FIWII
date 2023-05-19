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
        Schema::create('job', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->date('fecha');
            $table->string('ubicacion');
            $table->boolean('terminada')->default(0);
            $table->foreignId('id_user')->references('id')->on('users');
            $table->foreignId('id_system')->references('id')->on('systems');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job');
    }
};
