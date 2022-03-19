<?php

namespace App\Http\Controllers;

use App\Models\Course;
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
        $courses = Course::orderBy('name', 'desc')->get();
    
        return view('courses.index',compact('courses'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create');
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
            'id' => 'required',
            'code' => 'required',
            'name' => 'required',
            'categoryId' => 'required',
            'ownerId' => 'required',
        ]);
    
        //Course::create($request->all());
        date_default_timezone_set("Europe/Budapest");
        Course::insert(
            [
            'course_id' => $request['id'],
            'code' => $request['code'],
            'name' => $request['name'],
            'category_id' => $request['categoryId'],
            'owner_id' => $request['ownerId'],
            'created_at' => date("Y-m-d h:i:sa")
            ]
        );
        // $request['id'], $request['code'], $request['name'], $request['category_id'], $request['owner_id']
        return redirect()->route('courses.index')
                        ->with('Sikeres hozzáadás','Kurzus hozzáadása sikeres!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course= Course::where('course_id',$id);

        $course->delete();
    
        return redirect()->route('courses.index');
    }
}
