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
       Schema::create('applications', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->string('firstName')->nullable();
           $table->string('lastName')->nullable();
           $table->string('email')->nullable();
           $table->string('telefon')->nullable();
           $table->string('description')->nullable();
           $table->timestamps();
           $table->unsignedBigInteger('job_id');
            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
       });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
      Schema::dropIfExists('applications');
    }
};
