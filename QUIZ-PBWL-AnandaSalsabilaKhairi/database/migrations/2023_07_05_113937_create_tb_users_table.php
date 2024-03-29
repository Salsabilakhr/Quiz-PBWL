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
        Schema::create('tb_users', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('user_email', 50);
            $table->string('user_password', 100);
            $table->string('user_nama', 100);
            $table->string('user_alamat', 50);
            $table->string('user_hp', 50);
            $table->string('user_pos', 5);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_users');
    }
};
