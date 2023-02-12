<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function enrollment()
    {
        return $this->hasMany(Enrollment::class);
    }

    public function attendence()
    {
        return $this->hasMany(Attendance::class);
    }
}
