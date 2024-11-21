<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoardsTable extends Migration
{
    public function up()
    {
        Schema::create('boards', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('work_space_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('borad_name', 50)->nullable();
            $table->string('status', 50)->nullable();
            $table->timestamps();

            $table->foreign('work_space_id')->references('id')->on('work_space')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('boards');
    }
}
