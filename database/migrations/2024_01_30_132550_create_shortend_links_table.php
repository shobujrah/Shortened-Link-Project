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
        Schema::create('shortend_links', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained('client')->restrictOnDelete();
            $table->string('code')->nullable();
            $table->string('shortlink')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shortend_links');
    }
};
