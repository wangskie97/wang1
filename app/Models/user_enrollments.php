<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\enrollment_appointments;
use App\Models\account;
use App\Models\enrollment_periods;
use Illuminate\Database\Eloquent\Model;

class user_enrollments extends Model
{
    use HasFactory;
    protected $table = "user_enrollments";
    protected $fillable = ['user_id','fullname','phone_number','address','age'];

    public function account()
    {
        return $this->belongsTo(account::class, 'user_id'); 
    }

    public function enrollmentAppointment()
    {
        return $this->hasMany(enrollment_appointments::class, 'enrollee_id');
    }

    public function enrollmentPeriods()
    {
        return $this->hasMany(enrollment_periods::class, 'enrollment_id')->with('enrollment_periods');
    }


}
