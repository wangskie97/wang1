<?php

use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/v1/lvl1',[TransactionController::class,'getExam_appointments']);
Route::get('/v1/lvl2',[TransactionController::class,'getExam_appointmentsData']);
Route::get('/v1/lvl3',[TransactionController::class,'getAppointmentsChallenging']);
Route::get('/v1/lvl4',[TransactionController::class,'getAppDifficult']);