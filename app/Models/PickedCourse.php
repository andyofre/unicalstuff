<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PickedCourse extends Model
{
    use HasFactory;

    public function student()
    {
        return $this->belongsTo(Student::class);
    }


    public function payment()
    {
        return $this->hasMany(Payment::class);
    }
}