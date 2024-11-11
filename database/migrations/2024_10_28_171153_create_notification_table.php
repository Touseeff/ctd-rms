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
        Schema::create('notification', function (Blueprint $table) {
            $table->id(); // AUTO_INCREMENT primary key
            $table->unsignedBigInteger('user_id')->nullable();
            // $table->unsignedBigInteger('project_id')->nullable();
            // $table->unsignedBigInteger('task_id')->nullable();
            $table->string('notification_type', 100)->nullable();
            $table->string('description', 100)->nullable();
            $table->string('status', 50)->nullable();
            $table->date('created_at')->nullable();
            $table->date('updated_at')->nullable();

            // Indexes
            $table->index('user_id');
            // $table->index('project_id');
            // $table->index('task_id');

            // Foreign key constraints
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            // $table->foreign('task_id')->references('id')->on('cards')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notification');
    }
};
