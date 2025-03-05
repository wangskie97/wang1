<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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

        DB::table('exam_schedule')->insert([
            [
                "school_year" => '2023-2024',
                "semester" => '2',
                "exam_start_month" => 'march',
                "exam_end_month" => 'april',
                "max_examinees" => '40',
            ],
            [
                "school_year" => '2024-2025',
                "semester" => '1',
                "exam_start_month" => 'may',
                "exam_end_month" => 'june',
                "max_examinees" => '40',
            ],
            [
                "school_year" => '2026-2027',
                "semester" => '2',
                "exam_start_month" => 'november',
                "exam_end_month" => 'december',
                "max_examinees" => '40',
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam_schedule');
    }
};
