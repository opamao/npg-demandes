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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('MATNR')->comment('numero article');
            $table->string('MAKTX')->comment('designation article');
            $table->string('WERKS')->comment('division');
            $table->string('LABST')->comment('stock valorise a utilisation libre');
            $table->string('ZSTOCK_RC')->comment('stock reserve dans commande');
            $table->string('ZSTOCK_RL')->comment('stock reserve pour la livraison');
            $table->string('status_article')->default(1)->comment('1 = Active, 0 = Desactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
