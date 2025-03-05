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
        Schema::create('user_enrollments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->string("fullname",50);
            $table->integer("phone_number");
            $table->string("address",50);
            $table->integer("age");
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('accounts')->onDelete('cascade')->onUpdate('cascade');

        });

        DB::table('user_enrollments')->insert([
            [
                "user_id" => '1',
                "fullname" => 'Joshua',
                "phone_number" => '0909245671',
                "address" => 'LBB',
                "age" => '27',
                


            ],
            [
                "user_id" => '2',
                "fullname" => 'Emman',
                "phone_number" => '0912345667',
                "address" => 'Cayam',
                "age" => '20',
                


            ],


        
            [
                "user_id" => '3',
                "fullname" => 'loloy',
                "phone_number" => '09123',
                "address" => 'cdo',
                "age" => '29',
                


        ]

        ]);

        
                


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_enrollments');
    }
};
