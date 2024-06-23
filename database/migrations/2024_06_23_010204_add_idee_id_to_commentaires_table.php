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
        Schema::table('commentaires', function (Blueprint $table) {
                $table->unsignedBigInteger('idee_id'); // Ajoute la colonne idee_id
                $table->foreign('idee_id')->references('id')->on('idees')->onDelete('cascade'); // Définit la clé étrangère
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('commentaires', function (Blueprint $table) {
            $table->dropForeign(['idee_id']); // Supprime la contrainte de clé étrangère
            $table->dropColumn('idee_id'); // Supprime la colonne idee_id
        });
    }
};
