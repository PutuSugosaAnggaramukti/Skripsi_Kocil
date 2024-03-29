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
            $table->id();
            $table->string('name');
            $table->string('nik');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('alamat')->nullable();
            $table->string('noWa')->nullable();
            $table->string('lingkungan')->nullable();
            $table->boolean('isAdmin');
            $table->boolean('isPendeta');
            $table->boolean('isUmat');
            $table->boolean('isKetling');
            $table->rememberToken();
            $table->timestamps();
            $table->string('foto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
