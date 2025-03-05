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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string("email",50);
            $table->string("password",50);

            
            $table->timestamps();
        });

        DB::table('accounts')->insert([
            [
                "email" => 'occ.montalban.joshua@gmail.com',
                "password" => '123',
            ],
            [
                "email" => 'bing@gmail.com',
                "password" => '123',
            ],
            [
                "email" => 'Jessther@gmail',
                "password" => '123',
            ]
            ]);
            
        
        }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
