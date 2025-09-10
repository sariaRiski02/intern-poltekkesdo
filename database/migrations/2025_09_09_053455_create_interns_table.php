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
        Schema::create('interns', function (Blueprint $table) {
            $table->id();
            $table->string('fullname')->nullable(false);
            $table->string('university')->nullable(false);
            $table->string('faculty')->nullable(false);
            $table->string('major')->nullable(false);
            $table->string('address')->nullable(false);
            $table->string('no_hp')->nullable(false);
            $table->date('date_start')->nullable(false);
            $table->date('date_end')->nullable(false);
            $table->date('date')->nullable(false);
            $table->enum('status', ['pending', 'rejected', 'accepted', 'completed'])->nullable(false);
            $table->timestamps();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interns');
    }
};
