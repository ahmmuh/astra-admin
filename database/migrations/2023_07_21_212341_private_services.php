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
            $table->string('title')->nullable();
            $table->string('bodyText')->nullable();
            $table->text('description')->nullable();
            $table->string('serviceType');
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
