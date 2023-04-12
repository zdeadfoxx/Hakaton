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
            $table->string('email')->unique();
            $table->text('phone')->nullable();
            $table->string('firstname');
            $table->string('name');
            $table->string('lastname')->nullable();
            $table->string('info');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('checkbox1')->default('1');
            $table->integer('checkbox2');
            $table->integer('checkbox3');
            $table->rememberToken();
            $table->timestamps();
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
