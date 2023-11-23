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
        Schema::create('detail_bondecommandes', function (Blueprint $table) {
            $table->id();
            $table->double('quantite');
        });
        Schema::table('detail_bondecommandes',function (Blueprint $table){
            $table->foreignIdFor(\App\Models\BonDeCommande::class)->constrained()->cascadeOnDelete();
        });
        Schema::table('detail_bondecommandes',function (Blueprint $table){
            $table->foreignIdFor(\App\Models\ProduitDispo::class)->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_bondecommandes');
    }
};
