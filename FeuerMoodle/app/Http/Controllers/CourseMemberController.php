<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseMember;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CourseMemberController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CourseMember  $courseMember
     * @return \Illuminate\Http\Response
     */
    public function show(CourseMember $courseMember)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CourseMember  $courseMember
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseMember $courseMember)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CourseMember  $courseMember
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourseMember $courseMember)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CourseMember  $courseMember
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        CourseMember::where([['course_id', '=',  $course->course_id], ['user_id', '=',  Auth::user()->user_id]])->delete();
    }
}
