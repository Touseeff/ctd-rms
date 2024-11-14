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
            $table->string('nic_number')->nullable()->default(null)->after('contact_number');
            $table->string('department')->nullable()->default(null)->after('designation');
        });
    }
<<<<<<< HEAD
    
=======
>>>>>>> 2b95eb976fe92153eb882815a4e7388932a1b19a

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['nic_number', 'department']);
        });
    }
};
