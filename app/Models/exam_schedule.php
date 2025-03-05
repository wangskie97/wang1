<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exam_schedule extends Model
{
    use HasFactory;
    protected $table = "exam_schedule";
    protected $fillable = ['school_year','semester','exam_start_month','exam_end_month','max_examinees','status'];
}
