<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teacherSchedule;
use App\Models\teacherDetail;

class teacherScheduleController extends Controller
{
    public function loadTeachersNames()
    {   
        return view('scheduleform', ['teachers_names' => teacherDetail::all('name')]);
    }
}
