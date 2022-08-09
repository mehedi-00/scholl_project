<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bakend\role\RoleController;
use App\Http\Controllers\bakend\user\UserController;
use App\Http\Controllers\bakend\class\ClassController;
use App\Http\Controllers\bakend\user\Employcontroller;
use App\Http\Controllers\bakend\subject\SubjectController;
use App\Http\Controllers\bakend\user\student\StudentController;
use App\Http\Controllers\bakend\permission\PermissionController;
use App\Http\Controllers\bakend\teacher\TeacherController;

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
    return view('welcome');
})->name('home');

Auth::routes();



Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard')->middleware('isBan');
// user route
Route::GET('/user',[UserController::class,'index'])->name('user.index');
Route::GET('/user/edit/{id}',[UserController::class,'edit'])->name('user.edit');
Route::GET('/user/permisssion/{id}',[UserController::class,'userPermission'])->name('user.permission');
Route::PUT('/user/permisssion/update/{id}',[UserController::class,'userPermissionUpdate'])->name('user.permission.updaste');
Route::PUT('/user/update/{id}',[UserController::class,'update'])->name('user.update');
Route::get('/user/ban/{id}',[UserController::class,'ban'])->name('user.ban');
Route::delete('/user/delete/{id}',[UserController::class,'destroy'])->name('user.destroy');
Route::GET('/user/restore/{id}',[UserController::class,'restore'])->name('user.restore');
Route::delete('/user/{id}/Permanent_delete',[UserController::class,'permanentDestroy'])->name('user.permanentdestroy');
// Role Route
Route::resource('/user/role',RoleController::class);

// permission route 

Route::resource('user/permission',PermissionController::class);

// Employ routes
Route::resource('/employ',Employcontroller::class);

// class route
Route::resource('/class',ClassController::class);
// subject route
Route::resource('/subject',SubjectController::class);

// studentt register and login routes

Route::prefix('student')->name('student.')->group(function(){
    Route::middleware(['guest:student'])->group(function(){
        Route::get('/register',[StudentController::class,'register'])->name('register');
        
        Route::get('/login',[StudentController::class,'login'])->name('login');

        Route::post('/create',[StudentController::class,'create'])->name('create');
        Route::post('/check',[StudentController::class,'check'])->name('check');
    });
    Route::middleware(['auth:student'])->group(function(){
       Route::get('/dashboard',[StudentController::class,'dashboard'])->name('dashboard');
       Route::post('/logout',[StudentController::class,'logout'])->name('logout');
    });
});

Route::prefix('teacher')->name('teacher.')->group(function(){
    Route::get('/index',[TeacherController::class,'index'])->name('index');
    Route::get('/add/{cid}/{sid}',[TeacherController::class,'create'])->name('create');
    Route::post('/add/teacher/{cid}/{sid}',[TeacherController::class,'addteacher'])->name('add');
});

