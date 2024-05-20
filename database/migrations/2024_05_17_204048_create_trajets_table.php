<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('trajets', function (Blueprint $table) {
        $table->id();
        $table->string('departure');
        $table->string('destination');
        $table->dateTime('departure_time');
        $table->dateTime('arrival_time');
        $table->timestamps();
        $table->foreignId('chauffeur_id')->references('id')->on('chauffeurs');
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trajets');
    }
};
