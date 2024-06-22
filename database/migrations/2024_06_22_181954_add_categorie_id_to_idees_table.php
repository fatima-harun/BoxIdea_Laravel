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
        Schema::table('idees', function (Blueprint $table) {
            $table->unsignedBigInteger('categorie_id')->after('description'); // Ajoute la colonne categorie_id
            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade'); // Définit la clé étrangère
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('idees', function (Blueprint $table) {
            $table->dropForeign(['categorie_id']); // Supprime la contrainte de clé étrangère
            $table->dropColumn('categorie_id'); // Supprime la colonne categorie_id
        });
    }
};
