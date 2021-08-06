<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\ApplyforjobController;
use App\Http\Controllers\SendhelpformController;
use App\Http\Controllers\SendmessageController;
use App\Http\Controllers\MakepaymentController;
use App\Http\Controllers\SendpostController;
use App\Http\Controllers\Update4Controller;
use App\Http\Controllers\Update5Controller;
use App\Http\Controllers\AddcourseController;
use App\Http\Controllers\AddprojectController;
use App\Http\Controllers\BooksessionController;
use App\Http\Controllers\Uploadfiles1Controller;
use App\Http\Controllers\Markwork1Controller;
use App\Http\Controllers\AddjobController;
use App\Http\Controllers\Studentsapplications1Controller;
use App\Http\Controllers\Adminsupportpage1Controller;
use App\Http\Controllers\ConfirmcourseController;
use App\Http\Controllers\SubmitworkController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\SendformController;
use App\Http\Controllers\ServerController;
use App\Http\Controllers\Server2Controller;
use App\Http\Controllers\Server3Controller;
use App\Http\Controllers\JoincourseController;
use App\Http\Controllers\JoinprojectController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\FinishcourseController;

use App\Http\Controllers\FinishprojectController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/aboutus', function(){return view('aboutus');});
Route::get('/addcourse', function(){return view('addcourse');});
Route::get('/addjob', function(){return view('addjob');});
Route::get('/addproject', function(){return view('addproject');});
Route::get('/admindashboard', function(){return view('admindashboard');});
Route::get('/login', function(){return view('login');});
Route::get('/adminsupportpage', function(){return view('adminsupportpage');});
Route::get('/booksession', function(){return view('booksession');});
Route::get('/certificates', function(){return view('certificates');});
Route::get('/community', function(){return view('community');});
Route::get('/studentdashboard', function(){return view('studentdashboard');});
Route::get('/tutordashboard', function(){return view('tutordashboard');});
Route::get('/sponserdashboard', function(){return view('sponserdashboard');});
Route::post('/authenticate',[AuthenticateController::class,'index'])->name('authenticate');
Route::get('/courseprogress', function(){return view('courseprogress');});
Route::get('/projectprogress', function(){return view('projectprogress');});
Route::get('/jobprogress', function(){return view('jobprogress');});
Route::get('/workspace', function(){return view('workspace');});

Route::get('/quiz', function(){return view('quiz');});
Route::get('/jobboard', function(){return view('jobboard');});
Route::get('/jobapplication', function(){return view('jobapplication');});
Route::post('/applyforjob',[ApplyforjobController::class,'index'])->name('applyforjob');
Route::get('/supportpage', function(){return view('supportpage');});
Route::get('/helpform', function(){return view('helpform');});
Route::get('/supporttickets', function(){return view('supporttickets');});
Route::post('/sendhelpform',[SendhelpformController::class,'index'])->name('sendhelpform');
Route::get('/messages', function(){return view('messages');});
Route::post('/sendmessage',[SendmessageController::class,'index'])->name('sendmessage');
Route::get('/newmessage', function(){return view('newmessage');});
Route::get('/payment', function(){return view('payment');});
Route::get('/makepayment', function(){return view('makepayment');});
Route::post('/makepayment',[MakepaymentController::class,'index'])->name('makepayment');
Route::get('/community', function(){return view('community');});
Route::get('/newpost', function(){return view('newpost');});
Route::post('/sendpost',[SendpostController::class,'index'])->name('sendpost');

Route::get('/studentprofile', function(){return view('studentprofile');});

Route::get('/studentaccount', function(){return view('studentaccount');});
Route::post('/update4',[Update4Controller::class,'index'])->name('update4');
Route::post('/update5',[Update5Controller::class,'index'])->name('update5');
Route::get('/studentsettings', function(){return view('studentsettings');});

Route::get('/logout', function(){return view('logout');});
Route::get('/tutorcourses', function(){return view('tutorcourses');});
Route::post('/addcourse',[AddcourseController::class,'index'])->name('addcourse');
Route::get('/tutorprojects', function(){return view('tutorprojects');});
Route::post('/addproject',[AddprojectController::class,'index'])->name('addproject');
Route::get('/sessions', function(){return view('sessions');});
Route::post('/booksession',[BooksessionController::class,'index'])->name('booksession');
Route::get('/content', function(){return view('content');});
Route::post('/uploadfiles1',[Uploadfiles1Controller::class,'index'])->name('uploadfiles1');
Route::get('/meeting', function(){return view('meeting');});
Route::post('/uploadfiles1',[Uploadfiles1Controller::class,'index'])->name('uploadfiles1');
Route::post('/markwork1',[Markwork1Controller::class,'index'])->name('markwork1');
Route::get('/markwork', function(){return view('markwork');});
Route::get('/sponserjobs', function(){return view('sponserjobs');});

Route::post('/addjob',[AddjobController::class,'index'])->name('addjob');
Route::post('/studentsapplications1',[Studentsapplications1Controller::class,'index'])->name('studentsapplications1');
Route::get('/studentsapplications', function(){return view('studentsapplications');});
Route::get('/adminsupportpage', function(){return view('adminsupportpage');});
Route::post('/adminsupportpage1',[Adminsupportpage1Controller::class,'index'])->name('adminsupportpage1');
Route::post('/confirmcourse',[ConfirmcourseController::class,'index'])->name('confirmcourse');
Route::get('/courserequests', function(){return view('courserequests');});
Route::get('/submitwork', function(){return view('submitwork');});
Route::post('/submitwork',[SubmitworkController::class,'index'])->name('submitwork');

Route::post('/delete',[DeleteController::class,'index'])->name('delete');
Route::get('/index', function(){return view('index');});
Route::get('/courses', function(){return view('courses');});
Route::get('/coursedetails', function(){return view('coursedetails');});
Route::get('/projects', function(){return view('projects');});
Route::get('/projectdetails2', function(){return view('projectdetails2');});
Route::get('/contactus', function(){return view('contactus');});
Route::post('/sendform',[SendformController::class,'index'])->name('sendform');
Route::get('/studentsignup', function(){return view('studentsignup');});
Route::get('/tutorsignup', function(){return view('tutorsignup');});
Route::get('/sponsersignup', function(){return view('sponsersignup');});
Route::post('/server',[ServerController::class,'index'])->name('server');
Route::post('/server2',[Server2Controller::class,'index'])->name('server2');
Route::post('/server3',[Server3Controller::class,'index'])->name('server3');
Route::post('/joincourse',[JoincourseController::class,'index'])->name('joincourse');
Route::post('/joinproject',[JoinprojectController::class,'index'])->name('joinproject');

Route::post('/verify',[VerificationController::class,'index'])->name('verify');
Route::post('/finishcourse',[FinishcourseController::class,'index'])->name('finishcourse');
Route::post('/finishproject',[FinishprojectController::class,'index'])->name('finishproject');




