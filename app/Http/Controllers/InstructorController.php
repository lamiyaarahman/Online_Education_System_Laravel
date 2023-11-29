<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;
use App\Models\Instructor;
use Hash;
use Session;

class InstructorController extends Controller
{
    
    public function instructor()
    {
        return view('instructor.login');
    }

    public function loginInstructor(Request $request)
    { 
        $validate = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $instructor = Instructor::where('email','=',$request->email)->first();
        if($instructor)
        {
            $request->session()->put('instructorId',$instructor->id);
            return view('instructor.dash');
        }
        else{
            return back()->with('fail','This email is not registered');
        }
        return view('instructor.dash');
    }

    public function register()
    {
        return view('instructor.registration');
    }
    public function registerInstructor(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'educational_background' => 'required',
            'organization_name' => 'required',
            'designation_name' => 'required',
            'linkedin' => 'required',
            'topics' => 'required',
          ]);

          $instructor = new Instructor();
          $instructor->name = $request->name;
          $instructor->email = $request->email;
          $instructor->phone = $request->phone;
          $instructor->educational_background = $request->educational_background;
          $instructor->organization_name = $request->organization_name;
          $instructor->designation_name = $request->designation_name;
          $instructor->department = $request->department;
          $instructor->linkedin = $request->linkedin;
          $instructor->topics = $request->topics;
          $instructor->save();
          if($request)
          {
              return back()->with('success','You have registered successfully');
          }
          else
          {
              return back()->with('fail','Something Wrong');
          }
         
      return view('instructor.login');
    }
    public function logout(){
        // return Session::get("loginId");
        session()->forget('instructorId');
        return redirect()->route('home');
    }

    public function inbox()
    {
        return view('instructor.topnav.inbox');
    }
    public function teams()
    {
        return view('instructor.topnav.teams');
    }
    public function notes()
    {
        return view('instructor.topnav.notes');
    }
    public function activity()
    {
        return view('instructor.topnav.activity');
    }
    public function courses()
    {
        return view('instructor.topnav.courses');
    }
    public function courseList()
    {
        return view('instructor.topnav.courseList');
    }
  
    public function takeClass()
    {
        return view('instructor.topnav.teams');
    }
    public function takeClassSubmit()
    {
        return view('instructor.topnav.teams');
    }
    public function instructorDash()
    {
        $id = Session::get('loginId');
        $user = User::where('id','=',$id)->first();

        return view('instructor.dash',compact('user'));
    }
    public function description()
    {
        $course = Course::where('course_id','=',$id)->first();
        return view('instructor.topnav.courseDescription',compact("course"));
    }
    public function instructor_Profile()
    {
        return view('instructor.topnav.dash');
    }
}