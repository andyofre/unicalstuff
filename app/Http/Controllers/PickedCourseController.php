<?php

namespace App\Http\Controllers;

use App\Models\PickedCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PickedCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = Validator::make($request->all(), [
            'course_title' => 'required|unique:courses',
            'course_code' => 'required',


        ])->validate();

        $data =  new PickedCourse();

        $data->course_title = $request->course_title;
        $data->course_code = $request->course_code;

        $data->save();
        return response()->json(['success' => 'Courses added successfully.!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PickedCourse  $pickedCourse
     * @return \Illuminate\Http\Response
     */
    public function show(PickedCourse $pickedCourse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PickedCourse  $pickedCourse
     * @return \Illuminate\Http\Response
     */
    public function edit(PickedCourse $pickedCourse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PickedCourse  $pickedCourse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PickedCourse $pickedCourse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PickedCourse  $pickedCourse
     * @return \Illuminate\Http\Response
     */
    public function destroy(PickedCourse $pickedCourse)
    {
        //
    }
}