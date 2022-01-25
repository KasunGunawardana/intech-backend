<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CourseType;

use App\Http\Requests\CreateCourseTypeRequest;
use App\Http\Requests\UpdateCourseTypeRequest;

class CourseTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('courses.course-type')->with('course_types', CourseType::all()->sortBy('type_order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create-course-type');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCourseTypeRequest $request)
    {
        $type_count = count(CourseType::all());
        $type_order = $type_count + 1;

        CourseType::create([
            'name' => $request->name,
            'type_order' => $request->type_count
        ]);

        session()->flash('success', 'Course Type added successfully');

        return redirect(route('course-types.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function courseTypeSort(Request $request) {
        $type_array = $request->except('_token');

        $type_array_order = collect($type_array);

        $type_array_order->each(function ($key, $item) {
            $course_type = CourseType::where('id', $item)->firstOrFail();
            $course_type->type_order = $key;
            $course_type->save();
        });

        session()->flash('success', 'Successfully updated.');

        return redirect(route('course-types.index'));
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseType $course_type)
    {
        return view('courses.create-course-type')->with('course_type', $course_type);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCourseTypeRequest $request, CourseType $course_type)
    {
        $course_type->name = $request->name;

        $course_type->save();

        session()->flash('success', 'Course Type updated successfully');

        return redirect(route('course-types.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseType $course_type)
    {
        $course_type->delete();

        session()->flash('success', 'Course Type deleted successfully');

        return redirect(route('course-types.index'));
    }
}
