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
        Schema::create('users_permission', function (Blueprint $table) {
            $table->id(); // Automatically creates an auto-incrementing primary key
            $table->foreignId('role_id')->constrained('roles')->onDelete('cascade');
            $table->string('action', 50)->nullable();
            $table->enum('allowed', ['yes', 'no'])->default('no');
            $table->timestamps(); // Adds created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_permission');
    }
};