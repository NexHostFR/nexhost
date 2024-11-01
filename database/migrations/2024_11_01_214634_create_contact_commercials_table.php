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
        Schema::create('contact_commercials', function (Blueprint $table) {
            $table->id();
            $table->string('entite');
            $table->string('nombre_employes');
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->string('telephone');
            $table->string('fonction');
            $table->string('nom_organisation');
            $table->string('country');
            $table->string('city');
            $table->string('category_product');
            $table->string('langue');
            $table->string('source_info');
            $table->string('demande_projet');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_commercials');
    }
};
