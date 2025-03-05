<?php

namespace App\Http\Controllers;

use App\Models\user_enrollments;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function getExam_appointments(){

        $lvl1 = DB::select('SELECT Fullname, enrollee_id, enrollment_id FROM Accounts as a
inner join user_enrollments as ue on a.id= ue.User_id
inner join Enrollment_appointments as ea on a.id= ea.enrollee_id
inner join enrollment_periods as ep on ep.id = ea.enrollment_id');


        // return view('dashboard.employee', compact('employees'));
        return response()->json(['success' => true, 'easy'=> $lvl1],200);
    }

    public function getExam_appointmentsData(){

        $lvl2= DB::table('Accounts as a')
        ->select('ue.Fullname As Fullname','ea.enrollee_id As enrollee_id', 'ea.enrollment_id As enrollment_id')
        ->join('user_enrollments as ue','a.id','ue.User_id')
        ->join('enrollment_appointments as ea','a.id','ea.enrollee_id')
        ->join('enrollment_periods as ep','ep.id','ea.enrollment_id')
      
        ->get();

        return response()->json(['success' => true, 'lvl2'=> $lvl2],200);
    }


    //level 3

    public function getAppointmentsChallenging(){

        $challenging = User_enrollments::with('account','enrollmentAppointment.enrollmentPeriods')->get();

        return response()->json(['success' => true, 'challenging' => $challenging],200);
    }



    //level 4


    public function getAppDifficult(){
        $difficult = user_enrollments::with(['account' => function($q){
            $q->select('*');
        }])->with(['enrollmentAppointment' => function($q){
            $q->select('*')->with('enrollmentPeriods');
        }])->get();

        return response()->json(['success' => true,'difficult' => $difficult],200);
    }

}
