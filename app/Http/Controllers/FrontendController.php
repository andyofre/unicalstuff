<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;
use App\Models\Department;
use App\Models\Course;

class FrontendController extends Controller
{
    //
    public function registerStudent()
    {
        return view('application.register');
    }


    public function validateStudent()
    {

        return view('application.validate');
    }


    public function checkStudent(Request $request)
    {
        $data = $request->all();


        $student = Student::where('matricNumber', request('matricNumber_'))->first();

        if ($student) {
            // return 'checking';
            $department  = Department::all();

            $course = Course::all();

            return view('application.addcourse', compact('department', 'course'));
        } else if ($student === null) {
            return redirect()->back()->with('error_message', 'Student do not exist in our records, please register');
        }
    }
}