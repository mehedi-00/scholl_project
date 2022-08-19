<?php

namespace App\Models;

use App\Models\User;
use App\Models\Sclass;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subject extends Model
{
    use HasFactory;

    public function Sclass(){
        return $this->belongsToMany(Sclass::class);
    }
    public function teacher()
    {
        return $this->belongsToMany(User::class);
    }
}
