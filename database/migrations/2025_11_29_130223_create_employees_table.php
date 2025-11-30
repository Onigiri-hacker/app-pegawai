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
        Schema::create('employees', function (Blueprint $table) {
            $table->id(); // kolom primary key
            $table->string('nama_lengkap');
            $table->string('email')->unique();
            $table->string('nomor_telepon');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->date('tanggal_masuk');
            $table->string('status');
            $table->timestamps(); // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
