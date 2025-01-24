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
        Schema::create('transferts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_envoie_id');
            $table->foreign('client_envoie_id')->references('id')->on('users');
            $table->unsignedBigInteger('client_recu_id');
            $table->foreign('client_recu_id')->references('id')->on('users');
            $table->integer('quantite');
            $table->string('division_par');
            $table->string('division_pour');
            $table->unsignedBigInteger('stock_id');
            $table->foreign('stock_id')->references('id')->on('stocks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transferts');
        Schema::table('transferts', function (Blueprint $table) {
            $table->dropForeign(['qvd_id', 'demande_par_id', 'demande_pour_id']);
            $table->dropColumn('qvd_id');
            $table->dropColumn('demande_par_id');
            $table->dropColumn('demande_pour_id');
        });
    }
};
