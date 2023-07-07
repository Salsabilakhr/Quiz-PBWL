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
        Schema::create('tb_pelanggan', function (Blueprint $table) {
            $table->increments('pel_id');
            $table->integer('pel_id_gol')->unsigned();
            $table->integer('pel_id_user')->unsigned();
            $table->string('pel_no', 20);
            $table->string('pel_nama', 50);
            $table->string('pel_alamat');
            $table->string('pel_hp', 20);
            $table->timestamps();
        });
        Schema::table('tb_pelanggan', function (Blueprint $table) {
            $table->foreign('pel_id_gol')->references('gol_id')->on('tb_golongan')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('pel_id_user')->references('user_id')->on('tb_users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pelanggan');
    }
};
