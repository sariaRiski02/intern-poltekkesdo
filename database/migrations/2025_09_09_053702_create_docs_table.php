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
        Schema::create('docs', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->nullable(false)->unique();
            $table->string('application_letter')->nullable(false);
            $table->string('transcript')->nullable();
            $table->string('cv')->nullable();
            $table->date('date_start')->nullable();
            $table->date('date_end')->nullable();
            $table->string('certificate')->nullable();
            $table->enum('status', ['pending', 'rejected', 'accepted', 'completed'])->nullable(false);
            $table->foreignId('intern_id')->nullable()->constrained('interns')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docs');
    }
};
