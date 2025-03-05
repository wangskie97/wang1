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
        DB::table('enrollment_appointments')->insert([
            [
                "enrollee_id" => '1',
                "enrollment_id" => '1',
                "exam_day" => '8',
                "exam_time" => '08:00',
                "status" => 'pending',
                

            ],
            [
                "enrollee_id" => '2',
                "enrollment_id" => '2',
                "exam_day" => '8',
                "exam_time" => '08:00',
                "status" => 'pending',
                

            ],
            [
                "enrollee_id" => '2',
                "enrollment_id" => '2',
                "exam_day" => '8',
                "exam_time" => '08:00',
                "status" => 'pending',
                

            ]
        ]);


        

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollment_appointments');
    }
};
