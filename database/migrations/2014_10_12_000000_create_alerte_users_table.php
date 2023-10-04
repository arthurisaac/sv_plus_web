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
        Schema::create('alerte_users', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('name')->nullable();
            $table->string('email')->nullable()->unique();
            $table->string('telephone')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('uniq')->nullable()->unique();
            $table->longText('api_token')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alerte_users');
    }
};
