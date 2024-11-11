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
        Schema::table('users', function (Blueprint $table) {
            // Rename columns
            $table->renameColumn('skills', 'address_one');
            $table->renameColumn('address', 'address_two');
            
            // Modify data type or length if necessary
            $table->string('address_one', 500)->nullable()->change();
            $table->string('address_two', 500)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Only revert data type or length if necessary
            $table->string('address_one', 500)->nullable()->change();
            $table->string('address_two', 500)->nullable()->change();
        });
    }
};
