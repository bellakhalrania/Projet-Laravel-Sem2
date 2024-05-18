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
        Schema::create('abonnements', function (Blueprint $table) {
            $table->id();
            $table->text('nom');
            $table->text('prenom');
            $table->text('email');
            $table->integer('phone');
            $table->text('lieu'); 
            $table->string('image')->nullable();
            $table->foreignId('trajet_id');
            $table->foreignId('garedepart_id');
            $table->foreignId('garearrive_id');
            $table->foreign('trajet_id')->references('id')->on('trajets');
            $table->foreign('garedepart_id')->references('id')->on('gares');
            $table->foreign('garearrive_id')->references('id')->on('gares');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abonnements');
    }
};
