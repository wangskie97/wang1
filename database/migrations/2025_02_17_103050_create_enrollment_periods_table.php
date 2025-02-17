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
        Schema::create('enrollment_periods', function (Blueprint $table) {
            $table->id();
            $table->string("school_year",50);
            $table->string("semester",50);
            $table->string("enroll_month",50);
            $table->string("year_level",50);
            $table->string("status",50);
            $table->integer("max_participants_per_day");
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollment_periods');
    }
};
