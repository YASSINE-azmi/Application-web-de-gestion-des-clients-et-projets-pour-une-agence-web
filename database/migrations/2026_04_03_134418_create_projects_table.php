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
    Schema::create('projects', function (Blueprint $table) {
        $table->id();
        $table->foreignId('client_id')->constrained()->onDelete('cascade');
        $table->string('titre');
        $table->text('description')->nullable();
        $table->string('statut')->default('en attente');
        $table->date('date_debut')->nullable();
        $table->date('date_fin')->nullable();
        $table->timestamps();
    });
}
};
