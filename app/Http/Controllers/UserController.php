<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use Session;


class UserController extends Controller
{
    
    public function login()
    {
        return view('pages.signIn');
    }

    public function loginUser(Request $request)
    { 
        $validate = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('email','=',$request->email)->first();
        if($user)
        {
            $request->session()->put('loginId',$user->id);
            return view('student.dash');
        }
        else{
            return back()->with('fail','This email is not registered');
        }
    
    
  
    return view('student.dash');
    
     }   
        
    public function registration(){
        return view('pages.registration');
    }
    public function registerUser(Request $request){
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'confirm_password' => 'required',
            
         ]);
         
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        if($request)
        {
            return back()->with('success','You have registered successfully');
        }
        else
        {
            return back()->with('fail','Something Wrong');
        }
        
        return view('pages.signIn');
    }

  
   

    /* public function profile()
    {
        $id = Session::get('loginId');
        $user = User::where('id','=',$id)->first();

        return view("student.dashBoard",compact('user'));
    } */
    public function editStudent(Request $request)
    {
       $user = User::where('id',$request->id)->first();
        return view('student.edit')->with( 'user',$user);
    }

    public function editStudentSubmit(Request $request)
    {
        $user = User::where('id', $request->id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect('student.dash');
    } 
    public function editInstructor(Request $request)
    {
       $user = User::where('id',$request->id)->first();
        return view('Instructor.edit')->with( 'user',$user);
    }

    public function editInstructorSubmit(Request $request)
    {
        $user = User::where('id', $request->id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect('instructor.dash');
    } 

    public function logout(){
        // return Session::get("loginId");
        session()->forget('loginId');
        return redirect()->route('home');
    }

   
    
}
