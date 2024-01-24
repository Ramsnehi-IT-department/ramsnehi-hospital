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
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('contact', 15)->unique(); // Adjust the length as needed
            $table->string('file')->nullable(); // Assuming file is optional
            $table->unsignedBigInteger('opening_id')->nullable(); // Foreign key column
            $table->timestamps();

            // Define the foreign key constraint
            $table->foreign('opening_id')->references('id')->on('openings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};
