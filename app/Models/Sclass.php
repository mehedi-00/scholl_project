<?php

namespace App\Models;

use App\Models\User;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sclass extends Model
{
    use HasFactory;
    public function Subject(){
     return   $this->belongsToMany(Subject::class);
    }
    public function Student(){
        return $this->hasMany(Student::class);
    }
    public function User(){
        return $this->hasMany(User::class);
    }
}
