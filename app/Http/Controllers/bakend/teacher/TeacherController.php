<?php

namespace App\Http\Controllers\bakend\teacher;

use auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Sclass;
use App\Models\Subject;
use App\Models\subjectTeacher;
use App\Models\UserSclassSubject;

class TeacherController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $class = Sclass::with('Subject')->get();
        // $class = Subject::with('Teacher')->get();
    //    dd($class);
        return view('bakend.teacher.index',compact('class'));
    }
    public function create($cid,$sid){
      $classId = $cid;
      $subjectId = $sid;
      $teacher = User::where('teacher', 1)->get();
      return view('bakend.teacher.create',compact('teacher','classId','subjectId'));
    }
    public function addteacher(Request $request,$cid,$sid){
       
        
        $request->validate([
            'teacher' => 'required',
        ]);
        $subject = Subject::find($sid);
        $subject->Teacher()->sync($request->teacher_id);
        
        // $asignteacher = new subjectTeacher();
        
        // $asignteacher->subject_id = $sid;
        // $asignteacher->user_id = $request->teacher;

        // $asignteacher->save();
        return back();
    }
}
