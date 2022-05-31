<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function payment()
    {
        return $this->hasMany(Payment::class);
    }

    public function course()
    {
        return $this->hasMany(Course::class);
    }

    public function pickedcourse()
    {
        return $this->hasMany(PickedCourse::class);
    }
}