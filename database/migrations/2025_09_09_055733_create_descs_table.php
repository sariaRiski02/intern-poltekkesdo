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
        Schema::create('descs', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(true);
            $table->text('announcement')->nullable(true);
            $table->string('nip')->nullable(true);
            $table->foreignId('admin_id')->constrained("admins")->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('descs');
    }
};
