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
        Schema::create('exam_schedule', function (Blueprint $table) {
            $table->id();
            $table->string("school_year",50);
            $table->integer("semester");
            $table->string("exam_start_month",50);
            $table->string("exam_end_month",50);
            $table->integer("max_examinees");
            $table->enum("status",["pending","active","closed"])->default("pending");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam_schedule');
    }
};
