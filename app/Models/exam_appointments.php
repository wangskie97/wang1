<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exam_appointments extends Model
{
    use HasFactory;
    protected $table = "exam_appointments";
    protected $fillable = ['examinee_id','exam_id','exam_month','exam_day','exam_time'];
}
