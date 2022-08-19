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
        // $class = Sclass::with('Subject')->get();
        $class = Sclass::with('subject.Teacher')->get();
       //dd($class);
        return view('bakend.teacher.index',compact('class'));
    }
    public function create($cid,$sid){
      $classId = $cid;
      $subjectId = $sid;
      $teacher = User::where('teacher',1)->get();
      return view('bakend.teacher.create',compact('teacher','classId','subjectId'));
    }
    public function addteacher(Request $request,$cid,$sid){
       
        
        $request->validate([
            'teacher' => 'required',
        ]);
         $subject = Subject::find($sid);
        // $class = Sclass::with('Subject')->whereHas('Subject', function($q){
        //     $q->where('subject_name', 'Bangla');
        // })->find($cid);
        //  dd($class);
        $subject->Teacher()->attach($request->teacher);
        
        
        return redirect()->route('teacher.index');
    }
}
