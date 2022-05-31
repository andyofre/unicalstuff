<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Faculty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $departments = Department::all();

        return view('Backend.department', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $faculty = Faculty::all();
        return view('Backend.addDepartment', compact('faculty'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = Validator::make($request->all(), [
            'name' => 'required|unique:departments',
            'faculty_id' => 'required',
            'accountName' => 'required',
            'accountNumber' => 'required|min:10|max:10',
            'accountType' => 'required',
            // 'date_created' => 'required',
        ])->validate();

        $data = new Department();

        $data->name = $request->name;
        $data->faculty_id = $request->faculty_id;
        $data->accountName = $request->accountName;
        $data->accountNumber = $request->accountNumber;
        $data->accountType = $request->accountType;
        // $data->date_created = $request->date_created;

        dd($data);

        $data->save();

        Alert::success('success', 'Department added successfully.!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department, $id)
    {
        //
        $department = Department::find($id);

        // $department = Department::with('faculties')->find($id);
        $faculty = Faculty::all();
        // $department = Department::with('faculties');
        return view('Backend.editDepartment', compact('department', 'faculty'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department)
    {
        //
        $validatedData = Validator::make($request->all(), [
            // 'name' => 'required|unique:departments,name' . $department->id,
            'faculty_id' => 'required',
            'accountName' => 'required',
            'accountNumber' => 'required|min:10|max:10',
            'accountType' => 'required',
            // 'date_created' => 'required',
        ])->validate();

        $data = new Department();

        // $data->name = $request->name;
        $data->faculty_id = $request->faculty_id;
        $data->accountName = $request->accountName;
        $data->accountNumber = $request->accountNumber;
        $data->accountType = $request->accountType;
        // $data->date_created = $request->date_created;

        dd($data);

        $data->save();

        Alert::success('success', 'Department updated successfully.!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {
        //
    }
}