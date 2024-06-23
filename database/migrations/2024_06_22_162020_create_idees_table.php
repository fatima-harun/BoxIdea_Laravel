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
    Schema::create('idees', function (Blueprint $table) {
        $table->id();
        $table->string('auteur');
        $table->string('email')->unique();
        $table->string('titre');
        $table->string('etat');
        $table->text('description');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('idees');
    }
};
