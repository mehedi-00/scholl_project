<?php

namespace App\Http\Controllers\bakend\user;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Models\EmployData;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class Employcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::where('name', '!=', 'principle')->get();
        return view('bakend.user.employ.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'number' => 'required|string|min:11|unique:employ_data',
            'birthdate' => ['required','date'],
            'address' => ['required','string'],
            'quality' => ['required','string'],
            'photo' => ['required','image','mimes:jpg,png'],
            'role' => ['required'] 

        ]);
      

           $user = New  User();
           $user->name = $request->name;
           $user->email = $request->email;
           $user->password = Hash::make($request->password);
           if($request->role == 'teacher'){
            $user->teacher = 1;
           }
       $user->save();

        $user->assignrole($request->role);

        // employ model
        $employdata = new EmployData();
        

        $userId =$user->id;

        $extension = $request->photo->extension(); //image Extention
        $imageNewName  = "employ-" . time() . "." . $extension; //Image New Name
        $path = public_path() . '/storage/images/employ';
        if (!File::exists($path)) {
            mkdir($path);
        }
        $request->photo->move($path, $imageNewName);

        $employdata->user_id = $userId;
        $employdata->number = $request->number;
        $employdata->birthdate = $request->birthdate;
        $employdata->address = $request->address;
        $employdata->quality = $request->quality;
        $employdata->photo = $imageNewName;
        
        $employdata->save();
        return redirect(route('user.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
