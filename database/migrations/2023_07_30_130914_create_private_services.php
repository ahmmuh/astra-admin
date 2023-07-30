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
        Schema::create('private_services', function (Blueprint $table) {
            $table->string('title')->nullable();
            $table->string('title2')->nullable();
            $table->string('menyNamn')->nullable();
            $table->text('bodyText')->nullable();
            $table->text('description')->nullable();
            $table->text('descriptionImage')->nullable();
            $table->string('serviceType');
             $table->json('extra');
            $table->string('serviceImage');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('private_services');
    }
};
