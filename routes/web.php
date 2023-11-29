<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseUploadController;
use App\Http\Controllers\BotManController;
use App\Http\Middleware\AdminCheck;
use App\Models\Course;
use App\Models\Student;
use App\Models\Payment;


Route::get('/', function () {
    return view('welcome');
});

//----------------------------topnav--------------------------//
Route::get('/home', [PagesController::class, 'home'])->name('home');
Route::get('/signin', [PagesController::class, 'signin'])->name('signin');
Route::get('/registration', [PagesController::class, 'registration'])->name('registration');
Route::get('/register', [PagesController::class, 'register'])->name('register');
Route::get('/booklist',[PagesController::class, 'booklist'])->name('booklist');
Route::get('/foreducators',[PagesController::class, 'forEducators'])->name('foreducators');
Route::get('/careeradvice',[PagesController::class, 'careerAdvice'])->name('careeradvice');

Route::get('/registered_instructor', [PagesController::class, 'registered_instructor'])->name('registered_instructor');
Route::get('/allCourse', [PagesController::class, 'allCourseHome'])->name('allCourse');
Route::get('/books', [PagesController::class, 'books'])->name('books');
Route::get('/account-register',[PagesController::class,'account']);
Route::post('/account-register',[PagesController::class,'accountRegister'])->name('account-register');
Route::get('detail/{id}',[PagesController::class,'detail']);
Route::post('add_to_cart',[PagesController::class,'addToCart']); 
Route::get('cartList',[PagesController::class,'cartList']); 
Route::get('removecart/{id}',[PagesController::class,'removeCart']); 
Route::get('registernow',[PagesController::class,'registerNow']); 
Route::post('registerplace',[PagesController::class,'registerPlace']); 
Route::get('enrollcourse',[PagesController::class,'enrollCourse']); 



//----------------------------login and registration-------------------------//
Route::get('/login',[UserController::class,'login'])->name('login');
Route::post('/login-user',[UserController::class,'loginUser'])->name('login-user');
Route::get('/register-user',[UserController::class,'register']);
Route::post('/register-user',[UserController::class,'registerUser'])->name('register-user');
Route::get('/logout',[UserController::class,'logout'])->name('logout');

//-----------------------------admin-------------------------------//
Route::get('/admin/list', [AdminController::class, 'list'])->name('list');
Route::get('/admin.dash', [AdminController::class, 'adminDash'])->name('dash');
Route::get('/login',[AdminController::class, 'login'])->name('login');
Route::post('/login',[AdminController::class, 'checkuser'])->name('login');


//---------------------admin add User---------------------//
Route::get('/addUser', [AdminController::class, 'addUser'])->name('addUser')->middleware('admin');
Route::post('/addUser', [AdminController::class, 'addUserSubmit'])->name('addUser');

//-----------------------admin edit User--------------------//
Route::get('/editUser/{id}', [AdminController::class, 'editUser'])->name('editUser')->middleware('admin');
Route::post('/editUser', [AdminController::class, 'editUserSubmit'])->name('editUser');

//-----------------------admin delete User-------------------//
Route::get('/deleteUser/{id}', [AdminController::class, 'deleteUser']);

//----------------------------admin approval Course----------------------------//
Route::get('/courseApproval', [AdminController::class,'courseApproval'])->name('courseApproval');

Route::get('/status/{id}', [AdminController::class, 'status'])->name('status');

//-----------------------------instructor----------------------------//
Route::get('/login-instructor',[InstructorController::class,'instructor'])->name('login-instructor');
Route::post('/login-instructor',[InstructorController::class,'loginInstructor'])->name('login-instructor');
Route::get('/register-instructor',[InstructorController::class,'register']);
Route::post('/register-instructor',[InstructorController::class,'registerInstructor'])->name('register-instructor');
Route::get('/logout',[InstructorController::class,'logout'])->name('logout');
Route::get('/instructor.dash',[InstructorController::class,'instructorDash'])->name('dash');
Route::get('/editInstructor/{id}', [UserController::class, 'editInstructor'])->middleware('admin');
Route::post('/editInstructor', [UserController::class, 'editInstructorSubmit'])->name('editInstructor');
Route::get('/take.class', [InstructorController::class, 'takeClass']);
Route::post('/take.class', [InstructorController::class, 'takeClassSubmit'])->name('take.class');
Route::post('/instructor_Home', [InstructorController::class, 'instructor_Home'])->name('instructor_Home');
Route::get('/instructor_Profile', [InstructorController::class, 'instructor_Profile'])->name('instructor_Profile');

//---------------------topnavInstructor-------------------------//
Route::get('/inbox', [InstructorController::class, 'inbox'])->name('inbox');
Route::get('/teams', [InstructorController::class, 'teams'])->name('teams');
Route::get('/notes', [InstructorController::class, 'notes'])->name('notes');
Route::get('/activity', [InstructorController::class, 'activity'])->name('activity');
Route::get('/courses', [InstructorController::class, 'courses'])->name('courses');
Route::get('/courseList', [InstructorController::class, 'courseList'])->name('courseList');


//--------------------------uploadCourse--------------------------//
Route::get('file-upload',[CourseUploadController::class,'fileUpload'])->name('upload.file');
Route::post('file-upload',[CourseUploadController::class,'savefile'])->name('upload.file'); 
Route::get('image/{filename}',[CourseUploadController::class])->name('image.displayImage');

//-------------------------------displayCourse------------------------//
Route::get('/courseList', [CourseUploadController::class,'courseList'])->name('courseList');

//------------------------------student---------------------------//
Route::get('/student.dash',[StudentController::class,'studentDash'])->name('dash');
Route::get('/editStudent/{id}', [UserController::class, 'editStudent'])->name('editStudent')->middleware('admin');
Route::post('/editStudent', [UserController::class, 'editStudentSubmit'])->name('editStudent');
Route::get('/viewCourse', [StudentController::class,'viewCourse'])->name('viewCourse');
Route::get('/view/{id}',[StudentController::class,'viewCourseDetail'])->name('view');


//---------------------topnavStudent-------------------------//
Route::get('/inbox', [StudentController::class, 'inbox'])->name('inbox');
Route::get('/teams', [StudentController::class, 'teams'])->name('teams');
Route::get('/notifications', [StudentController::class, 'notifications'])->name('notifications');
Route::get('/activity', [StudentController::class, 'activity'])->name('activity');
Route::get('/viewCourse', [StudentController::class, 'viewCourse'])->name('viewCourse');
Route::get('/history', [StudentController::class, 'history'])->name('history');


//--------------------------RelationShip----------------------//
Route::get('/data',[PagesController::class,'index']);
Route::get('/course',[PagesController::class,'courses']);

Route::get('/enrollcourses',[PagesController::class,'enrollcourses']);
Route::get('/studentTakeCourse',[PagesController::class,'studentTakeCourse']); 


Route::get('/payment',[PagesController::class,'payment']); 






//----------------------------github loin--------------------------//
Route::get('/login/github', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGithub'])->name('login.github');
Route::get('/login/github/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGithubCallback']);

//----------------------------google loin--------------------------//
Route::get('/login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);

//----------------------------facebook loin--------------------------//
Route::get('/login/facebook', [App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('/login/facebook/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleFacebookCallback']);
