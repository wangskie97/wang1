<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\enrollment_periods;
use Illuminate\Database\Eloquent\Model;

class enrollment_appointments extends Model
{
    use HasFactory;
    protected $table = "enrollment_appointments";
    protected $fillable = ['enrollee_id','enrollment_id','exam_day','exam_time','status',];


    public function enrollmentPeriods()
    {
        return $this->belongsTo(enrollment_periods::class, 'enrollment_id','id');
    }

    
}
