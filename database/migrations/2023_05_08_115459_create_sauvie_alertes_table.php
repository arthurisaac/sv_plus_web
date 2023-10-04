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
        Schema::create('sauvie_alertes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class, 'alerte_user');
            $table->string("alerte");
            $table->tinyInteger("vue")->default(0);
            $table->tinyInteger("traite")->default(0);
            $table->integer("attribue_a")->nullable(true);
            $table->string("latitude")->nullable();
            $table->string("longitude")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sauvie_alertes');
    }
};
