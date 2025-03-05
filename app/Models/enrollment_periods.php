<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enrollment_periods extends Model
{
    use HasFactory;
    protected $table = "enrollment_periods";
    protected $fillable = ['school_year','semester','enroll_month','year_level','status','max_participants_per_day'];
}
