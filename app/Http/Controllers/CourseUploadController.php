<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use App\Models\Instructor;
use Hash;
use Session;



class CourseUploadController extends Controller
{
    public function fileUpload()
    {
        return view('instructor.topnav.courses');
    }

    public function saveFile(Request $request)
    {
        $course = new Course();
        $course->instructor_id = $request->instructor_id;
        $course->instructor_name = $request->instructor_name;
        $file = $request->file('image');
        $fileName = time().'.'.$file->extension();
        $file->move(public_path('uploads'),$fileName);
        $course->image = $fileName;
        $course->course_name = $request->course_name;
        $course->promo_code = $request->promo_code;
        $course->price = $request->price;
        $course->description = $request->description;
        $course->status = false;
        $course->save();
       
        return back()->with('Course Upload Successfully.Please check your Email.Your account is pending approval');
       
} 
    public function courseList ()
  
    {
       $id = Session::get('instructorId');
       $course = Course::where('instructor_id','=',$id)->get();
       return view('Instructor.topnav.courseList',compact ('course'));
    }
}