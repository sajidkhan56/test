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

    public function editTeacherDetails($id)
    {
        $teacher_record = teacherDetail::find($id);
        return view('editteacherform', ['teacher_record' => $teacher_record]);
    }

    public function setEditTeacherDetails(Request $request)
    {
        teacherDetail::where('id', '=', $request->input('id'))->update(array('name' => $request->input('name'),  'qualification' => $request->input('qualification'),
        'start_timing' => $request->input('start_time'), 'end_timing' => $request->input('end_time')));
        return redirect('/')->with('msg', 'Teacher Record updated Successfully');
    }

    public function deleteTeacherDetails($id)
    {
        teacherDetail::where('id',$id)->delete();
        return redirect('/')->with('msg', 'Teacher Record Deleted Successfully');
    }

}
