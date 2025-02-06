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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->foreignId('player1_id')->constrained('users'); // Napojené na users
            $table->foreignId('player2_id')->nullable()->constrained('users');
            $table->integer('score1')->default(0);
            $table->integer('score2')->default(0);
            $table->json('game_data')->nullable(); // Stav hry v JSON
            $table->enum('status', ['waiting', 'in_progress', 'finished'])->default('waiting');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
