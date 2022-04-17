<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\User;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::orderBy('course_id', 'asc')->get();

        return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = CourseCategory::orderBy('name')->get();
        $owners = User::orderBy('username')->get();

        return view('courses.create')->with('categories', $categories)->with('owners', $owners);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'category_id' => 'required',
            'owner_id' => 'required',
        ]);

        Course::insert(
            [
                'code' => $request['code'],
                'name' => $request['name'],
                'category_id' => $request['category_id'],
                'owner_id' => $request['owner_id'],
            ]
        );
        return redirect()->route('courses.index')
            ->with('success', 'Kurzus hozzáadása sikeres!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        return view('courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $categories = CourseCategory::orderBy('name')->get();
        $owners = User::orderBy('username')->get();

        return view('courses.edit', compact('course'))->with('categories', $categories)->with('owners', $owners);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'category_id' => 'required',
            'owner_id' => 'required',
        ]);
        $course->update($request->all());

        return redirect()->route('courses.index')
            ->with('success', 'Kurzus módosítása sikeres!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('courses.index')
            ->with('success', 'A kurzus törlése sikeres!');
    }
}
