<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;
use App\Models\Cart;
use App\Models\Register;
use App\Models\Instructor;
use Session;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function account(){
        return view('instructor.registration');
    }
    public function accountRegister(Request $request){
        $validate = $request->validate([
            /* 'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'educational_background' => 'required',
            'organization_name' => 'required',
            'designation_name' => 'required',
            'linkedin' => 'required',
            'topics' => 'required', */
          ]);
          return view('student.dash');
        }
    public function home()
    {
        return view('pages.home');
    }
    public function signin()
    {
        return view('pages.signin');
    }

    public function registration()
    {
        return view('instructor.registration');
    }

    public function register()
    {
        return view('pages.registration');
    }
    public function help()
    {
        return view('pages.help');
    }
    public function forEducators()
    {
        return view('pages.forEducators');
    }
    public function life()
    {
        return view('pages.life');
    }
    public function careerAdvice()
    {
        return view('pages.careerAdvice');
    }
    public function study()
    {
        return view('pages.study');
    }
    public function booklist()
    {
        return view('pages.booklist');
    }

    public function allCourse()
    {
        return view('pages.allCourse');
    }
    public function index()
    {
        return Teacher::with('courses')->get();
    }
    public function courses()
    {
        return Course::with('teacher')->get();
    }
    public function enrollcourses()
    {
        return Student::with('enrollcourses')->get();
    }
    public function studentTakeCourse()
    {
        return EnrollCourse::with('studentTakeCourse')->get();
    } 
    public function payment()
    {
        return Payment::with('enrollCoursePayment')->all();
    }
    public function allCourseHome()
    {
    
        $courses = Course::all();
        return view('pages.allCourse',compact("courses"));
    }

    public function registered_instructor()
    {
        return view('pages.registeredInstructor');
    }
   
    public function detail($id)
    {
        $course = Course::find($id);
        return view('pages.courseDetail.detail',['course'=>$course]);
    }
     
    public function addToCart(Request $request) {
        if ($request->session()->has('loginId')) {
            $cart = new Cart;
            $cart->user_id = $request->session()->get('loginId','id');
            $cart->course_id = $request->course_id;
            $cart->save();
            return redirect('/viewCourse');
        } else {
            return redirect('/signin');
        }
    }
    static function cartItem()
    {
        $userId = Session::get('loginId','id');
        return Cart::where('user_id',$userId)->count();
    }

    public function cartList()
    {
        $userId = Session::get('loginId','id');
        $course = DB::table('cart')
        ->join('courses','cart.course_id','=','courses.id')
        ->where('cart.user_id',$userId)
        ->select('courses.*','cart.id as cart_id')
        ->get();

        return view('pages.courseDetail.cartList',['courses'=>$course]);
    }

    public function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartList');
    }

    public function registerNow()
    {
        $userId = Session::get('loginId','id');
        $total = $course = DB::table('cart')
        ->join('courses','cart.course_id','=','courses.id')
        ->where('cart.user_id',$userId)
        ->sum('courses.price');

        return view('pages.courseDetail.registernow',['total'=>$total]);
        
    }

    public function registerPlace(Request $request)
    {
        $userId=Session::get('loginId','id');
        $allCart= Cart::where('user_id',$userId)->get();
        foreach($allCart as $cart)
        {
            $register= new Register;
            $register->course_id = $cart['course_id'];
            $register->user_id = $cart['user_id'];
            $register->status = "pending";
            $register->payment_method = $request->payment;
            $register->payment_status = "pending";
            $register->save();
            Cart::where('user_id',$userId)->delete(); 
        }
        $request->input();
        return redirect('/viewCourse');
    }

    public function enrollCourse()
    {
        $userId=Session::get('loginId','id');
        $registers = DB::table('registers')
         ->join('courses','registers.course_id','=','courses.id')
         ->where('registers.user_id',$userId)
         ->get();
 
         return view('pages.courseDetail.enrollcourse',['registers'=>$registers]);
    }
}
