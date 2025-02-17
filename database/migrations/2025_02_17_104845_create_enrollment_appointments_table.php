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
        Schema::create('enrollment_appointments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("enrollee_id");
            $table->unsignedBigInteger("enrollment_id");
            $table->integer("exam_day");
            $table->string("exam_time",50);
            $table->enum("status",["booked","canceled","pending"])->default("booked");
            $table->timestamps();
            $table->foreign('enrollee_id')->references('id')->on('accounts')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('enrollment_id')->references('id')->on('enrollment_periods')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollment_appointments');
    }
};
