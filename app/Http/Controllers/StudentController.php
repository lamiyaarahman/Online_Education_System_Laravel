<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\TeacherController;
use App\Models\Course;
use App\Models\Student;
use App\Models\User;
use Hash;
use Session;

class StudentController extends Controller
{
    public function inbox()
    {
        return view('student.topnav.inbox');
    }
    public function notifications()
    {
        return view('student.topnav.notifications');
    }
    public function teams()
    {
        return view('student.topnav.teams');
    }
    public function viewCourse()
    {
        $courses = Course::all();
        return view('student.topnav.viewCourse',compact ('courses'));
    }
    public function activity()
    {
        return view('student.topnav.activity');
    }
    public function logout()
    {
        return view('student.topnav.logout');
    }
    public function viewCourseDetail()
    {
       /*  //return $id;
        $course = AllCourse::where('course_id','=',$id)->first();
        return view('student.topnav.cart',compact("course")); */
        return view('instructor.topnav.courseDescription');
    }

    public function studentDash()
    {
        $id = Session::get('loginId');
        $user = User::where('id','=',$id)->first();

        return view('student.dash',compact('user'));
    }
}
