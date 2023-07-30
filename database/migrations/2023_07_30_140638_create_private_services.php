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
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('title2');
            $table->string('menyNamn');
            $table->text('bodyText');
            $table->text('description');
            $table->text('descriptionImage');
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
