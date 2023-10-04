<?php

use App\Models\User;
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
        Schema::create('alerte_discussions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class, 'alerte_user_regular');
            $table->foreignIdFor(User::class, 'alerte_user_agent')->nullable();
            $table->string('subject')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alerte_discussions');
    }
};
