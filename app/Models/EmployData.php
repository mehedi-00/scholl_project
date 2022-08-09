<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EmployData extends Model
{
    use HasFactory;

    public function User(){
        return $this->belongsTo(User::class);
    }
}
