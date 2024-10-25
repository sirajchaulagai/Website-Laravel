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
        Schema::create('animals', function (Blueprint $table) {
            $table->id();                          // Primary key
            $table->string('name');                // Name of the animal
            $table->string('species');             // Species of the animal
            $table->integer('age')->nullable();    // Age of the animal
            $table->enum('gender', ['male', 'female'])->nullable(); // Gender of the animal
            $table->text('description')->nullable(); // Description or additional information
            $table->timestamps();                  // Created_at and Updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};
