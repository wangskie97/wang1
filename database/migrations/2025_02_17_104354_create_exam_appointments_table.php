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
        Schema::create('exam_appointments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("examinee_id");
            $table->unsignedBigInteger("exam_id");
            $table->integer("exam_month");
            $table->integer("exam_day");
            $table->string("exam_time",50);
            $table->timestamps();
            $table->foreign('examinee_id')->references('id')->on('accounts')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('exam_id')->references('id')->on('exam_schedule')->onDelete('cascade')->onUpdate('cascade');

        });

        DB::table('exam_appointments')->insert([
            [
                "examinee_id" => '1',
                "exam_id" => '1',
                "exam_month" => '3',
                "exam_day" => '8',
                "exam_time" => '08:00',

            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam_appointments');
    }
};
