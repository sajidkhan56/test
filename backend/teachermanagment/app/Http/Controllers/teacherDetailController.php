<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teacherDetail;


class teacherDetailController extends Controller
{
    public function setTeacherDetails(Request $request)
    {   
        $teacher_detail = new teacherDetail;
        $teacher_detail->name = $request->formdata[0];
        $teacher_detail->qualification = $request->formdata[1];
        $teacher_detail->start_timing = $request->formdata[2];
        $teacher_detail->end_timing = $request->formdata[3];
        $teacher_detail->save();

        return (['msg' => 'Teacher Added Successfully']);
    }

    public function getTeacherDetails()
    {  
         $teacher_list = teacherDetail::all();
         return(["teacher_list" => $teacher_list]);
    }

    public function editTeacherDetails(Request $request)
    {
        $teacher_record = teacherDetail::find($request->id);
        return(["teacher_record" => $teacher_record]);
    }

    public function setEditTeacherDetails(Request $request)
    {   
         teacherDetail::where('id', '=', $request->formdata[0])->update(array('name' => $request->formdata[1],  'qualification' => $request->formdata[2],
         'start_timing' => $request->formdata[3], 'end_timing' => $request->formdata[4]));
         return (['msg' => 'Teacher Record updated Successfully']);
    }

    public function deleteTeacherDetails(Request $request)
    {    
        teacherDetail::where('id',$request->id)->delete();
        return (['msg' => 'Teacher Deleted Successfully']);
    }

}
