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
        Schema::create('demandes_gratuits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gratuit_id')->nullable();
            $table->foreign('gratuit_id')->references('id')->on('gratuits');
            $table->unsignedBigInteger('demande_par_id')->nullable();
            $table->foreign('demande_par_id')->references('id')->on('users');
            $table->unsignedBigInteger('demande_pour_id')->nullable();
            $table->foreign('demande_pour_id')->references('id')->on('users');
            $table->integer('quantite')->default(0);
            $table->string('commentaire')->nullable();
            $table->string('statut')->comment('envoyer, valider, livrer');
            $table->datetime('date_demande');
            $table->datetime('date_valide')->nullable();
            $table->datetime('date_livrer')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demandes_gratuits');
        Schema::table('demandes_gratuits', function (Blueprint $table) {
            $table->dropForeign(['qvd_id', 'demande_par_id', 'demande_pour_id']);
            $table->dropColumn('qvd_id');
            $table->dropColumn('demande_par_id');
            $table->dropColumn('demande_pour_id');
        });
    }
};
