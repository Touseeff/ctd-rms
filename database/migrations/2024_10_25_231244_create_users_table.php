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
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Automatically creates an auto-incrementing primary key
            $table->foreignId('role_id')->nullable()->constrained('roles')->onDelete('cascade');
            // $table->foreignId('department_id')->nullable()->constrained('departments')->onDelete('set null');
            // $table->foreignId('section_id')->nullable()->constrained('sections')->onDelete('set null');
            $table->string('first_name', 100)->nullable();
            $table->string('middle_name', 100)->nullable();
            $table->string('last_name', 100)->nullable();
            $table->string('email', 100)->unique();
            $table->string('password', 100)->nullable();
            $table->string('contact_number', 100)->nullable();
            $table->date('date_of_birth')->nullable();
            $table->enum('gendar', ['Male', 'Female', 'Other'])->default('Male');
            $table->string('qualification', 100)->nullable();
            $table->string('designation', 100)->nullable();
            $table->date('joining_date')->nullable();
            $table->string('skills', 100)->nullable();
            $table->string('address', 100)->nullable();
            $table->string('profile_image', 50)->nullable();
            $table->string('designation_role', 50)->nullable();
            $table->string('email_verification_token', 50)->nullable();
            $table->string('reset_password_token', 50)->nullable();
            $table->string('forgot_password_token', 50)->nullable();
            $table->string('role_type', 50)->nullable();
            $table->string('status', 50)->default('pandding');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();

        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
