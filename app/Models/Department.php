<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;


    protected $fillable = [
        'name', 'faculty_id',  'accountName', 'accountNumber', 'accountType', 'date_created'
    ];


    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }


    public function student()
    {
        return $this->hasMany(Student::class);
    }


    public function Course()
    {
        return $this->hasMany(Course::class);
    }
}