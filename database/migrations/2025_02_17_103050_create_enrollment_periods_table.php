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

        

        DB::table('enrollment_periods')->insert([
            [
                "school_year" => '2030-2031',
                "semester" => '1st semester',
                "enroll_month" => 'may',
                "year_level" => '2rd year',
                "status" => 'irregular',
                "max_participants_per_day" => '40',

            ],
            [
                "school_year" => '2029-2030',
                "semester" => '2nd semester',
                "enroll_month" => 'december',
                "year_level" => '1sd year',
                "status" => 'regular',
                "max_participants_per_day" => '40',

            ],
            [
                "school_year" => '2030-2031',
                "semester" => '2nd semester',
                "enroll_month" => 'december',
                "year_level" => '1sd year',
                "status" => 'regular',
                "max_participants_per_day" => '40',

            ]
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollment_periods');
    }
};
