<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teacherSchedule;
use App\Models\teacherDetail;

class teacherScheduleController extends Controller
{
    public function setTeacherSchedule(Request $request)
    {   
        
        $teacher_schedule = new teacherSchedule;
        $teacher_schedule->teacher_name = $request->formdata[0];
        $teacher_schedule->class_name = $request->formdata[1];
        $teacher_schedule->subject = $request->formdata[2];
        $teacher_schedule->start_time = $request->formdata[3];
        $teacher_schedule->end_time = $request->formdata[4];
        $difference = round(abs(strtotime($request->formdata[3]) - strtotime($request->formdata[4])) / 60,2)."ms";
        $teacher_schedule->duration = $difference;
        $teacher_schedule->save();

        return (['msg' => 'Teacher Schedule Added Successfully']);
    }

    public function getTeacherSchedule(Request $request)
    {
        $name = $request->name;
        $teacher_schedule = teacherSchedule::all()->where('teacher_name', '=', $name);
        return(["teacher_schedule" => $teacher_schedule]);
    }
}
