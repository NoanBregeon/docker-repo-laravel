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
        Schema::create('produits_table', function (Blueprint $table) {
            $table->id(); // crée un BIGINT UNSIGNED AUTO_INCREMENT nommé 'id'
            $table->string('nom');
            $table->decimal('prix', 10, 2);
            // On ne met pas $table->timestamps() car ton binôme ne les a pas mis
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits_table');
    }
};
