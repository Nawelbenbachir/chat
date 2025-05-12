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
        Schema::create('conversations', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->foreignId('createur_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('interlocuteur1_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('interlocuteur2_id')->constrained('users')->onDelete('cascade');
            // cascade : en cas de suppression de l'user, toute les conv associées sont supprimées
            //set nul : // valeur nul ajoutées a la place de l'id interlocuteur (à condition que la clé étrangere soit nullable)

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conversations');
    }
};
