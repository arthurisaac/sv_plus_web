<?php

use App\Models\AlerteDiscussion;
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
        Schema::create('alerte_messages', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class, 'user');
            $table->foreignIdFor(User::class, 'toUser')->nullable(true);
            $table->integer('message_type')->default(0)->nullable(true);
            $table->string('message')->nullable(true);
            $table->string('attachment')->nullable(true);
            $table->boolean('read')->nullable(true);
            $table->foreignIdFor(AlerteDiscussion::class, 'discussion');
            //$table->integer('discussion')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alerte_messages');
    }
};
