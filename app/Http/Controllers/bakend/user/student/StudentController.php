<?php

namespace App\Http\Controllers\bakend\user\student;

use App\Models\Sclass;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;

class StudentController extends Controller
{
    // protected $redirectTo = RouteServiceProvider::HOME;

    public function register()
    {
        $classes = Sclass::all();
        //dd($classes);
        return view('bakend.user.student.register', compact('classes'));
    }
    public function login()
    {
        return view('bakend.user.student.login');
    }
    public function create(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|min:5',
                'email' => 'required|email|unique:students,email',
                'birth_date' => 'required|string',
                'birth_registration_number' => 'required|numeric|unique:students,birth_registration_number',
                'address' => 'required',
                'gender' => 'required',
                'class' => 'required',
                'photo' => 'required|image|mimes:jpg,png',
                'password' => 'required|string|min:8|max:30',
                'cpassword' => 'required|min:8|max:30|same:password',
            ],
        );

        // dd($request->photo);
        $extension = $request->photo->extension();
        
        $imageNewName = 'student-'. time(). '.' . $extension;
        $path = public_path(). '/storage/images/student';
        if(!File::exists($path)){
            mkdir($path);
        }
        $request->photo->move($path,$imageNewName);
        $password = Hash::make($request->password);
        $student = New Student();
        
        $student->sclass_id = $request->class;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->birth_date = $request->birth_date;
        $student->birth_registration_number = $request->birth_registration_number;
        $student->address = $request->address;
        $student->gender = $request->gender;
        $student->photo = $imageNewName;
        $student->password = $password;
        $student->save();
        $studentId = $student->id;
       
        $student->assignRole('student');
        return redirect()->route('student.login');
    }
    public function dashboard(){
        return view('bakend.layouts');
    }
    public function check(Request $request){
        $request->validate([
            'email' => 'required|email|exists:students,email',
            'password' => 'required|min:8|max:30',
        ]
    );
         $password = Hash::make($request->password);
         $creds = $request->only('email','password');
         //dd($creds);
        if(Auth::guard('student')->attempt($creds)){
           
            // return view();
            
            return redirect()->route('student.dashboard');
        }else{
            return back()->with('error','You are not a valid student');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('/');
    }
    
}
