<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use App\Models\AllCourse;
use Hash;
use Session;


class AdminController extends Controller
{
    function login()
    {
        return view('admin.login');
    }

    function checkuser(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],
        
        );
        $user=array("email"=>"lamiyarahman.cse@gmail.com","password"=>"123456");
        $name=$request->input('email');
        $password=$request->input('password');
        if($name==$user['email'] && $password==$user['password'])
        {
            return redirect('admin.dash') ;
        }
        else
        {
            return "Your username and password incorrect";
        }
    }
    
    public function list()
   {
       $user = User::all();
       return view('admin.list',compact ('user'));
   }

   public function adminDash()
   {
       return view('admin.dash');
   }

   public function addUser()
   {
        return view('admin.addUser');
   }

   public function addUserSubmit(Request $request)
   {
       $validate = $request->validate([
           'name' => 'required| min:3',
           'email' => 'required',
           'password' =>'required',
           'confirm_password' =>'required',
           'profession' => 'required',
           
       ],
      );

      $user = new User();
      $user->name = $request->name;
      $user->email = $request->email;
      $user->password =Hash::make($request->password);
      $user->confirm_password =Hash::make($request->confirm_password);
      $user->profession =($request->profession);
      $user->save();

       return redirect()->route('list');
   }

    public function editUser(Request $request)
   {
      $user = User::where('id',$request->id)->first();
       return view('admin.editUser')->with( 'user',$user);
   }

   public function editUserSubmit(Request $request)
   {
    
       $user = User::where('id', $request->id)->first();
       $user->name = $request->name;
       $user->email = $request->email;
       $user->password =Hash::make($request->password);
       $user->save();

       return redirect()->route('list');
   } 

   public function deleteUser(Request $request)
   {
       $user = User::where('id', $request->id);
       $user->delete();
       return redirect()->route('list');
       //return view('admin.deleteUser')->with('user', $user);
   }
//    public function paymentMethod(Request $request)
//    {
//       $payment = new Payment();
//       $payment->promo_code = $request->promo_code;
//       $payment->price = $request->price;
//       $payment->payment_method = $request->payment_method;
//       $payment->save();

//       return redirect()->route('payment');

//    }

public function courseApproval()
{
    $courses = Course::all();
    return view('admin.courseApproval',compact ("courses"));
}

public function deleteCourse(Request $request)
{
    $course = Course::where('id', $request->id);
    $course->delete();
    return redirect()->route('courseApproval');
    //return view('admin.deleteUser')->with('user', $user);
}

public function status (Request $request, $id){
    $course = Course::find($id);
    if($course->status == 0)
    {
        $course->status =1;
        
    }
    else{
        $course->status=0;
    }
    $course->save();

   return redirect()->route('courseApproval')->with('message',$course->name,'Status has been changed successfully');
}

}