<?php

use App\Models\AlerteSanteStructure;
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
        Schema::create('alerte_sante_structure_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(AlerteSanteStructure::class, 'id_structure');
            $table->string("nom");
            $table->string("image")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alerte_sante_structure_categories');
    }
};
