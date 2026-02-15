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
        Schema::create('career_submissions', function (Blueprint $table) {
            $table->id();
            $table->string('job'); // dropdown
            $table->string('years_of_experience'); // dropdown
            $table->foreignId('major_id')->constrained('majors');
            $table->string('name');
            $table->string('phone');
            $table->string('cv_path'); // stored path in storage/app/public
            $table->string('cv_original_name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('career_submissions');
    }
};
